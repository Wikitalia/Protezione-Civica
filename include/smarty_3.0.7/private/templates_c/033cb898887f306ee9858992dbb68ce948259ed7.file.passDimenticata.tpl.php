<?php /* Smarty version Smarty-3.0.7, created on 2012-06-14 19:51:42
         compiled from "/var/www/protezionecivica/templates/passDimenticata.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15601960034fda24aeeb68b0-58809726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '033cb898887f306ee9858992dbb68ce948259ed7' => 
    array (
      0 => '/var/www/protezionecivica/templates/passDimenticata.tpl',
      1 => 1339511559,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15601960034fda24aeeb68b0-58809726',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<?php $_template = new Smarty_Internal_Template("includes/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>


<script type="text/javascript" src="/js/controlli.js"></script>

<div class="rightPageHeader">
	<div class="rightHeadText"><h3 class="fontS18 marginB5 fBrown"><?php echo $_smarty_tpl->getConfigVariable('titolo');?>
</h3>
		<?php $_template = new Smarty_Internal_Template("includes/path.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
	</div>
	<div class="rightHeadIcon"><div class="rhiPassDimenticata"></div></div>
</div>

<?php if ($_smarty_tpl->getVariable('reset_ok')->value){?>

<div class="testoFumetto">
	<div><h3 class="pageTitle marginB5"><?php echo $_smarty_tpl->getConfigVariable('resetPass');?>
</h3></div>
	<?php echo $_smarty_tpl->getConfigVariable('passCambiata');?>

	
	<meta HTTP-EQUIV="REFRESH" content="5; url=<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
">
	
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<?php }elseif($_smarty_tpl->getVariable('errore_generico')->value){?>

<div class="testoFumetto">
	<div><h3 class="pageTitle marginB5"><?php echo $_smarty_tpl->getConfigVariable('error');?>
</h3></div>
	<?php echo $_smarty_tpl->getConfigVariable('errorTesto');?>

</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<?php }elseif($_smarty_tpl->getVariable('email_inviata')->value){?>

<div class="testoFumetto">
	<div><h3 class="pageTitle marginB5"><?php echo $_smarty_tpl->getConfigVariable('checkEmailTitle');?>
</h3></div>
	<?php echo $_smarty_tpl->getConfigVariable('checkEmailTesto');?>

</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<?php }elseif($_smarty_tpl->getVariable('code_ok')->value){?>
<div class="testoFumetto" id="resetPassConfirm">
	<div><h3 class="pageTitle marginB5"><?php echo $_smarty_tpl->getConfigVariable('cambiaPass');?>
</h3></div>
	<form class="skinnedForm" method="post" action="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['passDimenticata'];?>
" onsubmit="return ValidateForm_(controlFields, 'submit');">
		<input type="hidden" name="s" value="<?php echo $_smarty_tpl->getVariable('code')->value;?>
" />
		<ul class="resetPass">
			<li><label for="resetPass"><?php echo $_smarty_tpl->getConfigVariable('insertNewPass');?>
</label> <input id="resetPass" name="resetPass" type="password" /></li>
			<span id="controllo_resetPass"></span><br/>
			<li><label for="resetPass2"><?php echo $_smarty_tpl->getConfigVariable('insertNewPass2');?>
</label> <input id="resetPass2" name="resetPass2" type="password" /></li>
			<span id="controllo_resetPass2"></span>
		</ul>
		<input type="submit" name="form_reset_password2" value="Conferma" class="marginT20 right" />
		
	</form>
</div>

	<?php if ($_smarty_tpl->getVariable('errore_reset')->value){?>
	<div class="testoFumetto">
		<div><h3 class="pageTitle marginB5"><?php echo $_smarty_tpl->getConfigVariable('error');?>
</h3></div>
		<?php echo $_smarty_tpl->getConfigVariable('errorTesto2');?>

	</div>
	<?php }?>

<script>

controlFields=new Array();

controlNew = new Array();
controlNew['nome'] = "resetPass";
controlNew['nome_esteso'] = "Password";
controlNew['lenght'] = 6;
controlNew['type'] = 1;
controlFields.push(controlNew);

controlNew = new Array();
controlNew['nome'] = "resetPass2";
controlNew['nome_esteso'] = "Conferma password";
controlNew['compare'] = 'resetPass';
controlNew['type'] = 10;
controlFields.push(controlNew);

addListeners (controlFields);

</script>

<?php }elseif($_smarty_tpl->getVariable('campi')->value){?>

	<?php if ($_smarty_tpl->getVariable('campi')->value['resetEmail']['errore']=='Indirizzo Email non presente'||$_smarty_tpl->getVariable('campi')->value['resetEmail']['errore']=='Campo Email necessario'){?>
	<div class="testoFumetto">
		<div><h3 class="pageTitle marginB5"><?php echo $_smarty_tpl->getConfigVariable('error3');?>
</h3></div> 
		<?php echo $_smarty_tpl->getConfigVariable('errorTesto3');?>
<br />
		<a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['registrati'];?>
"><?php echo $_smarty_tpl->getConfigVariable('cliccaQui');?>
</a> <?php echo $_smarty_tpl->getConfigVariable('2register');?>

	</div>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<?php }?>
	
	

<?php }else{ ?>
<div class="testoFumetto">
	<div><h3 class="pageTitle marginB5"><?php echo $_smarty_tpl->getConfigVariable('resetPassTitolo');?>
</h3></div>
	<form class="skinnedForm" method="post" onsubmit="return ValidateForm_(controlFields, 'submit');">
		<ul class="resetPass">
			<li><label for="resetEmail"><?php echo $_smarty_tpl->getConfigVariable('resetPassTesto');?>
</label> <input id="resetEmail" name="resetEmail" type="text" /></li>
			<span id="controllo_resetEmail"></span>
		</ul>
		<input type="submit" name="form_reset_password1" value="<?php echo $_smarty_tpl->getConfigVariable('procedi');?>
" class="marginT20 right" />
	</form>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>


<script>

controlFields=new Array();

controlNew = new Array();
controlNew['nome'] = "resetEmail";
controlNew['nome_esteso'] = "Indirizzo email";
controlNew['lenght'] = 0;
controlNew['type'] = 2;
controlFields.push(controlNew);

addListeners (controlFields);

</script>

<?php }?>

<div class="demo-description" id="modalControlli">
</div>

<?php $_template = new Smarty_Internal_Template("includes/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
