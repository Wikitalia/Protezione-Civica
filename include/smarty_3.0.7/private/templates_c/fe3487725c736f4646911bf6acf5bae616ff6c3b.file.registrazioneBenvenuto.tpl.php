<?php /* Smarty version Smarty-3.0.7, created on 2012-04-06 11:50:18
         compiled from "/var/www/test.decorourbano.org/email/registrazioneBenvenuto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10897850324f708afd778cc8-72533613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe3487725c736f4646911bf6acf5bae616ff6c3b' => 
    array (
      0 => '/var/www/test.decorourbano.org/email/registrazioneBenvenuto.tpl',
      1 => 1333467879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10897850324f708afd778cc8-72533613',
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