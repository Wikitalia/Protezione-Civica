<?php /* Smarty version Smarty-3.0.7, created on 2012-06-13 17:55:01
         compiled from "/var/www/protezionecivica/email/segnalazioneCommento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17066603964fd8b7d5957c43-38765491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d22cb61fcfa40a9c268e174a25aac057880cde0' => 
    array (
      0 => '/var/www/protezionecivica/email/segnalazioneCommento.tpl',
      1 => 1338985961,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17066603964fd8b7d5957c43-38765491',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<?php  $_config = new Smarty_Internal_Config("testi_email.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("segnalazioneCommento", 'local'); ?>

<?php $_template = new Smarty_Internal_Template("_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<h1 class="fRed fBig">Ciao <span class="fItalic"><?php echo $_smarty_tpl->getVariable('nome_utente')->value;?>
</span>!<br /><br /></h1>
<?php echo $_smarty_tpl->getVariable('nome_utente2')->value;?>
 ha commentato così la tua segnalazione:<br /><br />
<i class="fBig">"<?php echo $_smarty_tpl->getVariable('commento')->value;?>
"</i><br /><br />

Clicca su questo link: <a href="<?php echo $_smarty_tpl->getVariable('link_segnalazione')->value;?>
"><?php echo $_smarty_tpl->getVariable('link_segnalazione')->value;?>
</a> per andare alla segnalazione e rispondere a <?php echo $_smarty_tpl->getVariable('nome_utente2')->value;?>
.

<?php $_template = new Smarty_Internal_Template("_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
