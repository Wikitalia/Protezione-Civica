<?php /* Smarty version Smarty-3.0.7, created on 2012-06-06 15:21:52
         compiled from "/var/www/protezionecivica/templates/supporta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6647404274fcf59709c2fb9-31161395%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfd42815c1dafa33df2f4a76d8f11a57a92d01a1' => 
    array (
      0 => '/var/www/protezionecivica/templates/supporta.tpl',
      1 => 1338988214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6647404274fcf59709c2fb9-31161395',
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
		<?php echo $_smarty_tpl->getConfigVariable('supportaIntro');?>

	</div>
	<div class="rightHeadIcon"><div class="rhiSupporta"></div></div>
</div>

<div class="testoFumetto">
	<div><h3 class="pageTitle marginB15"><?php echo $_smarty_tpl->getConfigVariable('banners');?>
</h3></div>
	
	<div>
		<div class="marginB10">
			<div class="sostieniBannerFormato"><?php echo $_smarty_tpl->getConfigVariable('formato1');?>
</div>
			<div class="sostieniBannerCodiceTag"><?php echo $_smarty_tpl->getConfigVariable('codice');?>
 <span class="fontS10 pointer" onclick="selezionaTesto('sostieni125x125');"><?php echo $_smarty_tpl->getConfigVariable('selTutto');?>
</span></div>
		</div>
		<div class="sostieniBanner">
			<a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/banners/125x125.gif" target="_blank"><img src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/banners/125x125.gif" /></a><br />
			<span class="fontS10"><a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/banners/125x125.gif" target="_blank"><?php echo $_smarty_tpl->getConfigVariable('dimReali');?>
</a></span>
		</div>
		<div class="sostieniCodice" id="sostieni125x125" onclick="selezionaTesto('sostieni125x125');">&lt;a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
" target="_blank"&gt;&lt;img src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/banners/125x125.gif" alt="Decoro Urbano - We DU!" title="Decoro Urbano - We DU!" style="border:0;" /&gt;&lt;/a&gt;</div>
	</div>
	<div class="divider"></div>
	
	<div>
		<div class="marginB10">
			<div class="sostieniBannerFormato"><?php echo $_smarty_tpl->getConfigVariable('formato2');?>
</div>
			<div class="sostieniBannerCodiceTag"><?php echo $_smarty_tpl->getConfigVariable('codice');?>
 <span class="fontS10 pointer" onclick="selezionaTesto('sostieni250x250');"><?php echo $_smarty_tpl->getConfigVariable('selTutto');?>
</span></div>
		</div>
		<div class="sostieniBanner">
			<a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/banners/250x250.gif" target="_blank"><img src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/banners/250x250.gif" /></a>
			<span class="fontS10"><a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/banners/250x250.gif" target="_blank"><?php echo $_smarty_tpl->getConfigVariable('dimReali');?>
</a></span>
		</div>
		<div class="sostieniCodice" id="sostieni250x250" disabled="disabled" onclick="selezionaTesto('sostieni250x250');">&lt;a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
" target="_blank"&gt;&lt;img src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/banners/250x250.gif" alt="Decoro Urbano - We DU!" title="Decoro Urbano - We DU!" style="border:0;" /&gt;&lt;/a&gt;</div>
	</div>
	<div class="divider"></div>
	
	<div>
		<div class="marginB10">
			<div class="sostieniBannerFormato"><?php echo $_smarty_tpl->getConfigVariable('formato3');?>
</div>
			<div class="sostieniBannerCodiceTag"><?php echo $_smarty_tpl->getConfigVariable('codice');?>
 <span class="fontS10 pointer" onclick="selezionaTesto('sostieni160x600');"><?php echo $_smarty_tpl->getConfigVariable('selTutto');?>
</span></div>
		</div>
		<div class="sostieniBanner">
			<a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/banners/160x600.gif" target="_blank"><img src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/banners/160x600.gif" /></a>
			<span class="fontS10"><a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/banners/160x600.gif" target="_blank"><?php echo $_smarty_tpl->getConfigVariable('dimReali');?>
</a></span>
		</div>
		<div class="sostieniCodice" id="sostieni160x600" disabled="disabled" onclick="selezionaTesto('sostieni160x600');">&lt;a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
" target="_blank"&gt;&lt;img src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/banners/160x600.gif" alt="Decoro Urbano - We DU!" title="Decoro Urbano - We DU!" style="border:0;" /&gt;&lt;/a&gt;</div>
	</div>
	<div class="divider"></div>
	
	<div>
		<div class="marginB10">
			<div class="sostieniBannerFormato"><?php echo $_smarty_tpl->getConfigVariable('formato4');?>
</div>
			<div class="sostieniBannerCodiceTag"><?php echo $_smarty_tpl->getConfigVariable('codice');?>
 <span class="fontS10 pointer" onclick="selezionaTesto('sostieni728x90');"><?php echo $_smarty_tpl->getConfigVariable('selTutto');?>
</span></div>
		</div>
		<div class="sostieniBanner">
			<a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/banners/728x90.gif" target="_blank"><img src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/banners/728x90.gif" /></a>
			<span class="fontS10"><a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/banners/728x90.gif" target="_blank"><?php echo $_smarty_tpl->getConfigVariable('dimReali');?>
</a></span>
		</div>
		<div class="sostieniCodice" id="sostieni728x90" disabled="disabled" onclick="selezionaTesto('sostieni728x90');">&lt;a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
" target="_blank"&gt;&lt;img src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/banners/728x90.gif" alt="Decoro Urbano - We DU!" title="Decoro Urbano - We DU!" style="border:0;" /&gt;&lt;/a&gt;</div>
	</div>
	
</div>
<?php $_template = new Smarty_Internal_Template("includes/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>