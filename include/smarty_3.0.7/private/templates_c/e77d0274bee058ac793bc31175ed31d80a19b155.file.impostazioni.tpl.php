<?php /* Smarty version Smarty-3.0.7, created on 2012-05-23 16:13:09
         compiled from "/var/www/test.decorourbano.org/templates/impostazioni.tpl" */ ?>
<?php /*%%SmartyHeaderCode:388980614fbcf075b86fe2-67647136%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e77d0274bee058ac793bc31175ed31d80a19b155' => 
    array (
      0 => '/var/www/test.decorourbano.org/templates/impostazioni.tpl',
      1 => 1337782386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '388980614fbcf075b86fe2-67647136',
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
		<?php echo $_smarty_tpl->getConfigVariable('impIntro');?>

	</div>
	<div class="rightHeadIcon"><div class="rhiImpostazioni"></div></div>
</div>

<div class="testoFumetto">
	<div><h3 class="pageTitle marginB5"><?php echo $_smarty_tpl->getConfigVariable('notifiche');?>
</h3></div>
	<div class="marginT20 marginB20"><?php echo $_smarty_tpl->getConfigVariable('inviaNotif1');?>
 <span class="fBold"><?php echo $_smarty_tpl->getVariable('user')->value['email'];?>
</span> <?php echo $_smarty_tpl->getConfigVariable('inviaNotif2');?>
:</div>
	<form class="skinnedForm" method="post">
		<ul class="privacyList">
			<li>
				<label for="email_commento"><?php echo $_smarty_tpl->getConfigVariable('opzione1');?>
</label> 
				<input name="email_commento" id="email_commento" type="checkbox" <?php if ($_smarty_tpl->getVariable('user')->value['email_commento']==1){?>checked="checked" <?php }?>/>
			</li>
			<li>
				<label for="email_segnalazione"><?php echo $_smarty_tpl->getConfigVariable('opzione2');?>
</label> 
				<input name="email_segnalazione" id="email_segnalazione" type="checkbox" <?php if ($_smarty_tpl->getVariable('user')->value['email_segnalazione']==1){?>checked="checked" <?php }?>/>
			</li>
			<li>
				<label for="email_gestione_comune">Viene presa in carico o risolta una mia segnalazione</label> 
				<input name="email_gestione_comune" id="email_gestione_comune" type="checkbox" <?php if ($_smarty_tpl->getVariable('user')->value['email_gestione_comune']==1){?>checked="checked" <?php }?>/>
			</li>
			<li>
				<label for="email_top"><?php echo $_smarty_tpl->getConfigVariable('opzione3');?>
</label> 
				<input name="email_top" id="email_top" type="checkbox" <?php if ($_smarty_tpl->getVariable('user')->value['email_top']==1){?>checked="checked" <?php }?>/>
			</li>
			<li>
				<label for="email_comunicazioni">Viene inviata una comunicazione da<br />Decoro Urbano</label> 
				<input name="email_comunicazioni" id="email_comunicazioni" type="checkbox" <?php if ($_smarty_tpl->getVariable('user')->value['email_comunicazioni']==1){?>checked="checked" <?php }?>/>
			</li>
		</ul>
		<input type="submit" name="form_impostazioni_utente" value="<?php echo $_smarty_tpl->getConfigVariable('salvaModifiche');?>
" class="marginT20 right" />
	</form>
</div>

<?php if ($_smarty_tpl->getVariable('user')->value['id_ruolo']==2||$_smarty_tpl->getVariable('user')->value['id_ruolo']==1){?>
<div class="testoFumetto">
	<div><h3 class="pageTitle marginB5"><?php echo $_smarty_tpl->getConfigVariable('privacyTitolo');?>
</h3></div>
	<form class="skinnedForm" method="post">
		<ul class="privacyList">
			<li>
				<label for="mostraCognome"><?php echo $_smarty_tpl->getConfigVariable('pOpzione1');?>
</label> 
				<input name="mostraCognome" id="mostraCognome" type="checkbox" <?php if ($_smarty_tpl->getVariable('user')->value['mostra_cognome']==1){?>checked="checked" <?php }?>/>
			</li>
			<li>
				<label for="profiloPubblico"><?php echo $_smarty_tpl->getConfigVariable('pOpzione2');?>
</label> 
				<input name="profiloPubblico" id="profiloPubblico" type="checkbox" <?php if ($_smarty_tpl->getVariable('user')->value['profilo_pubblico']==1){?>checked="checked" <?php }?>/>
			</li>
		</ul>
		<input type="submit" name="form_impostazioni_utente2" value="<?php echo $_smarty_tpl->getConfigVariable('salvaModifiche');?>
" class="marginT20 right" />
	</form>
</div>
<?php }?>

<?php if ($_smarty_tpl->getVariable('fb_user')->value){?>
<div class="testoFumetto">
	<div><h3 class="pageTitle marginB5"><?php echo $_smarty_tpl->getConfigVariable('socialTitolo');?>
</h3></div>
	<form class="skinnedForm" method="post">
		<ul class="privacyList">
			<li>
				<label for="fbShare"><?php echo $_smarty_tpl->getConfigVariable('socialOpzione1');?>
</label> 
				<input name="fbShare" id="fbShare" type="checkbox" <?php if ($_smarty_tpl->getVariable('user')->value['fb_share']==1){?>checked="checked" <?php }?>/>
			</li>
		</ul>
		<input type="submit" name="form_impostazioni_utente3" value="<?php echo $_smarty_tpl->getConfigVariable('salvaModifiche');?>
" class="marginT20 right" />
	</form>
</div>
<?php }?>

<?php $_template = new Smarty_Internal_Template("includes/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
