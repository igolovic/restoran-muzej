<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="../style.css" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Unos dnevnog jelovnika</title>
<link rel="shortcut icon" href="../images/a.ico" />
</head>
<body style="text-align:center">

<?

	$content = "";
	
	if(!file_exists("../content.htm"))
	{
		$fileHandle = fopen("../content.htm", "w");
		fclose($fileHandle);
	}
	
	if(isset($_POST["textareaContent"]))
	{
		$content = stripslashes($_POST["textareaContent"]);
		$fileHandle = fopen("../content.htm", "w");
		fwrite($fileHandle, $content);
		fclose($fileHandle);
	}
		
	$content = file_get_contents("../content.htm");

?>

<form name="main" id="main" method="post" action="admin.php">

<script type="text/javascript" src="../tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
tinyMCE.init({
	mode : "exact",
	elements : 'textareaContent',
	width : "100%",
	height : "600",
	theme : "advanced",
	button_title_map: false,
	apply_source_formatting: true,
	plugins: "table,contextmenu,advimage,advlink,paste,imagepopup",
	theme_advanced_toolbar_align: "left",
	theme_advanced_buttons1: "formatselect,outdent,indent,seperator,undo,redo,fontselect,fontsizeselect,link",
	theme_advanced_buttons2: "justifyleft,justifycenter,justifyright,separator,bold,italic,underline,separator,forecolor,backcolor,separator,bullist,numlist,link,separator,imagepopup,table,separator,sub,sup",
	theme_advanced_buttons3: "",
	theme_advanced_toolbar_location: "top",
	theme_advanced_path_location : "bottom",
	theme_advanced_resizing : true,
	content_css : "/style/editable.css",
	theme_advanced_blockformats : "h2,h3,blockquote"
});

</script>

<table id="contentContainer" style="margin-left:auto; margin-right:auto">
<tr>
<td>
<table cellpadding="0" cellspacing="0">
<tr>
<td class="tdContent">
<table cellpadding="0" cellspacing="0">
<tr>
<td>
    <div name="contentCell" id="contentCell"><? echo $content ?></div>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>

<table cellpadding="0" cellspacing="0" style=" width:100%">
	<tr>
    	<td style="height:70px">
            <input type="submit" value="Spremi" style="width:100px; margin-top:20px" />
            <input type="button" value="Pogledaj na javnom dijelu" onclick='window.open("../index.php?task=dailyMenu","_blank")' style="width:200px; margin-top:20px" />
            <input type="hidden" name="editedContent" id="editedContent" />
        </td>
    </tr>
	<tr>
    	<td>
        	<textarea id="textareaContent" name="textareaContent"><? echo $content ?></textarea>
        </td>
    </tr>
</table>
</form>
</body>
</html>