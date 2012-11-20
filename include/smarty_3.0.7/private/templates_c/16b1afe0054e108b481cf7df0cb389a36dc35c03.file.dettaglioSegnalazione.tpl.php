<?php /* Smarty version Smarty-3.0.7, created on 2012-06-28 12:23:06
         compiled from "/htdocs/web//mappa/templates/dettaglioSegnalazione.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5234822964fec308ab53143-36120449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16b1afe0054e108b481cf7df0cb389a36dc35c03' => 
    array (
      0 => '/htdocs/web//mappa/templates/dettaglioSegnalazione.tpl',
      1 => 1340875511,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5234822964fec308ab53143-36120449',
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