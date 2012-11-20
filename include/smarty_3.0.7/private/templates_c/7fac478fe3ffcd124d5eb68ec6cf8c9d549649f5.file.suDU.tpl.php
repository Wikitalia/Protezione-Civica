<?php /* Smarty version Smarty-3.0.7, created on 2012-06-06 15:35:33
         compiled from "/var/www/protezionecivica/templates/suDU.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6074191094fcf5ca5582d54-23260614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fac478fe3ffcd124d5eb68ec6cf8c9d549649f5' => 
    array (
      0 => '/var/www/protezionecivica/templates/suDU.tpl',
      1 => 1338986019,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6074191094fcf5ca5582d54-23260614',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<?php $_template = new Smarty_Internal_Template("includes/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<div class="rightPageHeader">
	<div class="rightHeadText"><h3 class="fontS18 marginB5 fBrown"><?php echo $_smarty_tpl->getConfigVariable('titolo');?>
</h3>
		<p><?php echo $_smarty_tpl->getConfigVariable('intro');?>
</p>
	</div>
	<div class="rightHeadIcon"><div class="rhiSuDU"></div></div>
</div>


<div class="testoFumetto textJustify">
	<div>

	<div class="rightText"><h3 class="fontS18 marginB5 fBrown"><?php echo $_smarty_tpl->getConfigVariable('titolo1');?>
</h3>
		<p><?php echo $_smarty_tpl->getConfigVariable('testo1');?>
</p></div>

	<div class="rightText"><h3 class="fontS18 marginB5 fBrown"><?php echo $_smarty_tpl->getConfigVariable('titolo2');?>
</h3>
		<p><?php echo $_smarty_tpl->getConfigVariable('testo2');?>
</p></div>

	<div class="rightText"><h3 class="fontS18 marginB5 fBrown"><?php echo $_smarty_tpl->getConfigVariable('titolo3');?>
</h3>
		<p><?php echo $_smarty_tpl->getConfigVariable('testo3');?>
</p></div>

	<div class="rightText"><h3 class="fontS18 marginB5 fBrown"><?php echo $_smarty_tpl->getConfigVariable('titolo4');?>
</h3>
		<p><?php echo $_smarty_tpl->getConfigVariable('testo4');?>
</p></div>

	<div class="rightText"><h3 class="fontS18 marginB5 fBrown"><?php echo $_smarty_tpl->getConfigVariable('titolo5');?>
</h3>
		<p><?php echo $_smarty_tpl->getConfigVariable('testo5');?>
</p></div>

	</div>
</div>
<?php $_template = new Smarty_Internal_Template("includes/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>