<?php /* Smarty version Smarty-3.0.7, created on 2012-04-17 09:09:56
         compiled from "/var/www/test.decorourbano.org/templates/comuniAttivi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9176664064f8d1744be9a57-27056804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4d194c6cb6d6eca9d64058bd1fe01cfc96418de' => 
    array (
      0 => '/var/www/test.decorourbano.org/templates/comuniAttivi.tpl',
      1 => 1333467934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9176664064f8d1744be9a57-27056804',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<?php $_template = new Smarty_Internal_Template("includes/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<div class="rightPageHeader">
	<div class="rightHeadText"><h3 class="fontS18 marginB5 fBrown"><?php echo $_smarty_tpl->getConfigVariable('titolo');?>
</h3>
		<?php echo $_smarty_tpl->getConfigVariable('intro');?>

	</div>
	<div class="rightHeadIcon"><div class="rhiComuniAttivi"></div></div>
</div>
<div class="testoFumetto">
<p>
<?php echo $_smarty_tpl->getConfigVariable('paragrafo1');?>

</p>

<ul id="listaComuniAttivi">
	<?php  $_smarty_tpl->tpl_vars['comune'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('comuni_attivi')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['comune']->key => $_smarty_tpl->tpl_vars['comune']->value){
?>
	<li>
     <a href="http://<?php echo $_smarty_tpl->tpl_vars['comune']->value['nome_url'];?>
.<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['dominio'];?>
/"><?php echo $_smarty_tpl->tpl_vars['comune']->value['nome'];?>
</a> <span>(<?php echo $_smarty_tpl->tpl_vars['comune']->value['totali'];?>
)</span>
     <br><span class="rss">Dataset GeoRSS</span> <a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
ext/georss_dl.php?comune=<?php echo $_smarty_tpl->tpl_vars['comune']->value['nome_url'];?>
" target="_blank" class="rss"><?php echo $_smarty_tpl->tpl_vars['comune']->value['nome_url'];?>
.rss</a>
    </li>
	<?php }} ?>
</ul>

<div class="dataset_box_download">
  <div class="dataset_box_download_testo">
    I dataset sono nel formato <a href="http://it.wikipedia.org/wiki/GeoRSS" target="_blank">GeoRSS</a>
    e sono rilasciati con
    Licenza <a href="http://creativecommons.org/licenses/by/3.0/it/" target="_blank">Creative Commons Attribuzione 3.0 Italia (CC BY 3.0)</a>.
  </div>
</div>


</div>
<?php $_template = new Smarty_Internal_Template("includes/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
