<?php /* Smarty version Smarty-3.0.7, created on 2012-06-25 14:16:32
         compiled from "/var/www/protezionecivica/templates/prehome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1611140394fe856a03f96a7-26608545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '976a15615ac992a42e80cdc78dd1361e670a5fab' => 
    array (
      0 => '/var/www/protezionecivica/templates/prehome.tpl',
      1 => 1340626589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1611140394fe856a03f96a7-26608545',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/protezionecivica/include/smarty_3.0.7/libs/plugins/modifier.truncate.php';
?>

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

	alert(segnalazione.messaggio);

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
		
		// POPUP SEGNALAZIONE
		infoBoxHTML='\
			<div>\
				<div class="infoBox none">\
					<img src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/popupFreccia.png" alt="" style="position:relative; left:-20px; top:25px;float:left;" />\
					<div id="infoBoxContent" onclick="location.href=\''+segnalazione.url+'\'">\
						<div class="left">\
								<img src="'+segnalazione['foto_base_url']+'85-55.jpg" class="marginL5" />\
						</div>\
						<div class="right">\
								<div class="auto fontS12 marginT5"> '+segnalazione.citta+' - '+segnalazione.indirizzo+' '+segnalazione.civico+'</div>\
								<span class="fontS10">'+relativeTime(segnalazione.data)+'</span>\
						</div>\
						<div class="w100 fontS14 fGeorgia  marginT5">'+segnalazione.messaggio+'AAA</div>\
						</div>\
					</div>\
			</div>';
		
														
		
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

</script>



		<div id="bodyPrehome">

			<div id="topIntro" class="textJustify">
				Le foto dei danni, le richieste e le offerte di aiuto, le strutture di emergenza e le buone pratiche di chi ha trovato un modo intelligente e generoso di affrontare il dopo terremoto: la mappa della protezione civica è tutto questo. Un contenitore per tutte le vostre segnalazioni georeferenziate in modo da tenere sempre un faro acceso sull'Emilia e contribuire ad una ricostruzione trasparente e partecipata delle zone colpite dal sisma. <br />La mappa è anche una app per smartphone in versione Android e iOS. 
			</div>	

			<div id="mapContainerSmall">
				<div class="mapControls">
					<img src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/iconFullScreenOn.png" alt="" id="fullScreenOn" />
					<img src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/buttInviaSegnalazione.png" alt="" id="inviaSegnalazioneButton" />
				</div>
				<?php $_template = new Smarty_Internal_Template("listaSegnalazioni.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
			</div>
			
			<div id="tipoSegnalazione" class="none">
				Cosa vuoi segnalare?<br /><br />
				<img src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/inviaBuonaPratica.png" alt="Invia buona pratica" onclick="location.href='<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['inviaBuonaPratica'];?>
'" />
				<img src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/inviaSegnalazione.png" alt="Invia buona pratica" onclick="location.href='<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['inviaSegnalazione'];?>
'" />
			</div>

			<script>
				$('#fullScreenOn').click(function() {
					var height = $(window).height();  
					// sottraggo l'altezza dell'header
					
					height = height - 75;
					
					$('#mapContainerBig').height(height);
					
					$('#mapContainerBig').fadeIn(1000, function() {
						$('.container').fadeOut(100, function() {
							$('#bigMapLoading').fadeOut(100, function() {
							
								$('#listaSegnalazioni').height(height);
								$('#listaSegnMappa').height(height);
								$('#map_canvas_list').height(height);

								$('#listaSegnalazioni').appendTo("#mapContainerBig");

								var centro = du_map.map.getCenter();
								google.maps.event.trigger(du_map.map, "resize");
								du_map.map.setCenter(centro);
								
								$('#mapFilters').delay(500).fadeIn(1200);

							}); 
						}); 
					}); 
				});
				
				$('#fullScreenOff').click(function() {
				
					$('#mapFilters').fadeOut(300, function() {
					
						$('#listaSegnalazioni').fadeOut(300, function() {

							$('#listaSegnalazioni').height(450);
							$('#listaSegnMappa').height(450);
							$('#map_canvas_list').height(445);
							
							$('#listaSegnalazioni').appendTo("#mapContainerSmall");

							$('.container').fadeIn(200, function() {
							
								$('#listaSegnalazioni').show();
								$('#mapContainerBig').hide();
								var centro = du_map.map.getCenter();
								google.maps.event.trigger(du_map.map, "resize");
								du_map.map.setCenter(centro);
								
							});
						});
						
					});
					
					
				});
			</script>
			
			<?php if (!$_smarty_tpl->getVariable('user')->value){?>
				<script>
		
				$('#inviaSegnalazioneButton').click(function() {
					$('#loginForm').dialog({
						width:300,
						modal: true,
						draggable:false,
						resizable:false,
						dialogClass: 'loginDialog',
						buttons: {
							Ok: function() {
								$( this ).dialog( "close" );
							}
						}
					});
					});
					
					$('#inviaSegnalazioneButton2').click(function() {
						$('#loginForm').dialog({
						width:300,
						modal: true,
						draggable:false,
						resizable:false,
						dialogClass: 'loginDialog',
						buttons: {
							Ok: function() {
								$( this ).dialog( "close" );
							}
						}
					});
					});
		
			</script>	
			<?php }else{ ?>
			<script>
				$('#inviaSegnalazioneButton').click(function() {
					$( "#tipoSegnalazione" ).dialog({
						width:400,
						modal: true,
						draggable:false,
						resizable:false,
						dialogClass: 'inviaSegnalazioneScelta'
					});
					});
					
					$('#inviaSegnalazioneButton2').click(function() {
					$( "#tipoSegnalazione" ).dialog({
						width:400,
						modal: true,
						draggable:false,
						resizable:false,
						dialogClass: 'inviaSegnalazioneScelta'
					});
					});
		
			</script>	
			<?php }?>
			
			
			
			
			<div id="midBoxes">
				
				<h4 class="fBlue padd0 margin0 marginT15 marginB5">
					Ultime Segnalazioni
				</h4>
				<div id="ultimeSegnalazioni">
				
				<script>
				var ultime_segnalazioni = new Array();
				</script>
				
				<?php  $_smarty_tpl->tpl_vars['segnalazione'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('ultime_segnalazioni')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['segnalazione']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['segnalazione']->iteration=0;
if ($_smarty_tpl->tpl_vars['segnalazione']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['segnalazione']->key => $_smarty_tpl->tpl_vars['segnalazione']->value){
 $_smarty_tpl->tpl_vars['segnalazione']->iteration++;
 $_smarty_tpl->tpl_vars['segnalazione']->last = $_smarty_tpl->tpl_vars['segnalazione']->iteration === $_smarty_tpl->tpl_vars['segnalazione']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["ultime_segnalazioni"]['last'] = $_smarty_tpl->tpl_vars['segnalazione']->last;
?>
				
					<div id="segnalazione_<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['id_segnalazione'];?>
" class="ultimeSegnalazioni <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['ultime_segnalazioni']['last']){?>borderBDashed<?php }else{ ?>margin0 padd0<?php }?>">
					<img src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['foto_base_url'];?>
85-55.jpg" class="marginR5 left" style="z-index:1000;" />
					<div class="closeIcon right marginB5" id="closeIcon_<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['id_segnalazione'];?>
"></div>
					<span class="fontS10"><?php echo ConvertitoreData_UNIXTIMESTAMP_IT($_smarty_tpl->tpl_vars['segnalazione']->value['data']);?>
</span> - 
					<span class="marginT5 fontS10"><?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['indirizzo'];?>
 <?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['civico'];?>
, <?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['cap'];?>
 <?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['citta'];?>
</span><br />
					<span class="fontS14 fGeorgia"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['segnalazione']->value['messaggio'],130,"...");?>
</span> - <a href="<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['url'];?>
" class="fontS10">Vedi dettagli</a><br />

					<div style="display:none;" id="dialog-confirm_<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['id_segnalazione'];?>
" title="">
					<p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span><span id="testoBoxConferma_<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['id_segnalazione'];?>
"></span></p>
					</div>


					<script>
					
						function segnalazioneElimina(id) {

							$.ajax({
							  url: '<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
ajax/segnalazione_elimina.php?id='+id,
							  success: function(data) {
									if (data == "1") {
									  $('#segnalazione_'+id).remove();
									}
							  }
							});
						
						}


						function segnalazioneImpropria(ids,idu) {
						
							$.ajax({
							  url: '<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
ajax/segnalazione_impropria.php?ids='+ids+'&idu='+idu,
							  success: function(data) {
									if (data == "1") {
									  alert('Grazie per il tuo contributo!');
									}
							  }
							});
						
						}


					
						var seg = new Array();
						seg['data'] = <?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['data'];?>
;
						seg['id_segnalazione'] = <?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['id_segnalazione'];?>
;
						ultime_segnalazioni.push(seg);
						
						<?php if ($_smarty_tpl->getVariable('user')->value){?>
							<?php if ($_smarty_tpl->getVariable('user')->value['id_utente']==$_smarty_tpl->tpl_vars['segnalazione']->value['id_utente']){?>
								
								$('#closeIcon_<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['id_segnalazione'];?>
').click(function(){

									$('#testoBoxConferma_<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['id_segnalazione'];?>
').html('<?php echo $_smarty_tpl->getConfigVariable('eliminaSegnMex');?>
');
							
									$( "#dialog-confirm_<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['id_segnalazione'];?>
").dialog({
										resizable: false,
										movable: false,
										height:200,
										width:300,
										modal: true,
										title: '<?php echo $_smarty_tpl->getConfigVariable('eliminaSegnTitle');?>
',
										buttons: {
											"<?php echo $_smarty_tpl->getConfigVariable('procedi');?>
": function() {
												segnalazioneElimina(<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['id_segnalazione'];?>
);
												$( this ).dialog( "close" );
											},
											"<?php echo $_smarty_tpl->getConfigVariable('annulla');?>
": function() {
												$( this ).dialog( "close" );
											}
										}
									});
							
								});
								
							<?php }else{ ?>
							
								$('#closeIcon_<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['id_segnalazione'];?>
').click(function(){

									$('#testoBoxConferma_<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['id_segnalazione'];?>
').html('<?php echo $_smarty_tpl->getConfigVariable('segnalaSegnMex');?>
');
							
									$( "#dialog-confirm_<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['id_segnalazione'];?>
").dialog({
										resizable: false,
										movable: false,
										height:200,
										width:300,
										modal: true,
										title: '<?php echo $_smarty_tpl->getConfigVariable('segnalaSegnTitle');?>
',
										buttons: {
											"<?php echo $_smarty_tpl->getConfigVariable('procedi');?>
": function() {
												segnalazioneImpropria(<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['id_segnalazione'];?>
,<?php echo $_smarty_tpl->getVariable('user')->value['id_utente'];?>
);
												$( this ).dialog( "close" );
											},
											"<?php echo $_smarty_tpl->getConfigVariable('annulla');?>
": function() {
												$( this ).dialog( "close" );
											}
										}
									});
							
								});
								
							<?php }?>
						<?php }else{ ?>
							$('#closeIcon_<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['id_segnalazione'];?>
').click(function(){
							
								$('#testoBoxConferma_<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['id_segnalazione'];?>
').html('E\' necessario essere utenti registrati per effettuare questa operazione');
						
								$( "#dialog-confirm_<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['id_segnalazione'];?>
").dialog({
									resizable: false,
									movable: false,
									height:200,
									width:300,
									modal: true,
									title: 'Registrazione necessaria',
									buttons: {
										"<?php echo $_smarty_tpl->getConfigVariable('annulla');?>
": function() {
											$( this ).dialog( "close" );
										}
									}
								});
						
							});
						<?php }?>
						
	
							
						
						
					</script>
					
					</div>
					
					

					
					
					
					<?php }} ?>
					
				</div>
			</div>
	
			
			</div>
			






<script>

//var newest = <?php echo $_smarty_tpl->getVariable('ultima_segnalazione')->value['data'];?>
;
//newest = 1305122836;

controlFields=new Array();

controlNew = new Array();
controlNew['nome'] = "regNome";
controlNew['nome_esteso'] = "Nome";
controlNew['lenght'] = 1;
controlNew['type'] = 1;
controlFields.push(controlNew);

controlNew = new Array();
controlNew['nome'] = "regCognome";
controlNew['nome_esteso'] = "Cognome";
controlNew['lenght'] = 1;
controlNew['type'] = 1;
controlFields.push(controlNew);

controlNew = new Array();
controlNew['nome'] = "regEmail";
controlNew['nome_esteso'] = "Indirizzo email";
controlNew['lenght'] = 0;
controlNew['type'] = 2;
controlFields.push(controlNew);

controlNew = new Array();
controlNew['nome'] = "regPassword";
controlNew['nome_esteso'] = "Password";
controlNew['lenght'] = 6;
controlNew['type'] = 1;
controlFields.push(controlNew);

controlNew = new Array();
controlNew['nome'] = "regConfermaEmail";
controlNew['nome_esteso'] = "Conferma indirizzo email";
controlNew['compare'] = 'regEmail';
controlNew['type'] = 10;
controlFields.push(controlNew);



function segnalazione_nuova_get() {

	//newest = 0;
	$.ajax({
		url: '/ajax/segnalazioni_get.php?t_newer='+ultime_segnalazioni[0].data,
		dataType: "json",
		success: function(data) {
		
			if (data && data.length) {
			
				data = data.reverse();
		
				for(i in data) {
					nuova_segnalazione_scorri(data[i]);
				}
				
			}

		},
		complete: function(seg) {
			lock = 0;
		}
	});

}

function nuova_segnalazione_scorri(seg) {

	var temp = new Array();
	temp['data'] = seg.data;
	temp['id_segnalazione'] = seg.id_segnalazione;
	ultime_segnalazioni.unshift(temp);

	segnalazioneHTML = '\
		<div id="segnalazione_'+seg.id_segnalazione+'" class="ultimeSegnalazioni borderBDashed" style="display:none;" onclick="location.href=\''+seg.url+'\'">\
			<div class="leftAvatar"><a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['vediProfilo'];?>
?idu='+seg.id_utente+'"><img src="/resize.php?w=30&h=30&f='+seg.avatar+'" alt="'+seg.nome+' '+seg.cognome+'" /></a></div>\
			<div class="rightContents">\
				<img src="'+seg.foto_base_url+'85-55.jpg" class="marginL5 right" />\
				<a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['vediProfilo'];?>
?idu='+seg.id_utente+'"><span class="fBold fontS12 fGreen">'+seg.nome+' '+seg.cognome+'</span></a>\
				<span class="fBold fontS12">'+relativeTime(seg.data)+'</span><br />\
				<span class="fontS14 fGeorgia">'+seg.messaggio+'</span><br />\
				<span class="fontS10 fGreen"><div class="rifiutiSmallIcon auto"></div> '+seg.citta+' - '+seg.indirizzo+' '+seg.civico+'</span>\
			</div>\
		</div>';

	$('#ultimeSegnalazioni').prepend(segnalazioneHTML);
	$('#segnalazione_'+seg.id_segnalazione).slideToggle("slow");
	$('#segnalazione_'+ultime_segnalazioni[ultime_segnalazioni.length-1].id_segnalazione).slideToggle("slow", function() {
		$('#segnalazione_'+ultime_segnalazioni[ultime_segnalazioni.length-1].id_segnalazione).remove();
		ultime_segnalazioni.pop();
	});

	

}


function toggle_associazione() {

  if ($('#regAssociazione').is(':checked')) {
  	$('#regNomeAssociazione').removeAttr('disabled');
  } else {
		$('#regNomeAssociazione').attr('disabled', true);
  }   

}


window.onload=function() {
	$('.segnListaText').ThreeDots({ max_rows:2 });
	addListeners (controlFields);
	
	du_map.init('#map_canvas_list',initialLocation,zoom);
	
	segnalazioni_first_load();

	$( "#listaSegnFiltersCategoria" ).buttonset();
	
	$( "#listaSegnFilters" ).show();
	
	//interval = setInterval ( "segnalazione_nuova_get()", 30000 );
}

</script>

<div class="demo-description" id="modalControlli">
</div>


<?php $_template = new Smarty_Internal_Template("includes/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
