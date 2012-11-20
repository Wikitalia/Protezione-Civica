<?php /* Smarty version Smarty-3.0.7, created on 2012-04-16 23:51:53
         compiled from "/var/www/test.decorourbano.org/templates/suDU.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1739960154f8c9479ec1a37-60195205%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ff4c64711f739a23fe289a954dde9eaa466441b' => 
    array (
      0 => '/var/www/test.decorourbano.org/templates/suDU.tpl',
      1 => 1333467934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1739960154f8c9479ec1a37-60195205',
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