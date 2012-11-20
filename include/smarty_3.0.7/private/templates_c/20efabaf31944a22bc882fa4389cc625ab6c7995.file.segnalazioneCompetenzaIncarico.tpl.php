<?php /* Smarty version Smarty-3.0.7, created on 2012-04-25 19:26:09
         compiled from "/var/www/test.decorourbano.org/email/segnalazioneCompetenzaIncarico.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19601184504f9833b17d19b9-15594223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20efabaf31944a22bc882fa4389cc625ab6c7995' => 
    array (
      0 => '/var/www/test.decorourbano.org/email/segnalazioneCompetenzaIncarico.tpl',
      1 => 1333467879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19601184504f9833b17d19b9-15594223',
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
Ti informiamo che <?php echo $_smarty_tpl->getVariable('nome_competenza')->value;?>
 ha comunicato di aver preso in carico una tua segnalazione effettuata in data <?php echo $_smarty_tpl->getVariable('data')->value;?>
 in <?php echo $_smarty_tpl->getVariable('indirizzo')->value;?>
.
Puoi consultarne i dettagli al seguente indirizzo:<br />
<a href="<?php echo $_smarty_tpl->getVariable('link_segnalazione')->value;?>
"><?php echo $_smarty_tpl->getVariable('link_segnalazione')->value;?>
</a>

<?php $_template = new Smarty_Internal_Template("_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
