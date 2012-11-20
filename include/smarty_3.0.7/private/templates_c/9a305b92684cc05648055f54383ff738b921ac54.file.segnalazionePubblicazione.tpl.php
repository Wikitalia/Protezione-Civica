<?php /* Smarty version Smarty-3.0.7, created on 2012-04-04 10:20:14
         compiled from "/var/www/test.decorourbano.org/email/segnalazionePubblicazione.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9843874954f798997d22f61-01366856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a305b92684cc05648055f54383ff738b921ac54' => 
    array (
      0 => '/var/www/test.decorourbano.org/email/segnalazionePubblicazione.tpl',
      1 => 1333467879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9843874954f798997d22f61-01366856',
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
Grazie per aver utilizzato <strong>Decoro Urbano</strong>, la tua segnalazione è pubblicata ed è consultabile a questo indirizzo:<br /><br />
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
" alt="Abilita la visualizzazione delle immagini per vedere questa segnalazione" />
<?php }?>
<img src="<?php echo $_smarty_tpl->getVariable('imgMappa')->value;?>
" alt="Abilita la visualizzazione delle immagini per vedere questa segnalazione" />

<div class="divider"></div>
Utilizza gli strumenti di share per diffondere la tua segnalazione, la cittadinanza attiva inizia da te!<br /><br />

<div style="text-align:center;margin:10px 0;"><img src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
/email/images/cellSplash.jpg" /></div>

<div>Utilizza Decoro Urbano al top! Scopri le <a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['applicazioni'];?>
">applicazioni smartphone</a> gratuite per inviare segnalazioni direttamente dal cellulare!</div>


<div class="divider"></div>
<?php $_template = new Smarty_Internal_Template("_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>