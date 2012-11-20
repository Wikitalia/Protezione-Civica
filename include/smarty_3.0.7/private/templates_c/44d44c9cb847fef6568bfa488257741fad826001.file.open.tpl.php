<?php /* Smarty version Smarty-3.0.7, created on 2012-06-06 15:21:02
         compiled from "/var/www/protezionecivica/templates/open.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3278799534fcf593ecd4697-67307215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44d44c9cb847fef6568bfa488257741fad826001' => 
    array (
      0 => '/var/www/protezionecivica/templates/open.tpl',
      1 => 1338986019,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3278799534fcf593ecd4697-67307215',
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









