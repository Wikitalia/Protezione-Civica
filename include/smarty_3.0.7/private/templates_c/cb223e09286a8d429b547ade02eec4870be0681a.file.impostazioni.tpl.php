<?php /* Smarty version Smarty-3.0.7, created on 2012-06-12 16:31:46
         compiled from "/var/www/protezionecivica/templates/impostazioni.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4544144054fd752d2eea551-12654783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb223e09286a8d429b547ade02eec4870be0681a' => 
    array (
      0 => '/var/www/protezionecivica/templates/impostazioni.tpl',
      1 => 1339511506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4544144054fd752d2eea551-12654783',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<?php $_template = new Smarty_Internal_Template("includes/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<div class="rightPageHeader">
	<?php $_template = new Smarty_Internal_Template("includes/path.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
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
