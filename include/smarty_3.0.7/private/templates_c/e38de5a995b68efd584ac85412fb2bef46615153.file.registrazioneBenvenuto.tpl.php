<?php /* Smarty version Smarty-3.0.7, created on 2012-07-03 16:06:16
         compiled from "/htdocs/web//mappa/email/registrazioneBenvenuto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17780775084ff2fc58895bb8-54468986%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e38de5a995b68efd584ac85412fb2bef46615153' => 
    array (
      0 => '/htdocs/web//mappa/email/registrazioneBenvenuto.tpl',
      1 => 1341323324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17780775084ff2fc58895bb8-54468986',
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

Grazie per aver confermato il tuo account su <strong>Mappa della Protezione Civica</strong>.<br />
Da questo momento puoi effettuare segnalazioni tramite il <a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['inviaSegnalazione'];?>
">sito</a>.<br />



<?php $_template = new Smarty_Internal_Template("_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>