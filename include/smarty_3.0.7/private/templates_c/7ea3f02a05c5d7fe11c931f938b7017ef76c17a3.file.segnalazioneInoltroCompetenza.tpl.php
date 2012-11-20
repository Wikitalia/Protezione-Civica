<?php /* Smarty version Smarty-3.0.7, created on 2012-04-20 15:38:53
         compiled from "/var/www/test.decorourbano.org/email/segnalazioneInoltroCompetenza.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5261103814f9166ed859be0-74876331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ea3f02a05c5d7fe11c931f938b7017ef76c17a3' => 
    array (
      0 => '/var/www/test.decorourbano.org/email/segnalazioneInoltroCompetenza.tpl',
      1 => 1333467879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5261103814f9166ed859be0-74876331',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php  $_config = new Smarty_Internal_Config("testi_email.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("segnalazioneIncarico", 'local'); ?>
<?php $_template = new Smarty_Internal_Template("_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<h1 class="fRed fBig">Ciao <span class="fItalic"><?php echo $_smarty_tpl->getVariable('nome_utente')->value;?>
</span>!<br /><br /></h1>
Ti informiamo che una tua segnalazione effettuata in data <?php echo $_smarty_tpl->getVariable('data')->value;?>
 in <?php echo $_smarty_tpl->getVariable('via')->value;?>
 è stata inoltrata per competenza a <?php echo $_smarty_tpl->getVariable('nome_competenza')->value;?>
.
Puoi consultarne i dettagli al seguente indirizzo:<br />
<a href="<?php echo $_smarty_tpl->getVariable('link_segnalazione')->value;?>
"><?php echo $_smarty_tpl->getVariable('link_segnalazione')->value;?>
</a>

<?php $_template = new Smarty_Internal_Template("_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
