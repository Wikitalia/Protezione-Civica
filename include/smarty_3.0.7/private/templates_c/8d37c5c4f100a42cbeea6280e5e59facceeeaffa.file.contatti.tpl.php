<?php /* Smarty version Smarty-3.0.7, created on 2012-04-22 05:49:45
         compiled from "/var/www/test.decorourbano.org/templates/contatti.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1389949704f937fd9e917b4-41421791%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d37c5c4f100a42cbeea6280e5e59facceeeaffa' => 
    array (
      0 => '/var/www/test.decorourbano.org/templates/contatti.tpl',
      1 => 1333467934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1389949704f937fd9e917b4-41421791',
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
		<?php echo $_smarty_tpl->getConfigVariable('testoIntroduttivo');?>

	</div>
	<div class="rightHeadIcon"><div class="rhiContatti"></div></div>
</div>
<?php if (!$_smarty_tpl->getVariable('email_inviata')->value){?>
<div class="testoFumetto" id="contattiForm">
	<form class="skinnedForm" method="post">
		<?php if (!$_smarty_tpl->getVariable('user')->value){?>
		<div class="marginB10"><label for="nome"><?php echo $_smarty_tpl->getConfigVariable('nome');?>
</label> <input type="text" name="nome" id="nome" /></div>
		<div class="marginB10"><label for="cognome"><?php echo $_smarty_tpl->getConfigVariable('cognome');?>
</label> <input type="text" name="cognome" id="cognome" /></div>
		<div class="marginB10"><label for="email"><?php echo $_smarty_tpl->getConfigVariable('email');?>
</label> <input type="text" name="email" id="email" /></div>
		<?php }else{ ?>
		<div class="marginB10"><label><?php echo $_smarty_tpl->getConfigVariable('nome');?>
</label> <span class="fBold fGreen fontS16"><?php echo $_smarty_tpl->getVariable('user')->value['nome'];?>
 <?php echo $_smarty_tpl->getVariable('user')->value['cognome'];?>
</span> </div>
		<div class="marginB10"><label><?php echo $_smarty_tpl->getConfigVariable('email');?>
</label> <span class="fBold fGreen fontS16"><?php echo $_smarty_tpl->getVariable('user')->value['email'];?>
</span></div>
		<input type="hidden" name="id_utente" value="<?php echo $_smarty_tpl->getVariable('user')->value['id_utente'];?>
" />
		<input type="hidden" name="nome" value="<?php echo $_smarty_tpl->getVariable('user')->value['nome'];?>
" />
		<input type="hidden" name="cognome" value="<?php echo $_smarty_tpl->getVariable('user')->value['cognome'];?>
" />
		<input type="hidden" name="email" value="<?php echo $_smarty_tpl->getVariable('user')->value['email'];?>
" />
		<?php }?>
		<div class="marginB10">
			<label for="argomento"><?php echo $_smarty_tpl->getConfigVariable('argomento');?>
</label> 
			<select name="argomento" id="argomento">
				<option></option>
				<option value="adesioniComuni"><?php echo $_smarty_tpl->getConfigVariable('arg0');?>
</option>
				<option value="ideeProgetto"><?php echo $_smarty_tpl->getConfigVariable('arg1');?>
</option>
				<option value="ideeSito"><?php echo $_smarty_tpl->getConfigVariable('arg2');?>
</option>
				<option value="ideeApplicazioni"><?php echo $_smarty_tpl->getConfigVariable('arg3');?>
</option>
				<option value="patrocini"><?php echo $_smarty_tpl->getConfigVariable('arg4');?>
</option>
				<option value="sponsorizzazioni"><?php echo $_smarty_tpl->getConfigVariable('arg5');?>
</option>
				<option value="ufficioStampa"><?php echo $_smarty_tpl->getConfigVariable('arg6');?>
</option>
				<option value="segnalazioniUtenti"><?php echo $_smarty_tpl->getConfigVariable('arg7');?>
</option>
				<option value="anomaliSito"><?php echo $_smarty_tpl->getConfigVariable('arg8');?>
</option>
				<option value="altro"><?php echo $_smarty_tpl->getConfigVariable('arg9');?>
</option>
			</select>
		</div>
		<div class="marginB10">
			<label for="testoEmail"><?php echo $_smarty_tpl->getConfigVariable('testo');?>
</label>
			<textarea name="testoEmail" id="testoEmail"></textarea>
			<div class="fontS10 marginT15 textCenter">
				<?php echo $_smarty_tpl->getConfigVariable('disclaimerContattaci');?>
 <a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['privacy'];?>
" target="_blank"><?php echo $_smarty_tpl->getConfigVariable('privacy');?>
</a>
			</div>
			
		</div>
		<div class="textRight"><input type="submit" name="form_contatti" /></div>
	</form>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php }else{ ?>
<div class="testoFumetto">
	<div class="textCenter marginT10"><img src="/images/DUBollini/conferma.gif" /></div>
	<div class="fontS24 fGreen fBold textCenter marginB10 marginT20"><?php echo $_smarty_tpl->getConfigVariable('grazie');?>
 <?php echo $_smarty_tpl->getVariable('user')->value['nome'];?>
 <?php echo $_smarty_tpl->getVariable('user')->value['cognome'];?>
!</div>
	<div class="fontS18 textCenter marginB20"><?php echo $_smarty_tpl->getConfigVariable('mexInviato');?>
</div>
</div>
<?php }?>
<?php $_template = new Smarty_Internal_Template("includes/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>