<?php /* Smarty version Smarty-3.0.7, created on 2012-04-05 11:44:57
         compiled from "/var/www/test.decorourbano.org/templates/vediProfilo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2498867724f7d6999d61b51-91525988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d8141f86abbfa102a5f8077013dcf5ae96ee6fd' => 
    array (
      0 => '/var/www/test.decorourbano.org/templates/vediProfilo.tpl',
      1 => 1333467934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2498867724f7d6999d61b51-91525988',
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

<div id="profiloHeader" class="rightPageHeader">
<?php $_template = new Smarty_Internal_Template("includes/dettagliProfiloUtente.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</div>
<div>
<?php if ($_smarty_tpl->getVariable('segnalazioni')->value=='null'){?>
	<div id="profiloNoSegnalazioniIntro">
		<div class="fBrown fontS32 textCenter fNunito"><?php echo $_smarty_tpl->getConfigVariable('ops');?>
</div>
		<div class="textCenter marginT10 marginB10"><img src="/images/bachecavuota.png" alt="" /></div>
		<div class="textCenter fGreen fontS26 fNunito">
		<?php echo $_smarty_tpl->getVariable('user_profile')->value['nome'];?>
 <?php echo $_smarty_tpl->getVariable('user_profile')->value['cognome'];?>
 <?php echo $_smarty_tpl->getConfigVariable('noSegn');?>
<br />
		</div>
	</div>
<?php }else{ ?>
	<?php $_template = new Smarty_Internal_Template("includes/segnalazioni.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<?php }?>
</div>

<?php $_template = new Smarty_Internal_Template("includes/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
