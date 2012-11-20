<?php /* Smarty version Smarty-3.0.7, created on 2012-04-20 17:32:53
         compiled from "/var/www/test.decorourbano.org/templates/dettaglioSegnalazione.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9737623064f7b2d80d8fd85-77380522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0b03a1dbde8129275f6a995a7ff6225d37d0e38' => 
    array (
      0 => '/var/www/test.decorourbano.org/templates/dettaglioSegnalazione.tpl',
      1 => 1333467934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9737623064f7b2d80d8fd85-77380522',
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
	 	
		<div id="segnalazionePath" class="marginT5">
	   <div class="auto">
	    &nbsp;DU / <a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['listaSegnalazioni'];?>
" class="tdNone">Italia</a> / 
	    <a href="http://<?php echo $_smarty_tpl->getVariable('segnalazione')->value['regione_url'];?>
.<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['dominio'];?>
" class="tdNone"><?php echo $_smarty_tpl->getVariable('segnalazione')->value['regione'];?>
</a> / <a href="http://<?php echo $_smarty_tpl->getVariable('segnalazione')->value['citta_url'];?>
.<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['dominio'];?>
" class="tdNone"><?php echo $_smarty_tpl->getVariable('segnalazione')->value['citta'];?>
</a> / <?php echo $_smarty_tpl->getVariable('segnalazione')->value['indirizzo'];?>
 <?php echo $_smarty_tpl->getVariable('segnalazione')->value['civico'];?>

	   </div>
	  </div>
		
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