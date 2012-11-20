<?php /* Smarty version Smarty-3.0.7, created on 2012-04-06 11:50:52
         compiled from "/var/www/test.decorourbano.org/email/passwordRecupero.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4929507184f749d7f45ceb5-65927503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a7cc62b37428d2651412f152707590b1d2f5708' => 
    array (
      0 => '/var/www/test.decorourbano.org/email/passwordRecupero.tpl',
      1 => 1333467879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4929507184f749d7f45ceb5-65927503',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<?php  $_config = new Smarty_Internal_Config("testi_email.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("passwordRecupero", 'local'); ?>
<?php $_template = new Smarty_Internal_Template("_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<h1 class="fRed fBig">Ciao <span class="fItalic"><?php echo $_smarty_tpl->getVariable('nome_utente')->value;?>
</span>!<br /><br /></h1>

Per resettare la tua password utilizza questo link: <a href="<?php echo $_smarty_tpl->getVariable('link_reset')->value;?>
"><?php echo $_smarty_tpl->getVariable('link_reset')->value;?>
</a> e segui la procedura guidata.<br />
Grazie!

<?php $_template = new Smarty_Internal_Template("_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>