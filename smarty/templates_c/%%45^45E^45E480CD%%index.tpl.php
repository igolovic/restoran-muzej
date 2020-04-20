<?php /* Smarty version 2.6.26, created on 2009-12-23 20:31:25
         compiled from index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'index.tpl', 16, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Restoran Muzej</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="divLevel1Container">
	<div id="divLevel2Container">
        <div id="divHeader">
            <img alt="" src="images/header_letters.png" style="width:428px; height:128px; float:left" />
            <img alt="" src="images/header_image.jpg" style="height:128px; float:right" />
        </div>
        <div id="divMenu">
            <span class="spanMenuEl" style='background-color:<?php echo ((is_array($_tmp=@$this->_tpl_vars['index'])) ? $this->_run_mod_handler('default', true, $_tmp, "#68858B") : smarty_modifier_default($_tmp, "#68858B")); ?>
'><a class="header" href="index.html">Galerija</a></span>
            <span class="spanMenuEl" style='background-color:<?php echo ((is_array($_tmp=@$this->_tpl_vars['about'])) ? $this->_run_mod_handler('default', true, $_tmp, "#68858B") : smarty_modifier_default($_tmp, "#68858B")); ?>
'><a class="header" href="about.html">O nama</a></span>
            <span class="spanMenuEl" style='background-color:<?php echo ((is_array($_tmp=@$this->_tpl_vars['menu'])) ? $this->_run_mod_handler('default', true, $_tmp, "#68858B") : smarty_modifier_default($_tmp, "#68858B")); ?>
'><a class="header" href="menu.html">Menu</a></span>
            <span class="spanMenuEl" style='background-color:<?php echo ((is_array($_tmp=@$this->_tpl_vars['agencies'])) ? $this->_run_mod_handler('default', true, $_tmp, "#68858B") : smarty_modifier_default($_tmp, "#68858B")); ?>
'><a class="header" href="agencies.html">Za agencije</a></span>
            <span class="spanMenuEl" style='background-color:<?php echo ((is_array($_tmp=@$this->_tpl_vars['news'])) ? $this->_run_mod_handler('default', true, $_tmp, "#68858B") : smarty_modifier_default($_tmp, "#68858B")); ?>
'><a class="header" href="news.html">Novosti</a></span>
            <span class="spanMenuEl" style='margin-right:0px;background-color:<?php echo ((is_array($_tmp=@$this->_tpl_vars['menuBckgCol'])) ? $this->_run_mod_handler('default', true, $_tmp, "#68858B") : smarty_modifier_default($_tmp, "#68858B")); ?>
'><a class="header" href="contact.html">Kontakt</a></span>                        
        </div>
      	<?php echo $this->_tpl_vars['content']; ?>

	</div>
</div>
<span id="footer">Restoran i kavana Muzej 2009.</span>
</body>
</html>