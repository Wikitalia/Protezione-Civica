<?php /* Smarty version Smarty-3.0.7, created on 2012-06-28 15:26:53
         compiled from "/htdocs/web//mappa/email/passwordRecupero.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17097415114fec5b9d53d9c5-74870778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9195b9ae5b490dd3cc3388fc58e68462a036783' => 
    array (
      0 => '/htdocs/web//mappa/email/passwordRecupero.tpl',
      1 => 1340875231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17097415114fec5b9d53d9c5-74870778',
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