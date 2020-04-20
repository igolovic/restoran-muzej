<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="Restoran Muzej je vrhunski ugostiteljski objekt smješten u zgradi Muzeja za umjetnost i obrt u samom centru Zagreba, preko puta Hrvatskog narodnog kazališta. Naša djelatnost obuhvaća organizaciju ručkova, večera, domjenaka uključujući posebnu ponudu za putničke agencije." />
		<meta name="keywords" content="restoran,restoran muzej,zagreb,gastronomija,ugostiteljstvo,ručak,muzej za umjetnost i obrt,vjenčanja,svadbe,domjenak,organizacija domjenaka,poslovni ručkovi" />
		<title>Restoran Muzej</title>
		<link rel="stylesheet" href="style.css" type="text/css" />
		<link rel="shortcut icon" href="images/a.ico" />
		<meta name="author" content="www.ivan-golovic.from.hr" />
	</head>
	<body>
		<div id="divLevel1Container">
			<div id="divLevel2Container">
			<div id="divHeader">
			    <img alt="" src="images/header_logo.png" style="height:128px; float:left" />
			    <img alt="" src="images/header_image.jpg" style="height:128px; float:right" />
			</div>
			<div id="divMenu">
			    <span class="me" style='background-color:{$index|default:"#68858B"}'><a class="header" href="index.php?task=index">Galerija</a></span>
			    <span class="me" style='background-color:{$about|default:"#68858B"}'><a class="header" href="index.php?task=about">O nama</a></span>
			    <span class="me" style='background-color:{$menu|default:"#68858B"}'><a class="header" href="index.php?task=menu">Jelovnici</a></span>
			    <span class="me" style='background-color:{$agencies|default:"#68858B"}'><a class="header" href="index.php?task=agencies">Za agencije</a></span>
			    <span class="me" style='background-color:{$news|default:"#68858B"}'><a class="header" href="index.php?task=news">Novosti</a></span>
			    <span class="me" style='margin-right:0px;background-color:{$contact|default:"#68858B"}'><a class="header" href="index.php?task=contact">Kontakt</a></span>                        
			</div>
			<div class="divLeftContainer">
			    <div class="divText">
				<span class="spanSubTitle">Dnevni menu Restorana Muzej</span>
				<div style="height:40px; line-height:40px; width:200px">
					<a href='index.php?task={$backToHref|default:"menu"}'>{$backToText|default:"Jelovnici"}</a> > <a href='index.php?task=dailyMenu&amp;back={$backToHref|default:"menu"}'>Dnevni menu</a>
				</div>
				Ovdje se nalazi dnevni menu našeg restorana.
			    </div>
			</div>
			<img alt="" src="images/pixel.gif" style="width:800px; height:20px" />
			</div>
		</div>
		<table id="contentContainer" style="margin-left:auto; margin-right:auto; margin-top:10px">
		<tr>
		<td>
		<table cellpadding="0" cellspacing="0">
		    <tr>
			<td class="tdContent">
			    <table cellpadding="0" cellspacing="0">
				<tr>
				    <td>
				    <div id="contentCell">
		{$content}
				    </div>
				    </td>
				</tr>
			    </table>
			</td>
		    </tr>
		</table>
		</td>
		</tr>
		</table>
		<span id="footer">
			&copy; Restoran i kavana Muzej 2009.<br />
		</span>
		{literal}
		<script type="text/javascript"> var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www."); document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E")); </script> <script type="text/javascript"> try { var pageTracker = _gat._getTracker("UA-12658387-1"); pageTracker._trackPageview(); } catch(err) {}</script>
		{/literal}
	</body>
</html>