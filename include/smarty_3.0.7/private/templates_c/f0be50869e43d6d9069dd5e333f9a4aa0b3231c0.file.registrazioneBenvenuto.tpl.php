<?php /* Smarty version Smarty-3.0.7, created on 2012-06-07 12:01:46
         compiled from "/var/www/protezionecivica/email/registrazioneBenvenuto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6209209894fd07c0a320cd6-97848502%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0be50869e43d6d9069dd5e333f9a4aa0b3231c0' => 
    array (
      0 => '/var/www/protezionecivica/email/registrazioneBenvenuto.tpl',
      1 => 1338985961,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6209209894fd07c0a320cd6-97848502',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<?php  $_config = new Smarty_Internal_Config("testi_email.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("registrazioneBenvenuto", 'local'); ?>
<?php $_template = new Smarty_Internal_Template("_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<h1 class="fRed fBig"><span class="fItalic"><?php echo $_smarty_tpl->getVariable('nome_utente')->value;?>
</span>, benvenuto su Decoro Urbano!</h1><br /><br />

Grazie per aver confermato il tuo account su <strong>Decoro Urbano</strong>, lo strumento web 2.0 per la cittadinanza attiva.<br />
Da questo momento puoi effettuare segnalazioni tramite il <a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['inviaSegnalazione'];?>
">sito</a> e tramite le <a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['applicazioni'];?>
">applicazioni smartphone</a>. Se stai per inviare la tua prima segnalazione ti invitiamo a consultare la <a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['guida'];?>
">Guida del Buon Segnalatore</a>, dove potrai trovare a alcuni piccoli suggerimenti per un corretto uso di <strong>Decoro Urbano</strong>.<br />



<?php $_template = new Smarty_Internal_Template("_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>