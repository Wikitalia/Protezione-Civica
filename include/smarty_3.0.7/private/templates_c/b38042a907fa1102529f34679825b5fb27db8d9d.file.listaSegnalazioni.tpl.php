<?php /* Smarty version Smarty-3.0.7, created on 2012-05-03 15:01:17
         compiled from "/var/www/test.decorourbano.org/templates/listaSegnalazioni.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19430595554fa2819d19f0f2-79692017%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b38042a907fa1102529f34679825b5fb27db8d9d' => 
    array (
      0 => '/var/www/test.decorourbano.org/templates/listaSegnalazioni.tpl',
      1 => 1336050059,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19430595554fa2819d19f0f2-79692017',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<?php $_template = new Smarty_Internal_Template("includes/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

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
boxText.style.cssText = "width:290px; float:right; margin:0; padding: 5px;";

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
	closeBoxMargin: "5px 0 0 282px",
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

  var image = new google.maps.MarkerImage(segnalazione.marker,
    new google.maps.Size(40, 40),
    new google.maps.Point(0,0),
    new google.maps.Point(19, 40));

	var marker = new google.maps.Marker({
	    position: myLatlng,
	    icon: image
	});

	google.maps.event.addListener(marker, 'click', function() {
		//location.href=segnalazione.url;
		ib.close();
		
		
		// Contenuto del popup
		infoBoxHTML = '\
			<img src="/images/popupFreccia.png" alt="" style="position:relative; left:-26px;  top:25px; margin-right:-26px; float:left;" />\
			<div id="infoBoxContent" class="ultimeSegnalazioni" onclick="location.href=\''+segnalazione.url+'\'">\
					<div class="leftAvatar">\
						<div style="width:35px; float:left;">\
							<a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['vediProfilo'];?>
?idu='+segnalazione.id_utente+'"><img src="/resize.php?w=30&h=30&f='+segnalazione.avatar+'" alt="'+segnalazione.nome+' '+segnalazione.cognome+'" /></a>\
						</div>\
					</div>\
					<div class="rightContents">\
						<div style="width:220px; float:left;">\
							<a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['vediProfilo'];?>
?idu='+segnalazione.id_utente+'" class="tdNone"><span class="fBold fontS12">\
								'+segnalazione.nome+' '+segnalazione.cognome+'</span>\
							</a><br />\
							<span class="fontS10">'+relativeTime(segnalazione.data)+'</span>\
						</div>\
						<img src="'+segnalazione['foto_base_url']+'85-55.jpg" class="marginL5 right" />\
						<div class="auto fontS12 fGeorgia ellipsis_text marginT5" style="width:150px;height:30px;overflow:hidden;clear:left;">'+segnalazione.messaggio+'</div>\
						<div class="auto fontS10 fGreen marginT5"> '+segnalazione.citta+' - '+segnalazione.indirizzo+' '+segnalazione.civico+'</div>';
		if (segnalazione['client'] == 'iPhone') infoBoxHTML += '<div class="auto fontS10">via <a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['applicazioni'];?>
">iPhone</a></div>';
		if (segnalazione['client'] == 'Android') infoBoxHTML += '<div class="auto fontS10">via <a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['applicazioni'];?>
">Android</a></div>';
		if (segnalazione['client'] == 'Windows Phone') infoBoxHTML += '<div class="auto fontS10">via <a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['applicazioni'];?>
">Windows Phone</a></div>';

		infoBoxHTML += '</div></div>';
		
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

	//interval = setInterval ( "segnalazioni_nuove_get()", 1800000);
	//interval = setInterval ( "segnalazioni_nuove_get()", 300000);
	//interval = setInterval ( "segnalazioni_nuove_get()", 15000);

}
		
</script>


<div id="listaSegnalazioni">

	<?php if ($_smarty_tpl->getVariable('locType')->value=='comune'){?>
	
	 <script>
		 <?php if ($_smarty_tpl->getVariable('location')->value){?>
			 initialLocation = new google.maps.LatLng(<?php echo $_smarty_tpl->getVariable('location')->value['lat'];?>
, <?php echo $_smarty_tpl->getVariable('location')->value['lng'];?>
);
			 zoom = 15;        
		 <?php }else{ ?>
			 initialLocation = new google.maps.LatLng(<?php echo $_smarty_tpl->getVariable('comune')->value['lat'];?>
, <?php echo $_smarty_tpl->getVariable('comune')->value['lng'];?>
);
			 zoom = 11;                
		 <?php }?>  
		id_comune = <?php echo $_smarty_tpl->getVariable('comune')->value['id_comune'];?>
;
	</script>
	
	<div id="listaSegnComuneTop">
		<?php if ($_smarty_tpl->getVariable('comune')->value['stato']==0){?>
		<div id="bannerScriviComune">
			<h4 class="auto"><?php echo $_smarty_tpl->getConfigVariable('comuneNonAttivoBox1Titolo');?>
</h4>
			<?php echo $_smarty_tpl->getConfigVariable('comuneNonAttivoBox1Testo');?>

		</div>
		<div id="dettaglioComuneNonAttivo">
			<div class="auto fGreen right clear fBold fontS13"><?php echo $_smarty_tpl->getVariable('comune')->value['nome'];?>
</div>
			<div class="auto fLightGray fUppercase right clear fontS16 fBold marginT5"><?php echo $_smarty_tpl->getConfigVariable('comuneNonAttivo');?>
</div>
			<div class="auto right clear fontS13 fBold marginT5">
			</div>
		</div>	
		<?php }else{ ?>

		<div id="dettaglioCifreComune">
			<?php if ($_smarty_tpl->getVariable('comune')->value['logo']!=''){?>		
			<div class="left w90" style="text-align:center;margin: 10px 0;height:90px;">
				<img src="/resize.php?h=90&f=<?php echo $_smarty_tpl->getVariable('comune')->value['logo'];?>
" />
			</div>
			<?php }?>			
			<div class="left w380 paddL10">
				<div class="h55">
					<h2 class="fBrown">Comune di <?php echo $_smarty_tpl->getVariable('comune')->value['nome'];?>
</h2>
				</div>
				
				<div class="fGreen fBold fontS12 marginB5 left">Segnalazioni a <?php echo $_smarty_tpl->getVariable('comune')->value['nome'];?>
</div>
				
				<div class="auto marginR10 fontS12"><span class="fBold"><?php echo $_smarty_tpl->getConfigVariable('comuneAttivoSegnTot');?>
:</span> <?php echo $_smarty_tpl->getVariable('comune')->value['totali'];?>
</div>
				<div class="auto marginR10 fontS12"><span class="fBold"><?php echo $_smarty_tpl->getConfigVariable('comuneAttivoSegnInCarico');?>
:</span> <?php echo $_smarty_tpl->getVariable('comune')->value['in_carico'];?>
</div>
				<div class="auto marginR10 fontS12"><span class="fBold"><?php echo $_smarty_tpl->getConfigVariable('comuneAttivoSegnRisolte');?>
:</span> <?php echo $_smarty_tpl->getVariable('comune')->value['risolte'];?>
</div>
			</div>
		</div>
		<div id="dettaglioComuneAttivo">
			<div class="fOrange fUppercase marginR5 fontS16 fBold marginT5 right w243"><?php echo $_smarty_tpl->getConfigVariable('comuneAttivo');?>
</div>
			<span class="auto fGray marginR5 fontS12 right marginT5"><?php echo $_smarty_tpl->getConfigVariable('comuneAttivoDal');?>
 <?php echo ConvertitoreData_UNIXTIMESTAMP_IT($_smarty_tpl->getVariable('comune')->value['data_affiliazione']);?>
</span>
		</div>
		
		
		<?php }?>
	</div>
	
	<?php }elseif($_smarty_tpl->getVariable('locType')->value=='regione'){?>
	
	<script>
	initialLocation = new google.maps.LatLng(<?php echo $_smarty_tpl->getVariable('regione')->value['lat'];?>
, <?php echo $_smarty_tpl->getVariable('regione')->value['lng'];?>
);
	zoom = 8;
	regione = "<?php echo $_smarty_tpl->getVariable('regione')->value['nome'];?>
";
	</script>
	
	<div id="listaRegione">
		<div id="listaSegnRegioneStats">
			<div class="fontS14 fBrown fBold"><?php echo $_smarty_tpl->getConfigVariable('regione');?>
 <?php echo $_smarty_tpl->getVariable('regione')->value['nome'];?>
</div>
			<div class="fontS12"><?php echo $_smarty_tpl->getConfigVariable('regioneComuniTotale');?>
 <?php echo $_smarty_tpl->getVariable('regione')->value['nome'];?>
: <strong><?php echo $_smarty_tpl->getVariable('regione')->value['dati']['totali'];?>
</strong></div>
		</div>
		<div id="listaSegnRegioneTopComuni">
			<div class="fontS14 fBold fBrown"><?php echo $_smarty_tpl->getConfigVariable('segnalatoriAttivi');?>
:</div>
			<?php $_smarty_tpl->tpl_vars["fontS"] = new Smarty_variable("20", null, null);?>
			<?php  $_smarty_tpl->tpl_vars['comune'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('regione')->value['top_comuni']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['segnAttiviRegione']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['comune']->key => $_smarty_tpl->tpl_vars['comune']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['segnAttiviRegione']['index']++;
?>
				<span class="fBold fontS<?php echo $_smarty_tpl->getVariable('fontS')->value-($_smarty_tpl->getVariable('smarty')->value['foreach']['segnAttiviRegione']['index']*2);?>
"><a href="http://<?php echo $_smarty_tpl->tpl_vars['comune']->value['nome_url'];?>
.<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['dominio'];?>
" class="tdNone"><?php echo $_smarty_tpl->tpl_vars['comune']->value['nome'];?>
</a> (<?php echo $_smarty_tpl->tpl_vars['comune']->value['totali'];?>
)</span>
			<?php }} ?>
		</div>
	</div>
	<?php }elseif($_smarty_tpl->getVariable('locType')->value=='competenza'){?>
	<script>
		zoom = 6;  
	</script>
	<div id="listaSegnCompetenza">
		<div id="listaSegnCompetenzaTitolo">
			<div class="fontS20  "><?php echo $_smarty_tpl->getVariable('testoCompetenza')->value;?>
</div>
		</div>
		<div style="text-align:right;" id="listaSegnCompetenzaLogo">
			<a href="<?php echo $_smarty_tpl->getVariable('urlCompetenza')->value;?>
" target="_blank"><img src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/loghi_competenze/<?php echo $_smarty_tpl->getVariable('nomeCompetenzaUrl')->value;?>
.png" /></a>
		</div>
	</div>
	<?php }else{ ?>
	<script>
	//var initialLocation = new google.maps.LatLng(<?php echo $_smarty_tpl->getVariable('regione')->value['lat'];?>
, <?php echo $_smarty_tpl->getVariable('regione')->value['lng'];?>
);
	<?php if ($_smarty_tpl->getVariable('location')->value){?>
		initialLocation = new google.maps.LatLng(<?php echo $_smarty_tpl->getVariable('location')->value['lat'];?>
, <?php echo $_smarty_tpl->getVariable('location')->value['lng'];?>
);
		zoom = 15;
	<?php }else{ ?>
		zoom = 6;
	<?php }?>    
	/*if ("<?php echo $_smarty_tpl->getVariable('user')->value['citta'];?>
" != '') {
		var geocoder = new google.maps.Geocoder();
	  geocoder.geocode( { 'address': '<?php echo $_smarty_tpl->getVariable('user')->value['quartiere'];?>
 <?php echo $_smarty_tpl->getVariable('user')->value['citta'];?>
 italy' } , function(results, status) {
	    if (status == google.maps.GeocoderStatus.OK) {
	    	initialLocation = results[0].geometry.location;
	    	zoom = 14;
	    }
	  });
	} else zoom = 5;*/
	</script>
	<div id="listaSegnItalia">
		<div id="listaSegnItaliaStats">
			<div class="fontS14 fBrown fBold"><?php echo $_smarty_tpl->getConfigVariable('italiaComuni');?>
