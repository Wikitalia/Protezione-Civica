<?php /* Smarty version Smarty-3.0.7, created on 2012-06-11 19:40:06
         compiled from "/var/www/protezionecivica/templates/registrati.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15522440074fd62d76e74083-07584890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c140e1d565c9f54df76700c2213e968eb43511d2' => 
    array (
      0 => '/var/www/protezionecivica/templates/registrati.tpl',
      1 => 1339436404,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15522440074fd62d76e74083-07584890',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<?php $_template = new Smarty_Internal_Template("includes/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<script type="text/javascript" src="/js/controlli.js"></script>

<?php if ($_smarty_tpl->getVariable('email_inviata')->value){?>

<div class="rightPageHeader">
	<div class="rightHeadText"><h3 class="fontS18 marginB5 fBrown"><?php echo $_smarty_tpl->getConfigVariable('titolo');?>
</h3>
		<?php echo $_smarty_tpl->getConfigVariable('regConferma');?>

	</div>
</div>

<div class="testoFumetto">
	<div><h3 class="pageTitle marginB5"><?php echo $_smarty_tpl->getConfigVariable('benvenuto');?>
 <?php echo $_smarty_tpl->getVariable('nome_segnalatore')->value;?>
!</h3></div>
	<?php echo $_smarty_tpl->getConfigVariable('abilita');?>

</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<?php }elseif($_smarty_tpl->getVariable('campi')->value){?>

<div class="rightPageHeader">
	<div class="rightHeadText"><h3 class="fontS18 marginB5 fBrown"><?php echo $_smarty_tpl->getConfigVariable('erroreTitolo');?>
</h3>
		<span class="fRed"><?php echo $_smarty_tpl->getConfigVariable('errore');?>
</span>
	</div> 
</div>

<div class="testoFumetto">
	<div><h3 class="pageTitle marginB5"><?php echo $_smarty_tpl->getConfigVariable('regTitolo');?>
</h3></div>
	<form class="skinnedForm formRegistrazione" method="post" onsubmit="return ValidateForm_(controlFields, 'submit');">
		<div class="marginT10"><label for="regNome"><?php echo $_smarty_tpl->getConfigVariable('nome');?>
:</label> <div class="inputContainer"><input name="regNome" id="regNome" type="text" /></div><span id="controllo_regNome"></span></div>
		<div class="marginT10"><label for="regCognome"><?php echo $_smarty_tpl->getConfigVariable('cognome');?>
:</label> <div class="inputContainer"><input name="regCognome" id="regCognome" type="text" /></div><span id="controllo_regCognome"></span></div>
		<div class="marginT10"><label for="regEmail"><?php echo $_smarty_tpl->getConfigVariable('email');?>
:</label> <div class="inputContainer"><input name="regEmail" id="regEmail" type="text" /></div><span id="controllo_regEmail"></span></div>
		<div class="marginT10"><label for="regConfermaEmail"><?php echo $_smarty_tpl->getConfigVariable('email2');?>
:</label> <div class="inputContainer"><input name="regConfermaEmail" id="regConfermaEmail" type="text" /></div><span id="controllo_regConfermaEmail"></span></div>
		<div class="marginT10"><label for="regPassword"><?php echo $_smarty_tpl->getConfigVariable('pass');?>
: <br /><span class="fontS10" style="margin-right:8px;"><?php echo $_smarty_tpl->getConfigVariable('minPassLenght');?>
</span></label> <div class="inputContainer"><input name="regPassword" id="regPassword" type="password" /></div><span id="controllo_regPassword"></span></div>
		<div class="fontS10 marginT15 textCenter">
				<?php echo $_smarty_tpl->getConfigVariable('regAccetta1');?>
 <a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['tos'];?>
" target="_blank"><?php echo $_smarty_tpl->getConfigVariable('condizioni');?>
</a> <?php echo $_smarty_tpl->getConfigVariable('regAccetta2');?>
 
				<a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['privacy'];?>
" target="_blank"><?php echo $_smarty_tpl->getConfigVariable('privacy');?>
</a>
		</div>
		<div class="marginT15 textRight"><input type="submit" name="form_registrazione" value="<?php echo $_smarty_tpl->getConfigVariable('registrati');?>
" /></div>
	</form>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>


	<?php if ($_smarty_tpl->getVariable('campi')->value['regEmail']['errore']=='Utente già registrato con questo indirizzo email'){?>
	<div class="testoFumetto">
		<div><h3 class="pageTitle marginB5"><?php echo $_smarty_tpl->getConfigVariable('utenteEsistenteTitolo');?>
</h3></div>
		<?php echo $_smarty_tpl->getConfigVariable('utenteEsistenteTesto');?>
<br />
		<a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['passDimenticata'];?>
"><?php echo $_smarty_tpl->getConfigVariable('cliccaQui');?>
</a> <?php echo $_smarty_tpl->getConfigVariable('utenteEsistenteTesto2');?>

	</div>
	<?php }?>

<?php }else{ ?>

<div class="rightPageHeader">
	<div class="rightHeadText"><h3 class="fontS18 marginB5 fBrown"><?php echo $_smarty_tpl->getConfigVariable('newRegTitle');?>
</h3>
		<?php echo $_smarty_tpl->getConfigVariable('newRegTesto');?>

	</div>
</div>

<div class="testoFumetto">
	<div><h3 class="pageTitle marginB5"><?php echo $_smarty_tpl->getConfigVariable('regTitolo');?>
</h3></div>
	<form class="skinnedForm formRegistrazione" method="post" onsubmit="return ValidateForm_(controlFields, 'submit');">
		<div class="marginT10"><label for="regNome"><?php echo $_smarty_tpl->getConfigVariable('nome');?>
:</label> <div class="inputContainer"><input name="regNome" id="regNome" type="text" /></div><span id="controllo_regNome"></span></div>
		<div class="marginT10"><label for="regCognome"><?php echo $_smarty_tpl->getConfigVariable('cognome');?>
:</label> <div class="inputContainer"><input name="regCognome" id="regCognome" type="text" /></div><span id="controllo_regCognome"></span></div>
		<div class="marginT10"><label for="regEmail"><?php echo $_smarty_tpl->getConfigVariable('email');?>
:</label> <div class="inputContainer"><input name="regEmail" id="regEmail" type="text" /></div><span id="controllo_regEmail"></span></div>
		<div class="marginT10"><label for="regConfermaEmail"><?php echo $_smarty_tpl->getConfigVariable('email2');?>
:</label> <div class="inputContainer"><input name="regConfermaEmail" id="regConfermaEmail" type="text" /></div><span id="controllo_regConfermaEmail"></span></div>
		<div class="marginT10"><label for="regPassword"><?php echo $_smarty_tpl->getConfigVariable('pass');?>
: <br /><span class="fontS10" style="margin-right:8px;"><?php echo $_smarty_tpl->getConfigVariable('minPassLenght');?>
</span></label> <div class="inputContainer"><input name="regPassword" id="regPassword" type="password" /></div><span id="controllo_regPassword"></span></div>
		<div class="fontS10 marginT15 textCenter">
				<?php echo $_smarty_tpl->getConfigVariable('regAccetta1');?>
 <a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['tos'];?>
" target="_blank"><?php echo $_smarty_tpl->getConfigVariable('condizioni');?>
</a> <?php echo $_smarty_tpl->getConfigVariable('regAccetta2');?>
 
				<a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['privacy'];?>
" target="_blank"><?php echo $_smarty_tpl->getConfigVariable('privacy');?>
</a>
		</div>
		<div class="marginT15 textRight"><input type="submit" name="form_registrazione" value="<?php echo $_smarty_tpl->getConfigVariable('registrati');?>
" /></div>
	</form>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>




<script>

<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('campi')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['c']->key;
?>
	<?php if ($_smarty_tpl->tpl_vars['c']->value['errore']==''){?>
		$('#<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
').val('<?php echo $_smarty_tpl->tpl_vars['c']->value['value'];?>
');
	<?php }else{ ?>
		$('#controllo_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
').addClass('checkFailed');
	<?php }?>
<?php }} ?>

controlFields=new Array();

controlNew = new Array();
controlNew['nome'] = "regNome";
controlNew['nome_esteso'] = "Nome";
controlNew['lenght'] = 1;
controlNew['type'] = 1;
controlFields.push(controlNew);

controlNew = new Array();
controlNew['nome'] = "regCognome";
controlNew['nome_esteso'] = "Cognome";
controlNew['lenght'] = 1;
controlNew['type'] = 1;
controlFields.push(controlNew);

controlNew = new Array();
controlNew['nome'] = "regEmail";
controlNew['nome_esteso'] = "Indirizzo email";
controlNew['lenght'] = 0;
controlNew['type'] = 2;
controlFields.push(controlNew);

controlNew = new Array();
controlNew['nome'] = "regPassword";
controlNew['nome_esteso'] = "Password";
controlNew['lenght'] = 6;
controlNew['type'] = 1;
controlFields.push(controlNew);

controlNew = new Array();
controlNew['nome'] = "regConfermaEmail";
controlNew['nome_esteso'] = "Conferma indirizzo email";
controlNew['compare'] = 'regEmail';
controlNew['type'] = 10;
controlFields.push(controlNew);


addListeners(controlFields);

</script>

<div class="demo-description" id="modalControlli">
</div>

<?php }?>

<?php $_template = new Smarty_Internal_Template("includes/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>