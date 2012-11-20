<?php /* Smarty version Smarty-3.0.7, created on 2012-04-16 09:48:09
         compiled from "/var/www/test.decorourbano.org/email/segnalazioneCommento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9400953824f69e987b5ad37-17318544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2796145bee7733003b8d4859b5abc10b19aa74a4' => 
    array (
      0 => '/var/www/test.decorourbano.org/email/segnalazioneCommento.tpl',
      1 => 1333467879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9400953824f69e987b5ad37-17318544',
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
