<?php /* Smarty version Smarty-3.0.7, created on 2012-04-22 05:49:29
         compiled from "/var/www/test.decorourbano.org/templates/guida.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7174101294f937fc9d35461-17422324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '976d9393c0621cec1ea998b6d04f7fd947484ab1' => 
    array (
      0 => '/var/www/test.decorourbano.org/templates/guida.tpl',
      1 => 1333467934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7174101294f937fc9d35461-17422324',
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
		<?php echo $_smarty_tpl->getConfigVariable('intro');?>

	</div>
	<div class="rightHeadIcon"><div class="rhiGuida"></div></div>
</div>


<div class="guidaContainer" style="margin-top:0;">
	<img src="/images/guida/pittog1.gif" alt="" />
	<h3 class="pageTitle marginB5 fontS18"><?php echo $_smarty_tpl->getConfigVariable('titoloParag1');?>
</h3>
	 <?php echo $_smarty_tpl->getConfigVariable('parag1');?>

	<div class="divider"></div>
</div>
<div class="guidaContainer">
	<img src="/images/guida/pittog2.gif" alt="" />
	<h3 class="pageTitle marginB5 fontS18"><?php echo $_smarty_tpl->getConfigVariable('titoloParag2');?>
</h3>
	 <?php echo $_smarty_tpl->getConfigVariable('parag2');?>

	<div class="divider"></div>
</div>
<div class="guidaContainer">
	<img src="/images/guida/pittog3.gif" alt="" />
	<h3 class="pageTitle marginB5 fontS18"><?php echo $_smarty_tpl->getConfigVariable('titoloParag3');?>
</h3>
	  <?php echo $_smarty_tpl->getConfigVariable('parag3');?>

	<div class="divider"></div>
</div>
<div class="guidaContainer">
	<img src="/images/guida/pittog4.gif" alt="" />
	<h3 class="pageTitle marginB5 fontS18"><?php echo $_smarty_tpl->getConfigVariable('titoloParag4');?>
</h3>
	 <?php echo $_smarty_tpl->getConfigVariable('parag4');?>

</div>

<?php $_template = new Smarty_Internal_Template("includes/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>