<?php /* Smarty version Smarty-3.0.7, created on 2012-04-22 05:49:33
         compiled from "/var/www/test.decorourbano.org/templates/open.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18664035194f937fcd3010f6-10001375%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a84b474e2d6731110f8d3ce3e4db266159fb8ab9' => 
    array (
      0 => '/var/www/test.decorourbano.org/templates/open.tpl',
      1 => 1333467934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18664035194f937fcd3010f6-10001375',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<?php $_template = new Smarty_Internal_Template("includes/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<div class="rightPageHeader">
	<div class="rightHeadText"><h3 class="fontS18 marginB5 fBrown"><?php echo $_smarty_tpl->getConfigVariable('open_titolo');?>
</h3>
		<?php echo $_smarty_tpl->getConfigVariable('open_sottotitolo');?>

	</div>
	<div class="rightHeadIcon"><div class="rhiOpen"></div></div>
</div>

<div class="testoFumetto">


	<h3 class="pageTitle"><?php echo $_smarty_tpl->getConfigVariable('open_data_titolo');?>
</h3>
  <?php echo $_smarty_tpl->getConfigVariable('open_data_testo');?>
<br>


	<div class="divider"></div>

	<h3 class="pageTitle"><?php echo $_smarty_tpl->getConfigVariable('open_source_titolo');?>
</h3>
  <?php echo $_smarty_tpl->getConfigVariable('open_source_testo');?>
<br>



</div>

<?php $_template = new Smarty_Internal_Template("includes/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>









