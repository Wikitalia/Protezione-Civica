<?php /* Smarty version Smarty-3.0.7, created on 2012-06-13 17:49:53
         compiled from "/var/www/protezionecivica/templates/listaSegnalazioni.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15553156224fd8b6a1408da1-46657319%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '149e004295a849281ef4f96bd003e0e5526f03e7' => 
    array (
      0 => '/var/www/protezionecivica/templates/listaSegnalazioni.tpl',
      1 => 1339602590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15553156224fd8b6a1408da1-46657319',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<script src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
js/infobox.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
js/jquery.autoellipsis-1.0.2.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
js/jquery.cookie.js"></script>
<script>

	var jsonFiltriLista = $.cookie("jsonFiltriLista");
	var filtriLista = new Array();
	var subdomain = ('<?php echo $_smarty_tpl->getVariable('subdomain')->value;?>
' == '')?'www':'<?php echo $_smarty_tpl->getVariable('subdomain')->value;?>
';
	var domain = '<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['dominio'];?>
';

	if (jsonFiltriLista) {
		filtriLista = jQuery.secureEvalJSON(jsonFiltriLista);
	}


	var settings_limit_giorni=<?php echo $_smarty_tpl->getVariable('settings')->value['segnalazioni']['limit_giorni'];?>
;
	var json_segnalazioni='<?php echo $_smarty_tpl->getVariable('segnalazioni')->value;?>
';
	var settings_limit_numero=<?php echo $_smarty_tpl->getVariable('settings')->value['segnalazioni']['limit_numero'];?>
;
	<?php if ($_smarty_tpl->getVariable('user')->value){?>
		var idu=<?php echo $_smarty_tpl->getVariable('user')->value['id_utente'];?>
;
	<?php }?>
	
	var old_ib = null;
	
</script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
js/mappa_elenco.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
js/markerclusterer.js"></script>

<script>

// boxText è il contenitore del popup
var boxText = document.createElement("div");
boxText.style.cssText = "";

var infoBoxOptions = {
	content: boxText,
	disableAutoPan: false,
	maxWidth: 0,
	pixelOffset: new google.maps.Size(28, -92),
	zIndex: null,
	/*
	boxStyle: { 
		background: "white",
		display: "hidden",
		opacity: 1,
		width: "290px",
		float: "left",
		margin: "22px",
		height: "22px",
		border: "1px #ccc solid"
	},
	*/
	closeBoxMargin: "5px 5px 0 300px",
	closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif",
	infoBoxClearance: new google.maps.Size(1, 1),
	isHidden: false,
	pane: "floatPane",
	enableEventPropagation: false
};

var ib = new InfoBox(infoBoxOptions);

//var dotsIB = $('.infoBox').ThreeDots({ max_rows:1 });

function aggiungi_segnalazione(posizione,segnalazione) {

	var myLatlng = new google.maps.LatLng(segnalazione['lat'],segnalazione['lng']);
      
  var stato = '';
      
  if (segnalazione['stato'] >= 300) {
  	stato = 'Risolta';
  } else if (segnalazione['stato'] >= 200) {
  	stato = 'In carico';
  } else {
  	stato = 'In attesa';
  }

  var image = new google.maps.MarkerImage('<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
'+segnalazione.marker,
    new google.maps.Size(30, 48),
    new google.maps.Point(0,0),
    new google.maps.Point(15, 48));

	var marker = new google.maps.Marker({
	    position: myLatlng,
	    icon: image
	});

	google.maps.event.addListener(marker, 'click', function() {
		//location.href=segnalazione.url;
		ib.close();
		
		
		// Contenuto del popup
		

		/*infoBoxHTML = '\
		<img src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/popupFreccia.png" alt="" style="position:relative; margin-bottom:-32px; top:25px; left:-40px; float:left;" />\
		<div id="infoBoxContent" class="ultimeSegnalazioni" onclick="location.href=\''+segnalazione.url+'\'">\
				<div class="w100 left clear">\
					<div class="leftAvatar">\
						<img src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
'+segnalazione['foto_base_url']+'85-55.jpg" />\
					</div>\
					<div class="rightContents">\
						<span class="fBold fontS12">'+segnalazione.nome+' '+segnalazione.cognome+'</span><br />\
						<span class="fontS10">'+relativeTime(segnalazione.data)+'</span>\
						<div class="auto fontS10 marginT5"> '+segnalazione.citta+' - '+segnalazione.indirizzo+' '+segnalazione.civico+'</div>\
					</div>\
				</div>\
				<div class="w100 paddY10 left fontS12 fGeorgia clear">'+segnalazione.messaggio+'</div>\
			</div>';
		infoBoxHTML += '</div></div>';*/
		
		infoBoxHTML='\
					<img src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/popupFreccia.png" alt="" style="position:relative; left:-20px; top:25px;float:left;" />\
					<div id="infoBoxContent" onclick="location.href=\''+segnalazione.url+'\'">\
						<div class="left">\
								<img src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
'+segnalazione['foto_base_url']+'85-55.jpg" class="marginL5" />\
						</div>\
						<div class="right">\
								<div class="w100 fBold fontS10">'+segnalazione.nome+' '+segnalazione.cognome+'</div>\
								<div class="w100 fontS12 marginT5"> '+segnalazione.citta+' - '+segnalazione.indirizzo+' '+segnalazione.civico+'</div>\
								<div class="w100 fontS10">'+relativeTime(segnalazione.data)+'</div>\
						</div>\
					</div>\
					<div class="fontS12 fGeorgia left marginT5 marginL10 marginR10 marginB10">'+segnalazione.messaggio+'</div>';
		
		boxText.innerHTML = infoBoxHTML;
		ib.open(du_map.map, marker);


	});
	
	if (!markerClusterer) {
		markerClusterer = new MarkerClusterer(du_map.map, du_map.markers);
		markerClusterer.setGridSize(35);
		markerClusterer.setMaxZoom(15);
		markerClusterer.setMinClusterSize(2);

		var styles=markerClusterer.getStyles();
		styles[0]['url'] = '<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/ico_group_10.png';
		styles[1]['url'] = '<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/ico_group_25.png';
		styles[2]['url'] = '<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/ico_group_50.png';
		styles[3]['url'] = '<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/ico_group_100.png';
		markerClusterer.setStyles(styles);
	}
	markerClusterer.addMarker(marker);
	var c = markerClusterer.getCluster(marker);

}

