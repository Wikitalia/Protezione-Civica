<?php /* Smarty version Smarty-3.0.7, created on 2012-06-07 12:01:24
         compiled from "/var/www/protezionecivica/email/registrazioneConferma.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12039055164fd07bf41b4d85-55217528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14ebae9a06a0ad00ea11a535e3aba173c848f336' => 
    array (
      0 => '/var/www/protezionecivica/email/registrazioneConferma.tpl',
      1 => 1338985961,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12039055164fd07bf41b4d85-55217528',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<?php  $_config = new Smarty_Internal_Config("testi_email.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("registrazioneConferma", 'local'); ?>
<?php $_template = new Smarty_Internal_Template("_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<h1 class="fRed fBig">Ciao <span class="fItalic"><?php echo $_smarty_tpl->getVariable('nome_utente')->value;?>
</span>!<br /><br /></h1>
Utilizza questo link: <a href="<?php echo $_smarty_tpl->getVariable('link_registrazione')->value;?>
"><?php echo $_smarty_tpl->getVariable('link_registrazione')->value;?>
</a> per confermare la tua registrazione.<br /> 
Da questo momento puoi utilizzare il sito e le applicazioni smartphone per combattere il degrado della tua città segnalando rifiuti, vandalismo, buche sul manto stradale, incuria nelle zone verdi, problemi nella segnaletica e affissioni abusive.
<div class="divider"></div>
Se cliccando sul link non succede niente, prova con la seguente procedura:<br />
- Seleziona e copia il link completo.<br />
- Apri una finestra del tuo browser (Internet Explorer, Firefox, Chrome) e incolla il link sulla barra degli indirizzi.<br />
- Clicca Vai o premi il tasto Invio sulla tua tastiera.<br />
Grazie!
</span>


<?php $_template = new Smarty_Internal_Template("_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>