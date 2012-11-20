<?php /* Smarty version Smarty-3.0.7, created on 2012-03-29 16:46:40
         compiled from "/var/www/test.decorourbano.org/email/segnalazioneNuovaComune.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9114334034f7475d05f7af3-02474653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b98e0d09b737f238cdea90b131eb85ebab618ce4' => 
    array (
      0 => '/var/www/test.decorourbano.org/email/segnalazioneNuovaComune.tpl',
      1 => 1331649390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9114334034f7475d05f7af3-02474653',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<?php  $_config = new Smarty_Internal_Config("testi_email.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("segnalazioneModerazioneOK", 'local'); ?>

<?php $_template = new Smarty_Internal_Template("_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

E' stata approvata una nuova segnalazione inserita da <?php echo $_smarty_tpl->getVariable('nome_utente')->value;?>
 sul territorio del comune di <?php echo $_smarty_tpl->getVariable('nome_comune')->value;?>
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