window.onload=function() {

	du_map.init('#map_canvas_list',initialLocation,zoom);
	
	segnalazioni_first_load();

	$( "#listaSegnFiltersCategoria" ).buttonset();
	
	$( "#listaSegnFilters" ).show();


}
		
</script>


<div id="listaSegnalazioni">


	
 
	<div id="listaSegnMappa" style="position:relative;">
		<div id="map_canvas_list" style="height:100%;">
		</div>
	</div>
	<div id="listaSegnBottom">
		<div id="listaSegnFilters" style="display:none;">
			<h5 class="fGreen"><?php echo $_smarty_tpl->getConfigVariable('filtraSegnalazioni');?>
</h5>
			<div>	
				<form class="skinnedForm">
					<div>
						<select id="listaSegnFiltersStato" onchange="segnalazioni_filtra();" class="marginB10">
							<option value="0"><?php echo $_smarty_tpl->getConfigVariable('filtraTutte');?>
</option>
							<option value="100"><?php echo $_smarty_tpl->getConfigVariable('filtraInAttesa');?>
</option>
							<option value="200"><?php echo $_smarty_tpl->getConfigVariable('filtraInCarico');?>
</option>
							<option value="300"><?php echo $_smarty_tpl->getConfigVariable('filtraRisolte');?>
</option>
						</select>
						<input type="checkbox" id="filtro_recenti" name="recenti" <?php if ($_smarty_tpl->getVariable('locType')->value!="competenza"){?>checked="checked" <?php }?>onclick="segnalazioni_filtra();" value="recenti" />
						<label for="filtro_recenti">
							<span class="ui-button-text"><?php echo $_smarty_tpl->getConfigVariable('filtraRecenti');?>
</span>
						</label>
						<?php if ($_smarty_tpl->getVariable('user')->value){?>
						<input type="checkbox" id="filtro_personali" name="personali" onclick="segnalazioni_filtra();" value="personali" />
						<label for="filtro_personali">
							<span class="ui-button-text"><?php echo $_smarty_tpl->getConfigVariable('filtraPersonali');?>
</span>
						</label>
						<?php }else{ ?>
						<input type="checkbox" id="filtro_personali" name="personali" value="personali" style="display:none;"/>
						<?php }?>
					
					
						<div id="listaSegnFiltersCategoria">
							<?php  $_smarty_tpl->tpl_vars['tipo'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('tipi')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['tipo']->index=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['tipo']->key => $_smarty_tpl->tpl_vars['tipo']->value){
 $_smarty_tpl->tpl_vars['tipo']->index++;
 $_smarty_tpl->tpl_vars['tipo']->first = $_smarty_tpl->tpl_vars['tipo']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["filtri"]['first'] = $_smarty_tpl->tpl_vars['tipo']->first;
?>
								<input type="checkbox" id="radio<?php echo $_smarty_tpl->tpl_vars['tipo']->value['id_tipo'];?>
" name="tipo" value="<?php echo $_smarty_tpl->tpl_vars['tipo']->value['id_tipo'];?>
" onclick="segnalazioni_filtra();" checked="checked" />
								<label for="radio<?php echo $_smarty_tpl->tpl_vars['tipo']->value['id_tipo'];?>
" aria-pressed="false" class="categoriaButt <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['filtri']['first']){?>marginL15<?php }?>" role="button" aria-disabled="false">
									<div class="<?php echo $_smarty_tpl->tpl_vars['tipo']->value['label'];?>
SmallIcon"></div> <div class="auto fontS12 fNormal fArial marginL5 fGray"><?php echo $_smarty_tpl->tpl_vars['tipo']->value['nome'];?>
</div>
								</label>
							<?php }} ?>
						</div>
					</div>
				</form>

			</div>
		</div>
	</div>
</div>


