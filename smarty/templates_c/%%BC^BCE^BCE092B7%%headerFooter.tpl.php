<?php /* Smarty version 2.6.26, created on 2010-10-31 00:43:37
         compiled from headerFooter.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'headerFooter.tpl', 26, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="Restoran Muzej je vrhunski ugostiteljski objekt smješten u zgradi Muzeja za umjetnost i obrt u samom centru Zagreba, preko puta Hrvatskog narodnog kazališta. Naša djelatnost obuhvaća organizaciju ručkova, večera, domjenaka uključujući posebnu ponudu za putničke agencije." />
        <meta name="keywords" content="restoran,restoran muzej,zagreb,gastronomija,ugostiteljstvo,ručak,muzej za umjetnost i obrt,vjenčanja,svadbe,domjenak,organizacija domjenaka,poslovni ručkovi" />
        <title>Restoran Muzej</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
        <link rel="shortcut icon" href="images/a.ico" />
        <link rel="stylesheet" type="text/css" href="/highslide/highslide.css" />
        <!--[if lt IE 7]>
        <link rel="stylesheet" type="text/css" href="/highslide/highslide-ie6.css" />
        <![endif]-->
        <script type="text/javascript" src="/highslide/highslide-full.packed.js"></script>
        <script type="text/javascript" src="/highslide/highslide-conf.js"></script>        
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
            <span class="me" style='background-color:<?php echo ((is_array($_tmp=@$this->_tpl_vars['index'])) ? $this->_run_mod_handler('default', true, $_tmp, "#68858B") : smarty_modifier_default($_tmp, "#68858B")); ?>
'><a class="header" href="index.php?task=index">Galerija</a></span>
            <span class="me" style='background-color:<?php echo ((is_array($_tmp=@$this->_tpl_vars['about'])) ? $this->_run_mod_handler('default', true, $_tmp, "#68858B") : smarty_modifier_default($_tmp, "#68858B")); ?>
'><a class="header" href="index.php?task=about">O nama</a></span>
            <span class="me" style='background-color:<?php echo ((is_array($_tmp=@$this->_tpl_vars['menu'])) ? $this->_run_mod_handler('default', true, $_tmp, "#68858B") : smarty_modifier_default($_tmp, "#68858B")); ?>
'><a class="header" href="index.php?task=menu">Jelovnici</a></span>
            <span class="me" style='background-color:<?php echo ((is_array($_tmp=@$this->_tpl_vars['agencies'])) ? $this->_run_mod_handler('default', true, $_tmp, "#68858B") : smarty_modifier_default($_tmp, "#68858B")); ?>
'><a class="header" href="index.php?task=agencies">Za agencije</a></span>
            <span class="me" style='background-color:<?php echo ((is_array($_tmp=@$this->_tpl_vars['agenciesEn'])) ? $this->_run_mod_handler('default', true, $_tmp, "#68858B") : smarty_modifier_default($_tmp, "#68858B")); ?>
'><a class="header" href="index.php?task=agenciesEn">For agencies</a></span>
            <span class="me" style='margin-right:0px;background-color:<?php echo ((is_array($_tmp=@$this->_tpl_vars['contact'])) ? $this->_run_mod_handler('default', true, $_tmp, "#68858B") : smarty_modifier_default($_tmp, "#68858B")); ?>
'><a class="header" href="index.php?task=contact">Kontakt</a></span>                        
            </div>
            <div class="notification" style="display:<?php echo ((is_array($_tmp=@$this->_tpl_vars['mailMsgVisible'])) ? $this->_run_mod_handler('default', true, $_tmp, 'none') : smarty_modifier_default($_tmp, 'none')); ?>
">
            <?php echo $this->_tpl_vars['mailMessage']; ?>

            </div>
        <?php echo $this->_tpl_vars['content']; ?>

        </div>
        </div>
        <span id="footer">
            &copy; Restoran i kavana Muzej 2009.<br />
        </span>
        <?php echo '
        <script type="text/javascript">
			try{
				var aReklama = document.getElementById(\'aReklama\');
				if(aReklama != null)
				{
					hs.expand(document.getElementById(\'aReklama\'), { objectType: \'iframe\', width:570, height:570 } );
				}
			}catch(err2){}
			var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www."); document.write(unescape("%3Cscript src=\'" + gaJsHost + "google-analytics.com/ga.js\' type=\'text/javascript\'%3E%3C/script%3E")); </script> <script type="text/javascript"> try { var pageTracker = _gat._getTracker("UA-12658387-1"); pageTracker._trackPageview(); } catch(err) {}
        </script>
        '; ?>

    </body>
</html>