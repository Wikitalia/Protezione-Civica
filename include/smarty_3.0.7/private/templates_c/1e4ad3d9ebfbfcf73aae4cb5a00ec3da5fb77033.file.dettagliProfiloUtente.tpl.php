<?php /* Smarty version Smarty-3.0.7, created on 2012-04-05 11:44:57
         compiled from "/var/www/test.decorourbano.org/templates/includes/dettagliProfiloUtente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9088982234f7d6999e3e774-29626881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e4ad3d9ebfbfcf73aae4cb5a00ec3da5fb77033' => 
    array (
      0 => '/var/www/test.decorourbano.org/templates/includes/dettagliProfiloUtente.tpl',
      1 => 1333467934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9088982234f7d6999e3e774-29626881',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<div>
	<?php if ($_smarty_tpl->getVariable('user')->value['id_utente']==$_smarty_tpl->getVariable('user_profile')->value['id_utente']){?>
	<div class="optionsIcon right marginL10" onclick="location.href = '<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['impostazioni'];?>
'"></div>
	<div class="modifyIcon right" onclick="location.href = '<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['modificaProfilo'];?>
'"></div>
	<?php }else{ ?>
	<?php }?>
	<div class="auto right fontS10 marginR10"><?php echo $_smarty_tpl->getConfigVariable('segnDal');?>
 <?php echo ConvertitoreData_UNIXTIMESTAMP_IT($_smarty_tpl->getVariable('user_profile')->value['data']);?>
</div>
	<img src="/resize.php?w=90&h=90&f=<?php echo $_smarty_tpl->getVariable('user_profile')->value['avatar'];?>
" class="left marginR10" alt="" />
	<h2><a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['vediProfilo'];?>
?idu=<?php echo $_smarty_tpl->getVariable('user_profile')->value['id_utente'];?>
" class="tdNone"><?php echo $_smarty_tpl->getVariable('user_profile')->value['nome'];?>
 <?php echo $_smarty_tpl->getVariable('user_profile')->value['cognome'];?>
</a></h2>
	<?php if ($_smarty_tpl->getVariable('user_profile')->value['about']){?>
		<div id="profiloDesc">
			<?php echo $_smarty_tpl->getVariable('user_profile')->value['about'];?>

		</div>
	<?php }?>
	<div id="profiloAbout">
		<?php if ($_smarty_tpl->getVariable('user_profile')->value['citta']){?>
		<ul class="profiloAboutList marginT10">
			<li class="profiloAboutTitle"><?php echo $_smarty_tpl->getConfigVariable('citta');?>
</li>
			<li><?php echo $_smarty_tpl->getVariable('user_profile')->value['citta'];?>
</li>
		</ul>
		<?php }?>
		<?php if ($_smarty_tpl->getVariable('user_profile')->value['quartiere']){?>
		<ul class="profiloAboutList marginT10">
			<li class="profiloAboutTitle"><?php echo $_smarty_tpl->getConfigVariable('quartiere');?>
</li>
			<li><?php echo $_smarty_tpl->getVariable('user_profile')->value['quartiere'];?>
</li>
		</ul>
		<?php }?>
		<?php if ($_smarty_tpl->getVariable('user_profile')->value['sito']){?>
		<ul class="profiloAboutList marginT10">
			<li class="profiloAboutTitle"><?php echo $_smarty_tpl->getConfigVariable('sito');?>
</li>
			<li><span onclick="window.open('http://<?php echo $_smarty_tpl->getVariable('user_profile')->value['sito'];?>
');"><?php echo $_smarty_tpl->getVariable('user_profile')->value['sito'];?>
</span></li>
		</ul>
		<?php }?>
		<ul class="profiloAboutList marginT10">
			<li class="profiloAboutTitle"><?php echo $_smarty_tpl->getConfigVariable('cifre');?>
</li>
			<li><?php echo $_smarty_tpl->getVariable('user_profile')->value['n_segnalazioni'];?>
 <?php echo $_smarty_tpl->getConfigVariable('segnalazioni');?>
</li>
			<li><?php echo $_smarty_tpl->getVariable('user_profile')->value['n_segnalazioni_quotidiane'];?>
 <?php echo $_smarty_tpl->getConfigVariable('segnQuot');?>
</li>
		</ul>
	</div>
</div>

<div id="profiloTools">
	
</div>