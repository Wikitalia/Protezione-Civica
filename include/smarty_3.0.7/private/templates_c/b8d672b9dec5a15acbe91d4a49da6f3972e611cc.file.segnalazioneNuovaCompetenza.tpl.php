<?php /* Smarty version Smarty-3.0.7, created on 2012-04-20 15:38:53
         compiled from "/var/www/test.decorourbano.org/email/segnalazioneNuovaCompetenza.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9471003944f9166ed641d84-67082422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8d672b9dec5a15acbe91d4a49da6f3972e611cc' => 
    array (
      0 => '/var/www/test.decorourbano.org/email/segnalazioneNuovaCompetenza.tpl',
      1 => 1333467879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9471003944f9166ed641d84-67082422',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php  $_config = new Smarty_Internal_Config("testi_email.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("segnalazioneModerazioneOK", 'local'); ?>

<?php $_template = new Smarty_Internal_Template("_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

E' stata approvata una nuova segnalazione inserita da <?php echo $_smarty_tpl->getVariable('nome_utente')->value;?>
 di competenza <?php echo $_smarty_tpl->getVariable('nome_competenza')->value;?>
.<br /><br />
E' possibile consultare la segnalazione al seguente indirizzo:<br />
<a href="<?php echo $_smarty_tpl->getVariable('link_segnalazione')->value;?>
"><?php echo $_smarty_tpl->getVariable('link_segnalazione')->value;?>
</a>

<div class="divider"></div>

<div class="fSSmall"><?php echo $_smarty_tpl->getVariable('via')->value;?>
</div>
<div><?php echo $_smarty_tpl->getVariable('messaggio')->value;?>
</div>
<div class="fSSmall"><?php echo $_smarty_tpl->getVariable('categoria')->value;?>
</div>
<div class="fSSmall"><?php echo $_smarty_tpl->getVariable('data')->value;?>
</div>
<img src="<?php echo $_smarty_tpl->getVariable('imgSegnalazione')->value;?>
" alt="Abilita la visualizzazione delle immagini per vedere questa segnalazione" />
<img src="<?php echo $_smarty_tpl->getVariable('imgMappa')->value;?>
" alt="Abilita la visualizzazione delle immagini per vedere questa segnalazione" />


<div class="divider"></div>
<?php $_template = new Smarty_Internal_Template("_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
