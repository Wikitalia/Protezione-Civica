<?php /* Smarty version Smarty-3.0.7, created on 2012-04-25 19:26:21
         compiled from "/var/www/test.decorourbano.org/email/segnalazioneCompetenzaRisolta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11117686834f9833bdd32011-13523088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a296cfdfabd6bb63f1fa0d5da0fc84338265a65f' => 
    array (
      0 => '/var/www/test.decorourbano.org/email/segnalazioneCompetenzaRisolta.tpl',
      1 => 1333467879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11117686834f9833bdd32011-13523088',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php  $_config = new Smarty_Internal_Config("testi_email.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("segnalazioneRisolta", 'local'); ?>
<?php $_template = new Smarty_Internal_Template("_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<h1 class="fRed fBig">Ciao <span class="fItalic"><?php echo $_smarty_tpl->getVariable('nome_utente')->value;?>
</span>!<br /><br /></h1>
Ti informiamo che <?php echo $_smarty_tpl->getVariable('nome_competenza')->value;?>
 ha comunicato di aver risolto una tua segnalazione effettuata in data <?php echo $_smarty_tpl->getVariable('data')->value;?>
 in <?php echo $_smarty_tpl->getVariable('indirizzo')->value;?>
.
Puoi consultarne i dettagli al seguente indirizzo:<br />
<a href="<?php echo $_smarty_tpl->getVariable('link_segnalazione')->value;?>
"><?php echo $_smarty_tpl->getVariable('link_segnalazione')->value;?>
</a>

<?php $_template = new Smarty_Internal_Template("_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
