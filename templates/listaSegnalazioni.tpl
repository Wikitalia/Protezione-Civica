{*
 * ----------------------------------------------------------------------------
 * Decoro Urbano version 0.4.0
 * ----------------------------------------------------------------------------
 * Copyright Maiora Labs Srl (c) 2012
 * ----------------------------------------------------------------------------   
 * 
 * This file is part of Decoro Urbano.
 * 
 * Decoro Urbano is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * Decoro Urbano is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 * 
 * You should have received a copy of the GNU Affero General Public License
 * along with Decoro Urbano.  If not, see <http://www.gnu.org/licenses/>.
 *}

{*include file="includes/header.tpl"*}

<script src="{$settings.sito.url}js/infobox.js" type="text/javascript"></script>
<script type="text/javascript" src="{$settings.sito.url}js/jquery.autoellipsis-1.0.2.min.js"></script>
<script type="text/javascript" src="{$settings.sito.url}js/jquery.cookie.js"></script>

<script>

	var jsonFiltriLista = $.cookie("jsonFiltriLista");
	var filtriLista = new Array();
	var subdomain = ('{$subdomain}' == '')?'www':'{$subdomain}';
	var domain = '{$settings.sito.dominio}';

	if (jsonFiltriLista) {
		filtriLista = jQuery.secureEvalJSON(jsonFiltriLista);
	}


	var settings_limit_giorni={$settings['segnalazioni'].limit_giorni};
	var json_segnalazioni='{$segnalazioni}';
	var settings_limit_numero={$settings['segnalazioni'].limit_numero};
	{if $user}
		var idu={$user.id_utente};
	{/if}
	
	var old_ib = null;
	
</script>

<script type="text/javascript" src="{$settings.sito.url}js/mappa_elenco.js"></script>
<script type="text/javascript" src="{$settings.sito.url}js/markerclusterer.js"></script>

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
	closeBoxMargin: "5px 5px 0 300px",
	closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif",
	infoBoxClearance: new google.maps.Size(1, 1),
	isHidden: false,
	pane: "floatPane",
	enableEventPropagation: false
};

var ib = new InfoBox(infoBoxOptions);

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

  var image = new google.maps.MarkerImage('{$settings.sito.url}'+segnalazione.marker,
    new google.maps.Size(30, 48),
    new google.maps.Point(0,0),
    new google.maps.Point(15, 48));

	var marker = new google.maps.Marker({
	    position: myLatlng,
	    icon: image
	});

	google.maps.event.addListener(marker, 'click', function() {
		ib.close();

		infoBoxHTML='\
					<img src="{$settings.sito.url}images/popupFreccia.png" alt="" style="position:relative; left:-20px; top:25px;float:left;" />\
					<div id="infoBoxContent" onclick="location.href=\''+segnalazione.url+'\'">\
						<div class="left">\
								<img src="{$settings.sito.url}'+segnalazione['foto_base_url']+'85-55.jpg" class="marginL5" />\
						</div>\
						<div class="right">\
								<div class="w100 fBold fontS10">'+segnalazione.nome+' '+segnalazione.cognome+'</div>\
								<div class="w100 fontS12 marginT5"> '+segnalazione.citta+' - '+segnalazione.indirizzo+' '+segnalazione.civico+'</div>\
								<div class="w100 fontS10">'+relativeTime(segnalazione.data)+'</div>\
						</div>\
					</div>\
					<div class="fontS12 fGeorgia left marginT5 marginL10 marginR10 marginB10 textLeft">'+segnalazione.messaggio+'</div>';
		
		boxText.innerHTML = infoBoxHTML;
		ib.open(du_map.map, marker);


	});
	
	if (!markerClusterer) {
		markerClusterer = new MarkerClusterer(du_map.map, du_map.markers);
		markerClusterer.setGridSize(35);
		markerClusterer.setMaxZoom(15);
		markerClusterer.setMinClusterSize(2);

		var styles=markerClusterer.getStyles();
		styles[0]['url'] = '{$settings.sito.url}images/ico_group_10.png';
		styles[1]['url'] = '{$settings.sito.url}images/ico_group_25.png';
		styles[2]['url'] = '{$settings.sito.url}images/ico_group_50.png';
		styles[3]['url'] = '{$settings.sito.url}images/ico_group_100.png';
		markerClusterer.setStyles(styles);
	}
	markerClusterer.addMarker(marker);
	var c = markerClusterer.getCluster(marker);

}
		
</script>


<div id="listaSegnalazioni">


	
 
	<div id="listaSegnMappa" style="position:relative;">
		<div id="map_canvas_list" style="height:100%;">
		</div>
	</div>
	<div id="listaSegnBottom">
		<div id="listaSegnFilters" style="display:none;">
			<h5 class="fGreen">{#filtraSegnalazioni#}</h5>
			<div>	
				<form class="skinnedForm">
					<div>
						<select id="listaSegnFiltersStato" onchange="segnalazioni_filtra();" class="marginB10">
							<option value="0">{#filtraTutte#}</option>
							<option value="100">{#filtraInAttesa#}</option>
							<option value="200">{#filtraInCarico#}</option>
							<option value="300">{#filtraRisolte#}</option>
						</select>
						<input type="checkbox" id="filtro_recenti" name="recenti" {if $locType != "competenza"}checked="checked" {/if}onclick="segnalazioni_filtra();" value="recenti" />
						<label for="filtro_recenti">
							<span class="ui-button-text">{#filtraRecenti#}</span>
						</label>
						{if $user}
						<input type="checkbox" id="filtro_personali" name="personali" onclick="segnalazioni_filtra();" value="personali" />
						<label for="filtro_personali">
							<span class="ui-button-text">{#filtraPersonali#}</span>
						</label>
						{else}
						<input type="checkbox" id="filtro_personali" name="personali" value="personali" style="display:none;"/>
						{/if}
					
					
						<div id="listaSegnFiltersCategoria">
							{foreach from=$tipi item=tipo name="filtri"}
								<input type="checkbox" id="radio{$tipo.id_tipo}" name="tipo" value="{$tipo.id_tipo}" onclick="segnalazioni_filtra();" checked="checked" />
								<label for="radio{$tipo.id_tipo}" aria-pressed="false" class="categoriaButt {if ! $smarty.foreach.filtri.first}marginL15{/if}" role="button" aria-disabled="false">
									<div class="{$tipo.label}SmallIcon"></div> <div class="auto fontS12 fNormal fArial marginL5 fGray">{$tipo.nome}</div>
								</label>
							{/foreach}
						</div>
					</div>
				</form>

			</div>
		</div>
	</div>
</div>


{*include file="includes/footer.tpl"*}