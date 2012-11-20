<?php /* Smarty version Smarty-3.0.7, created on 2012-04-06 11:26:13
         compiled from "/var/www/test.decorourbano.org/email/registrazioneConferma.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7719636304f70897ba0a200-97653307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77b21d24d83619daef5d483d3dccdc5dc2d844d3' => 
    array (
      0 => '/var/www/test.decorourbano.org/email/registrazioneConferma.tpl',
      1 => 1333467879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7719636304f70897ba0a200-97653307',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<?php  $_config = new Smarty_Internal_Config("testi_email.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("registrazioneConferma", 'local'); ?>
<?php $_template = new Smarty_Internal_Template("_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<h1 class="fRed fBig">Ciao <span class="fItalic"><?php echo $_smarty_tpl->getVariable('nome_utente')->value;?>
</span>!<br /><br /></h1>
Utilizza questo link: <a href="<?php echo $_smarty_tpl->getVariable('link_registrazione')->value;?>
"><?php echo $_smarty_tpl->getVariable('link_registrazione')->value;?>
</a> per confermare la tua registrazione.<br /> 
Da questo momento puoi utilizzare il sito e le applicazioni smartphone per combattere il degrado della tua città segnalando rifiuti, vandalismo, buche sul manto stradale, incuria nelle zone verdi, problemi nella segnaletica e affissioni abusive.
<div class="divider"></div>
Se cliccando sul link non succede niente, prova con la seguente procedura:<br />
- Seleziona e copia il link completo.<br />
- Apri una finestra del tuo browser (Internet Explorer, Firefox, Chrome) e incolla il link sulla barra degli indirizzi.<br />
- Clicca Vai o premi il tasto Invio sulla tua tastiera.<br />
Grazie!
</span>


<?php $_template = new Smarty_Internal_Template("_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>