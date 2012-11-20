<?php /* Smarty version Smarty-3.0.7, created on 2012-07-03 16:06:45
         compiled from "/htdocs/web//mappa/email/segnalazionePubblicazione.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21333198374ff2fc7547fa82-51675030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '977eab334893b4a382f3d08983365c8bec8ed944' => 
    array (
      0 => '/htdocs/web//mappa/email/segnalazionePubblicazione.tpl',
      1 => 1341323324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21333198374ff2fc7547fa82-51675030',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<?php  $_config = new Smarty_Internal_Config("testi_email.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("segnalazionePubblicazione", 'local'); ?>

<?php $_template = new Smarty_Internal_Template("_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<h1 class="fRed fBig">Ciao <span class="fItalic"><?php echo $_smarty_tpl->getVariable('nome_utente')->value;?>
</span>,<br /><br /></h1>
Grazie per aver utilizzato la <strong>Mappa di Protezione Civica</strong>, la tua segnalazione è pubblicata ed è consultabile a questo indirizzo:<br /><br />
<a href="<?php echo $_smarty_tpl->getVariable('link_segnalazione')->value;?>
"><?php echo $_smarty_tpl->getVariable('link_segnalazione')->value;?>
</a>

<div class="divider"></div>

<div class="fSSmall"><?php echo $_smarty_tpl->getVariable('via')->value;?>
</div>
<div><?php echo $_smarty_tpl->getVariable('messaggio')->value;?>
</div>
<?php if ($_smarty_tpl->getVariable('genere')->value=='degrado'&&$_smarty_tpl->getVariable('id_tipo')->value!=0){?><div class="fSSmall"><?php echo $_smarty_tpl->getVariable('categoria')->value;?>
</div><?php }?>
<div class="fSSmall"><?php echo $_smarty_tpl->getVariable('data')->value;?>
</div>

<?php if ($_smarty_tpl->getVariable('foto')->value!='0'){?>
<img src="<?php echo $_smarty_tpl->getVariable('imgSegnalazione')->value;?>
" alt="Abilita la visualizzazione delle immagini per vedere la foto di questa segnalazione" />
<?php }?>
<img src="<?php echo $_smarty_tpl->getVariable('imgMappa')->value;?>
" alt="Abilita la visualizzazione delle immagini per vedere questa segnalazione sulla mappa" />

<div class="divider"></div>



<div class="divider"></div>
<?php $_template = new Smarty_Internal_Template("_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>