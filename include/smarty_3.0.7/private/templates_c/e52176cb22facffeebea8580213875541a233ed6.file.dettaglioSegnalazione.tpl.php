<?php /* Smarty version Smarty-3.0.7, created on 2012-06-12 16:28:27
         compiled from "/var/www/protezionecivica/templates/dettaglioSegnalazione.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4405020394fd7520b4f2b67-83543972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e52176cb22facffeebea8580213875541a233ed6' => 
    array (
      0 => '/var/www/protezionecivica/templates/dettaglioSegnalazione.tpl',
      1 => 1339511305,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4405020394fd7520b4f2b67-83543972',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<?php $_template = new Smarty_Internal_Template("includes/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<script>
	var settings_limit_giorni=<?php echo $_smarty_tpl->getVariable('settings')->value['segnalazioni']['limit_giorni'];?>
;
	var json_segnalazioni='<?php echo $_smarty_tpl->getVariable('segnalazioni')->value;?>
';
	var settings_limit_numero=<?php echo $_smarty_tpl->getVariable('settings')->value['segnalazioni']['limit_numero'];?>
;
</script>



<?php if ($_smarty_tpl->getVariable('segnalazione_valida')->value){?>

	<div id="profiloHeader" class="rightPageHeader">
	 	
		<?php $_template = new Smarty_Internal_Template("includes/path.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
		
	</div>

	<?php $_template = new Smarty_Internal_Template("includes/segnalazioni.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<?php }elseif($_smarty_tpl->getVariable('segnalazione_in_moderazione')->value){?>
	Segnalazione in moderazione
<?php }elseif($_smarty_tpl->getVariable('segnalazione_rimossa')->value){?>
	Segnalazione rimossa
<?php }elseif($_smarty_tpl->getVariable('segnalazione_non_presente')->value){?>
	<?php echo $_smarty_tpl->getConfigVariable('segnNonPresente');?>

<?php }?>


<?php $_template = new Smarty_Internal_Template("includes/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>