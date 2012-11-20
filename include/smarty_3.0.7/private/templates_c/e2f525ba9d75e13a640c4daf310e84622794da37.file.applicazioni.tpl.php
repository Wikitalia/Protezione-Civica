<?php /* Smarty version Smarty-3.0.7, created on 2012-06-06 15:11:10
         compiled from "/var/www/protezionecivica/templates/applicazioni.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13026272134fcf56eee1e086-05105905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2f525ba9d75e13a640c4daf310e84622794da37' => 
    array (
      0 => '/var/www/protezionecivica/templates/applicazioni.tpl',
      1 => 1338987942,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13026272134fcf56eee1e086-05105905',
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
		<?php echo $_smarty_tpl->getConfigVariable('intro1');?>
 <strong><?php echo $_smarty_tpl->getConfigVariable('decoro');?>
</strong> <?php echo $_smarty_tpl->getConfigVariable('intro2');?>

	</div>
	<div class="rightHeadIcon"><div class="rhiApplicazioni"></div></div>
</div>

<div class="testoFumetto">
	<div class="marginB15">
		<div class="auto right"><a href="<?php echo $_smarty_tpl->getVariable('settings')->value['apps']['iPhone'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/dispositivi/appStoreBadgeSmall.png" alt="<?php echo $_smarty_tpl->getConfigVariable('scarica');?>
" /></a></div>
		<h3 class="pageTitle marginB5 auto"><?php echo $_smarty_tpl->getConfigVariable('decoroIPhone');?>
</h3> 
		<div class="auto"><?php echo $_smarty_tpl->getConfigVariable('iPhoneInfos');?>
</div>
	</div>
	<div>
		<div class="applicazioniLeft">
			<img src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/dispositivi/appleLogo.png" class="marginB10" />
			<a href="<?php echo $_smarty_tpl->getVariable('settings')->value['apps']['iPhone'];?>
" target="_blank"><button class="greenButt"><?php echo $_smarty_tpl->getConfigVariable('scarica');?>
</button></a>
			<img src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/dispositivi/qrCodeApple.png" class="marginT10" />
			<div class="marginT10 textLeft auto fontS10 marginL15"><?php echo $_smarty_tpl->getConfigVariable('iPhoneQRIntro');?>
</div>
		</div>
		<div class="applicazioniRight"><img src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/dispositivi/iPhoneSplash.jpg" alt="" class="right" /></div>
	</div>
	
	<div class="divider"></div>
	
	<div class="marginB15">
		<div class="auto right"><a href="<?php echo $_smarty_tpl->getVariable('settings')->value['apps']['android'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/dispositivi/androidMarketBadgeSmall.png" alt="<?php echo $_smarty_tpl->getConfigVariable('scarica');?>
" /></a></div>
		<h3 class="pageTitle marginB5 auto"><?php echo $_smarty_tpl->getConfigVariable('decoroAndroid');?>
</h3> 
		<div class="auto"><?php echo $_smarty_tpl->getConfigVariable('androidInfos');?>
</div>
	</div>
	<div>
		<div class="applicazioniLeft">
			<img src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/dispositivi/androidLogo.png" class="marginB10" />
			<a href="<?php echo $_smarty_tpl->getVariable('settings')->value['apps']['android'];?>
" target="_blank"><button class="greenButt"><?php echo $_smarty_tpl->getConfigVariable('scarica');?>
</button></a>
			<img src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/dispositivi/qrCodeAndroid.png" class="marginT10" />
			<div class="marginT10 textLeft auto fontS10 marginL15"><?php echo $_smarty_tpl->getConfigVariable('androidQRIntro');?>
</div>
		</div>
		<div class="applicazioniRight"><img src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/dispositivi/androidSplash.jpg" alt="" class="right" /></div>
	</div>
</div>

<?php $_template = new Smarty_Internal_Template("includes/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>