</div>
			<div class="fontS12"><?php echo $_smarty_tpl->getConfigVariable('italiaTotaleComuni');?>
: <strong><?php echo $_smarty_tpl->getVariable('italia')->value['dati']['totali'];?>
</strong></div>
		</div>
		<div id="listaSegnItaliaTopComuni">
			<div class="fontS14 fBold fBrown"><?php echo $_smarty_tpl->getConfigVariable('segnalatoriAttivi');?>
:</div>
			<?php $_smarty_tpl->tpl_vars["fontS"] = new Smarty_variable("20", null, null);?>
			<?php  $_smarty_tpl->tpl_vars['comune'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('italia')->value['top_comuni']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['segnAttivi']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['comune']->key => $_smarty_tpl->tpl_vars['comune']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['segnAttivi']['index']++;
?>
				<span class="fBold noWrap fontS<?php echo $_smarty_tpl->getVariable('fontS')->value-($_smarty_tpl->getVariable('smarty')->value['foreach']['segnAttivi']['index']*2);?>
"><a href="http://<?php echo $_smarty_tpl->tpl_vars['comune']->value['nome_url'];?>
.<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['dominio'];?>
" class="tdNone"><?php echo $_smarty_tpl->tpl_vars['comune']->value['nome'];?>
</a> (<?php echo $_smarty_tpl->tpl_vars['comune']->value['totali'];?>
)</span>
			<?php }} ?>
		</div>
	</div>
	<?php }?>
	<?php if (($_smarty_tpl->getVariable('locType')->value=='regione')||($_smarty_tpl->getVariable('locType')->value=='comune')){?>
  <div id="segnalazionePath">
   <div class="auto marginT5 marginB5">
    &nbsp;DU / <a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['listaSegnalazioni'];?>
" class="tdNone">Italia</a> / 
    <a href="http://<?php echo $_smarty_tpl->getVariable('regione')->value['nome_url'];?>
.<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['dominio'];?>
" class="tdNone"><?php echo $_smarty_tpl->getVariable('regione')->value['nome'];?>
</a>  
    <?php if ($_smarty_tpl->getVariable('locType')->value=='comune'){?>
    / <a href="http://<?php echo $_smarty_tpl->getVariable('comune')->value['nome_url'];?>
.<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['dominio'];?>
" class="tdNone"><?php echo $_smarty_tpl->getVariable('comune')->value['nome'];?>
</a>
    <?php }?>
   </div>
  </div>
 <?php }?>
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
					
				</form>

			<?php if ($_smarty_tpl->getVariable('locType')->value=='comune'){?> 

      <div class="dataset_box_download">
      <div class="dataset_box_download_testo">
        Download del dataset <a href="http://it.wikipedia.org/wiki/GeoRSS" target="_blank">GeoRSS</a> per <b><?php echo $_smarty_tpl->getVariable('comune')->value['nome'];?>
</b>:
				<a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
ext/georss_dl.php?comune=<?php echo $_smarty_tpl->getVariable('comune')->value['nome_url'];?>
&compress=1" target="_blank"><?php echo $_smarty_tpl->getVariable('comune')->value['nome_url'];?>
.zip</a>
				- <a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
ext/georss_dl.php?comune=<?php echo $_smarty_tpl->getVariable('comune')->value['nome_url'];?>
" target="_blank"><?php echo $_smarty_tpl->getVariable('comune')->value['nome_url'];?>
.rss</a>
				<br>
        <span class="dataset_box_download_licenza">Licenza <a href="http://creativecommons.org/licenses/by/3.0/it/" target="_blank">Creative Commons Attribuzione 3.0 Italia (CC BY 3.0)</a></span>
			</div>
      </div>
      
      <?php }elseif($_smarty_tpl->getVariable('locType')->value=='regione'){?> 
      
      <?php }elseif($_smarty_tpl->getVariable('locType')->value=='competenza'){?> 
			
			<?php }else{ ?> 
			
      <div class="dataset_box_download">
      <div class="dataset_box_download_testo">
        Download del dataset <a href="http://it.wikipedia.org/wiki/GeoRSS" target="_blank">GeoRSS</a> per <b>Italia</b>:
        
        <a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
ext/georss_dl.php?compress=1" target="_blank">Italia.zip</a>
        - <a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
ext/georss_dl.php" target="_blank">Italia.rss</a>
				
				<br>
        <span class="dataset_box_download_licenza">Licenza <a href="http://creativecommons.org/licenses/by/3.0/it/" target="_blank">Creative Commons Attribuzione 3.0 Italia (CC BY 3.0)</a></span>
			</div>
      </div>
      
      <?php }?>

			</div>
		</div>
	</div>
</div>
</div>
<?php $_template = new Smarty_Internal_Template("includes/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>