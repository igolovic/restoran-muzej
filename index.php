<?php

require('smarty_lib/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = 'smarty/templates';
$smarty->compile_dir = 'smarty/templates_c';
$smarty->cache_dir = 'smarty/cache';
$smarty->config_dir = 'smarty/configs';

if(isset($_GET['task']))
{
	$task = filter_input(INPUT_GET, $_GET['task'], FILTER_SANITIZE_STRING);
	$task = $_GET['task'];
}
else
{
	$task = 'index';
}

$tplFileName = "smarty/templates/" . $task . ".tpl";

if($task == 'dailyMenu')
{
	if(isset($_GET['back']))
	{
		if($_GET['back'] == "about")
		{
			$smarty->assign('backToHref', "about");
			$smarty->assign('backToText', "O nama");		
		}
		else
		{
			$smarty->assign('backToHref', "menu");
			$smarty->assign('backToText', "Jelovnici");			
		}
	}
	$dailyMenuContent = file_get_contents("content.htm");
	$smarty->assign('content', $dailyMenuContent);	
	$smarty->assign("menu", "#8CAAB0");
	$smarty->display("headerFooterDailyMenu.tpl");
}
else
{
	if($task == "contact")
	{
		if(isset($_POST["send_msg"]) && isset($_POST["name"]) && isset($_POST["message"])
		&& strlen(trim($_POST["name"])) > 0 && strlen(trim($_POST["message"])) > 0
		)
		{
			$msg = $_POST["message"];
			if(strlen($msg) > 5000)
			{
				$msg = substr($msg, 0, 5000);	
			}
			
			filter_input(INPUT_POST, $_POST["name"], FILTER_SANITIZE_STRING);
			filter_input(INPUT_POST, $msg, FILTER_SANITIZE_STRING);
			
			if(isset($_POST["email"]))
			{
				filter_input(INPUT_POST, $_POST["email"], FILTER_SANITIZE_STRING);
			}
			
			$message = "<table>";
			$message .= "<tr><td>Ime: </td><td>" . $_POST["name"] . "</td></tr>";
			$message .= "<tr><td>E - mail: </td><td>" . $_POST["email"] . "</td></tr>";
			$message .= "<tr><td>Poruka: </td><td>" . $msg . "</td></tr>";
			$message .= "</table>";
	
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
			if(mail("restoran.muzej@gmail.com", "Restoran Muzej - nova poruka", $message, $headers))
			{
				$smarty->assign("mailMessage", "Poruka je uspješno poslana, hvala.");
				$smarty->assign("mailMsgVisible", "inline-block");
				mail("dragan.besker@gmail.com", "Restoran Muzej - nova poruka", $message, $headers);
				mail("igolovic@gmail.com", "Restoran Muzej - nova poruka", $message, $headers);
			}
			else
			{
				err();
			}
		}
		else
		{
			if(isset($_POST["send_msg"]))
			{
				err();
			}
		}
	}

	$smarty->assign('content', file_get_contents($tplFileName));
	$smarty->assign($task, "#8CAAB0");
	$smarty->display("headerFooter.tpl");
}

function err()
{
	global $smarty;
	$smarty->assign("mailMessage", "Greška, slanje poruke nije uspjelo. Provjerite da li ste unijeli ime i sadržaj poruke.");
	$smarty->assign("mailMsgVisible", "inline-block");	
}

?>
