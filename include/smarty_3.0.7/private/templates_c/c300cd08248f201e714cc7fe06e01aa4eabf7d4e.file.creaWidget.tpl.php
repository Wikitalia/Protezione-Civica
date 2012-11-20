<?php /* Smarty version Smarty-3.0.7, created on 2012-04-18 18:42:18
         compiled from "/var/www/test.decorourbano.org/templates/creaWidget.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21109521534f8eeeea28ecd9-50932477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c300cd08248f201e714cc7fe06e01aa4eabf7d4e' => 
    array (
      0 => '/var/www/test.decorourbano.org/templates/creaWidget.tpl',
      1 => 1333467934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21109521534f8eeeea28ecd9-50932477',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<?php $_template = new Smarty_Internal_Template("includes/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<script type="text/javascript" src="/js/controlli.js"></script>

<script>

$(function() {
	$("#comune").autocomplete({ 
		source: "<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
ajax/comuni.php", 
		minLength: 2,
		select: function (event, ui) {
			$('#id_comune').val(ui.item.nome_url);
			updateWidget();
		}
	});
});

function updateWidget() {
	var widget_link = "<iframe src=\"<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
ext/widget.php?c="+$('#id_comune').val();
	height = 37+76+26;
	/*if ($('#urlInvio').val()!='') {
		widget_link += '&'+$('#url').serialize();
	}*/
	
	if ($('#includiMappa').attr('checked')) {
		widget_link += "&m=1";
		height += 340;
	}
	if ($('#includiNumeri').attr('checked')) {
		widget_link += "&n=1";
		height += 49*3;
	}
	if ($('#includiUltime').attr('checked')) {
		widget_link += "&u=1";
		height += 242;
	}
	if ($('#includiTwitter').attr('checked')) {
		widget_link += "&tw=1";
		height += 375;
	}
	
	
	if ($('#width').val()!='' && !isNaN($('#width').val())) {
		width = parseInt($('#width').val())
		if (width<200) {
			$('#width').val('200');
			alert('Non è possibile specificare un valore inferiore a 200 pixel');
			width = 200;
		}
	} else {
		$('#width').val('200');
		width = 200;
	}
	$('#height').val(height);
	widget_link += "\" width=\""+width+"\" height=\""+height+"\" frameborder=0></iframe>";
	$('#linkWidget').text(widget_link);
}

function popitup(url) {
	//newwindow=window.open(url,'mywindow');
	newwindow=window.open(url,'mywindow','width=280,height=600,toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,copyhistory=no,resizable=yes');
	if (window.focus) { newwindow.focus() }
	return false;
}

function provaWidget() {
	var widget_link = "<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
ext/widget.php?c="+$('#id_comune').val();
	height = 37+76+26;
	/*if ($('#urlInvio').val()!='') {
		widget_link += '&'+$('#url').serialize();
	}*/
	
	if ($('#includiMappa').attr('checked')) {
		widget_link += "&m=1";
		height += 340;
	}
	if ($('#includiNumeri').attr('checked')) {
		widget_link += "&n=1";
		height += 49*3;
	}
	if ($('#includiUltime').attr('checked')) {
		widget_link += "&u=1";
		height += 242;
	}
	if ($('#includiTwitter').attr('checked')) {
		widget_link += "&tw=1";
		height += 375;
	}

	popitup(widget_link);

}


</script>

<div class="rightPageHeader">
	<div class="rightHeadText"><h3 class="fontS18 marginB5 fBrown"><?php echo $_smarty_tpl->getConfigVariable('creaWidgetTitle');?>
</h3>
		<?php echo $_smarty_tpl->getConfigVariable('creaWidgetTesto');?>

	</div>
	<div class="rightHeadIcon"><div class="rhiCreaWidget"></div></div>
</div>

<div class="testoFumetto" id="creaWidget">
	<!--<div><h3 class="pageTitle marginB5"><?php echo $_smarty_tpl->getConfigVariable('regTitolo');?>
</h3></div>-->
	<form method="post" onsubmit="return false;">
		<div><label for="comune"><?php echo $_smarty_tpl->getConfigVariable('comune');?>
:</label> <input onchange="return updateWidget();" name="comune" id="comune" type="text" /><input type="hidden" name="id_comune" id="id_comune" /><span id="controllo_comune"></span></div>
		<!--<div><label for="url"><?php echo $_smarty_tpl->getConfigVariable('urlInvio');?>
:</label> <div class="inputContainer"><input onchange="return updateWidget();" name="url" id="url" type="text" /></div>-->
		<div><label for="includiMappa"><?php echo $_smarty_tpl->getConfigVariable('includiMappa');?>
</label> <input onchange="return updateWidget();" name="includiMappa" id="includiMappa" type="checkbox" /></div>
		<div><label for="includiNumeri"><?php echo $_smarty_tpl->getConfigVariable('includiNumeri');?>
</label> <input onchange="return updateWidget();" name="includiNumeri" id="includiNumeri" type="checkbox" /></div>
		<div><label for="includiUltime"><?php echo $_smarty_tpl->getConfigVariable('includiUltime');?>
</label> <input onchange="return updateWidget();" name="includiUltime" id="includiUltime" type="checkbox" /></div>
		<!--<div class="marginT10"><label for="includiTwitter"><?php echo $_smarty_tpl->getConfigVariable('includiTwitter');?>
</label> <input onchange="return updateWidget();" name="includiTwitter" id="includiTwitter" type="checkbox" /></div> -->
		<div><label for="width"><?php echo $_smarty_tpl->getConfigVariable('width');?>
:</label> <input onchange="return updateWidget();" name="width" id="width" type="text" class="width_w" /></div>
		<!-- <div class="marginT10"><label for="height"><?php echo $_smarty_tpl->getConfigVariable('height');?>
:</label> <input disabled name="height" id="height" type="text" /></div> -->
		<div class="noBordo"><label for="linkWidget"><?php echo $_smarty_tpl->getConfigVariable('linkWidget');?>
<br /><span class="fontS10 pointer" onclick="selezionaTesto('linkWidget');"><?php echo $_smarty_tpl->getConfigVariable('selTutto');?>
</span></label> <div class="sostieniCodiceWidget" id="linkWidget" disabled="disabled" onclick="selezionaTesto('linkWidget');"></div>
		<input type="submit" name="Prova" value="Prova" onclick="provaWidget();" />
		</div>
	</form>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>






<div class="demo-description" id="modalControlli">
</div>

<?php $_template = new Smarty_Internal_Template("includes/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>