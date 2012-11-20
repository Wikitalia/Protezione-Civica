<?php /* Smarty version Smarty-3.0.7, created on 2012-06-20 20:24:34
         compiled from "/var/www/protezionecivica/templates/includes/segnalazioni.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5946169854fe215625234a4-46332730%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da3a13ecc5821a7c9932be1947366c2a09ae097d' => 
    array (
      0 => '/var/www/protezionecivica/templates/includes/segnalazioni.tpl',
      1 => 1340216673,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5946169854fe215625234a4-46332730',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<?php if ($_smarty_tpl->getVariable('page')->value=="dettaglioSegnalazione"){?>
<!-- Place this tag in your head or just before your close body tag -->
<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
  { lang: 'it' }
</script>
<?php }?>

<div id="segnalazioniElenco">
</div>

<script>

// Inizializzazioni elenco
var segnalazioni=[];
var segnalazioni_nuove=[];
var segnalazioni_vecchie=[];
var numero_nuove_segnalazioni = 0;
var newest = 0;
var oldest = 0;
var lock = 1;
var max_commenti = 3;
var modalMap;
var modalMarker;
var modalTimer;
var modalMapToggleDuration = 250;
var sito_url = '<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
';
<?php if ($_smarty_tpl->getVariable('user')->value){?>
var logged_in = true;
<?php }else{ ?>
var logged_in = false;
<?php }?>
function segnalazioni_first_load() {
	
	//json_segnalazioni = jQuery.quoteString(json_segnalazioni);
	var segnalazioni_obj = jQuery.secureEvalJSON(json_segnalazioni);

	newest = segnalazioni_obj[0].last_edit;
	oldest = segnalazioni_obj[segnalazioni_obj.length-1].last_edit;
	segsel = segnalazioni_obj[0].id_segnalazione;
	
	//alert(segnalazioni_obj.length);

	for (i in segnalazioni_obj) {
		//alert(i);
		//if (segnalazioni_obj[i].id_segnalazione == 4564) alert(i);
	//for (i=0;i<segnalazioni_obj.length;i++) {
		segnalazioni[segnalazioni_obj[i].id_segnalazione] = segnalazioni_obj[i];
		aggiungi_segnalazione_lista('append', segnalazioni_obj[i]);
	}

	$('.segnalazione_titolo').ThreeDots({ max_rows:1 });
	
	<?php if ($_smarty_tpl->getVariable('page')->value=='principale'||$_smarty_tpl->getVariable('page')->value=='vediProfilo'){?>
	//alert(segnalazioni_obj.length);
	if (segnalazioni_obj.length == settings_limit_numero) {
		segnalazioniVecchieLoad = '<div id="segnalazioniVecchieLoad" class="" onclick="segnalazioni_vecchie_get();">Segnalazioni precedenti</div>';
		$('#segnalazioniElenco').append(segnalazioniVecchieLoad);
	}
	<?php }?>
	
	lock = 0;

}


function aggiungi_segnalazione_lista(posizione, segnalazione) {

	var stato = '';

	if (segnalazione['stato'] >= 300) {
		stato = 'SEGNALAZIONE RISOLTA';
		coloreStato = 'Green';
		img_stato = 'DU_img_risolta.png';
  } else if (segnalazione['stato'] >= 200) {
	  stato = 'SEGNALAZIONE IN CARICO';
	  coloreStato = 'Red';
	  img_stato = 'DU_img_carico.png';
  } else {
	  stato = 'SEGNALAZIONE IN ATTESA';
	  coloreStato = 'Grey';
	  img_stato = 'DU_img_attesa.png';
	}
	
	//alert(segnalazione.foto);
	
	if (segnalazione.testo_twitter_competenza && segnalazione.testo_twitter_competenza != '')
		twit = '#decorourbano : #'+segnalazione.tipo_nome+' #'+segnalazione.citta+' '+segnalazione.testo_twitter_competenza+' WeDU';
	else
		twit = '#decorourbano : #'+segnalazione.tipo_nome+' #'+segnalazione.citta+' WeDU';

	segnalazioneListaHTML='\
		<div style="display:none;">'+segnalazione.url+'</div>\
		<div id="segnalazione_'+segnalazione.id_segnalazione+'" class="testoFumetto">\
		<div class="segnUtente">\
		<div class="auto left">Inserito da: <span class="fBold">'+segnalazione.nome+' '+segnalazione.cognome;
		if (segnalazione.id_ruolo == 3) segnalazioneListaHTML+=' <span class="auto marginT5 fontS10 fLightGray">(Account verificato)</span>';
		segnalazioneListaHTML+='</span></div>\
			<div class="auto right"><?php if ($_smarty_tpl->getVariable('page')->value=="dettaglioSegnalazione"){?><g:plusone size="medium" href="'+segnalazione.url+'"></g:plusone><?php }?></div>\
      <div class="auto right" style="width:120px"><fb:share-button href="'+segnalazione.url+'" type="button_count"></fb:like></div>\
			<div class="auto right"><a href="http://twitter.com/share" class="twitter-share-button" data-url="'+segnalazione.url+'" data-text="'+twit+'" data-count="horizontal">Tweet</a>\<script type="text/javascript" src="http://platform.twitter.com/widgets.js"\>\</script\></div>\
		</div>\
		<div>\
			<div class="segnDettagli">\
				<div class="segnDettagliLeft">\
					<div class="marginB5 fontS12">'+segnalazione.indirizzo+' '+segnalazione.civico+', '+segnalazione.cap+' '+segnalazione.citta+'</div>\
					<div class="fontS18 marginB5 fGeorgia">'+segnalazione.messaggio+'</div>';
					if (segnalazione.genere != 'buone-pratiche')
						segnalazioneListaHTML += '<div class="fontS10 marginB5" style="float:left;width:180px;"><?php echo $_smarty_tpl->getConfigVariable('categoria');?>
: '+segnalazione.tipo_nome+' - '+segnalazione.tag_nome+'</div>\
				</div>\
				<div class="segnDettagliRight">\
					<div class="auto right textRight">\
						<div class="marginT5 textRight marginB5">';
						if (segnalazione.id_competenza) {
							segnalazioneListaHTML += '<span>'+segnalazione.testo_competenza+'</span>\
							<img src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/loghi_competenze/'+segnalazione.nome_url_competenza+'.png" />';
						}
						segnalazioneListaHTML += '</div>\
					</div>\
				</div>';
		/*if (segnalazione.genere != 'buone-pratiche') {
			segnalazioneListaHTML+='<div style="width:100%" id="infoSegnalazione">\
				<div id="statoSegnalazione" class="f'+coloreStato+'"><img src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
/images/'+img_stato+'" alt="Stato Segnalazione" class="imgStato">'+stato+' <a href="#"  title="Cosa significa in carico?" id="b_c"></a>';
			if (segnalazione.id_ente > 0) segnalazioneListaHTML+='<br />Inoltrata a: "'+segnalazione.nome_ente+'"';
					segnalazioneListaHTML+='</div>\
					<div id="doIT" style="float:right;display:block;margin-right:30px;"><div class="doITsubscrive">Sottoscrivi:</div>';
			if (!logged_in) {
				segnalazioneListaHTML+='<div id="followButtonDiv_'+segnalazione.id_segnalazione+'" class="doITfollow"><a id="followButton_'+segnalazione.id_segnalazione+'" href="javascript:alert(\'È necessario effettuare il login per sottoscrivere una segnalazione\');"></a></div>';
			} else {
				if (!segnalazione.logged_user_following) {
					segnalazioneListaHTML+='<div id="followButtonDiv_'+segnalazione.id_segnalazione+'" class="doITfollow"><a id="followButton_'+segnalazione.id_segnalazione+'" href="javascript:segnalazioneFollow('+segnalazione.id_segnalazione+');"></a></div>';
				} else {
					segnalazioneListaHTML+='<div id="followButtonDiv_'+segnalazione.id_segnalazione+'" class="doITunfollow"><a id="followButton_'+segnalazione.id_segnalazione+'" href="javascript:segnalazioneUnFollow('+segnalazione.id_segnalazione+');"></a></div>';
				}
			}
			segnalazioneListaHTML+='\
			<span id="nFollower_'+segnalazione.id_segnalazione+'">'+segnalazione.n_follower+'</span></div>';
		}*/
		segnalazioneListaHTML+='</div>\
		</div>\
		<div class="segnListaBody">\
		<?php if ($_smarty_tpl->getVariable('user')->value){?>
			<div class="closeIcon right" style="position:relative; z-index:10000; right:-5px;" id="closeIcon_'+segnalazione.id_segnalazione+'">\
			</div>\
		<?php }?>
			<div class="marginB15">';
			if (segnalazione.foto == 1) {
				segnalazioneListaHTML+='<div class="segnImmagini" id="segnImmagini_'+segnalazione.id_segnalazione+'" onclick="showModal('+segnalazione.id_utente+', '+segnalazione.id_segnalazione+',\''+segnalazione.foto_base_url+'\');">\
					<div class="auto marginR10"><img src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
'+segnalazione.foto_base_url+'585-440.jpg" /></div>\
				</div>\
				<div style="width:315px;height:440px;float:right; margin-right:12px;"  id="mini_mappa_'+segnalazione.id_segnalazione+'"></div>';
			} else {
				segnalazioneListaHTML+='<div style="width:100%;height:440px;float:right; margin-right:12px;"  id="mini_mappa_'+segnalazione.id_segnalazione+'"></div>';
			}
			segnalazioneListaHTML+='</div>';
			if (segnalazione.commenti && segnalazione.commenti.length > max_commenti) segnalazioneListaHTML+='<div class="commentoBox marginB5">\
			<a id="mostraCommenti" href="javascript:mostra_tutti_commenti('+segnalazione.id_segnalazione+');"><?php echo $_smarty_tpl->getConfigVariable('mostraComm1');?>
 '+segnalazione.commenti.length+' <?php echo $_smarty_tpl->getConfigVariable('mostraComm2');?>
</a></div>';
			segnalazioneListaHTML+='<div id="segnalazione_commenti_'+segnalazione.id_segnalazione+'"></div>\
			<?php if ($_smarty_tpl->getVariable('user')->value){?>\
			<div class="commentoBox">';
		if ('<?php echo $_smarty_tpl->getVariable('user')->value['id_ruolo'];?>
' == '3')
			segnalazioneListaHTML+='<div class="commentoFumettoBoxComune">\
			<img src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/commentFumettoComune.png" class="commentFumettino" />';
		else
			segnalazioneListaHTML+='<div class="commentoFumettoBox">\
			<img src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/commentFumetto.png" class="commentFumettino" />';
		segnalazioneListaHTML+='\
					<form onsubmit="return false;"><textarea id="commento_segnalazione_'+segnalazione.id_segnalazione+'" placeholder="Scrivi commento..."></textarea></form>\
				</div>\
			</div>\
			<?php }else{ ?>\
			<div class="commentoBox fontS10">\
				<span class="marginL40">Solo gli utenti registrati possono inviare commenti</span>\
			</div>\
			<?php }?>\
		</div>\
		<div style="display:none;" id="dialog-confirm_'+segnalazione.id_segnalazione+'" title="">\
		<p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span><span id="testoBoxConferma_'+segnalazione.id_segnalazione+'"></span></p>\
		</div>\
	</div>';

	if (posizione == 'append') $('#segnalazioniElenco').append(segnalazioneListaHTML);
	else if (posizione == 'prepend') $('#segnalazioniElenco').prepend(segnalazioneListaHTML);

	if (segnalazione.commenti)
		for (i=0;i<max_commenti && i<segnalazione.commenti.length;i++) {
			aggiungi_commento_lista('prepend', segnalazione.id_segnalazione, segnalazione.commenti[i]);
		}
	
	<?php if ($_smarty_tpl->getVariable('user')->value){?>
	if (<?php echo $_smarty_tpl->getVariable('user')->value['id_utente'];?>
 == segnalazione.id_utente) {
		
		$('#closeIcon_'+segnalazione.id_segnalazione).click(function(){
		
			$('#testoBoxConferma_'+segnalazione.id_segnalazione).html('<?php echo $_smarty_tpl->getConfigVariable('eliminaSegnMex');?>
');

			$( "#dialog-confirm_"+segnalazione.id_segnalazione ).dialog({
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
						segnalazioneElimina(segnalazione.id_segnalazione);
						$( this ).dialog( "close" );
					},
					"<?php echo $_smarty_tpl->getConfigVariable('annulla');?>
": function() {
						$( this ).dialog( "close" );
					}
				}
			});
	
		});
	} else {
		$('#closeIcon_'+segnalazione.id_segnalazione).click(function(){
		
			$('#testoBoxConferma_'+segnalazione.id_segnalazione).html('<?php echo $_smarty_tpl->getConfigVariable('segnalaSegnMex');?>
');

			$( "#dialog-confirm_"+segnalazione.id_segnalazione ).dialog({
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
						segnalazioneImpropria(segnalazione.id_segnalazione,<?php echo $_smarty_tpl->getVariable('user')->value['id_utente'];?>
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
	}

	$("#commento_segnalazione_"+segnalazione.id_segnalazione).keyup(
		function(event) {
			if (event.keyCode == '13' && !event.shiftKey) {
				aggiungi_commento(segnalazione.id_segnalazione,<?php echo $_smarty_tpl->getVariable('user')->value['id_utente'];?>
);
			} else if (event.keyCode == '13' && event.ctrlKey) {
				$("#commento_segnalazione_"+segnalazione.id_segnalazione).val($("#commento_segnalazione_"+segnalazione.id_segnalazione).val()+'\n');
			}
		}
	);
	<?php }?>

	FB.XFBML.parse(document.getElementById('segnalazioniElenco'));

	mappa_init(segnalazione,14);

}
/*
 modificato da fabrizio #31082011
  
 per aggiungere lo stile del comune aggiungere 'Comune' nelle seguenti classi:
 class="commentoFumettoBox" quindi diventa class="commentoFumettoBoxComune"
 
 e nell'img src
 
 img src="/images/commentFumetto.png" diventa img src="/images/commentFumettoComune.png"
*/
function aggiungi_commento_lista(posizione, ids, commento) {

	commentoHTML='\
	<div class="commentoBox" id="commento_'+commento.id_commento+'">';
	
	if (commento.id_ruolo == 3)
		commentoHTML+='<div class="commentoFumettoBoxComune">\
		<img src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/commentFumettoComune.png" class="commentFumettino" />';
	else
		commentoHTML+='<div class="commentoFumettoBox">\
		<img src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/commentFumetto.png" class="commentFumettino" />';
	
	commentoHTML+=commento.nome+' '+commento.cognome+' ';
	if (commento.id_ruolo == 3)
		commentoHTML+='<span class="auto marginT5 fontS10 fLightGray">(Account verificato)</span> ';
	commentoHTML+='<span id="commento_data_'+ids+'_'+commento.id_commento+'" class="auto marginT5 fontS10 fLightGray">('+relativeTime(commento.data)+')</span>\
			<?php if ($_smarty_tpl->getVariable('user')->value){?>
				<div class="closeIcon right marginB5" id="closeIconCommento_'+commento.id_commento+'">\
				</div>\
			<?php }?>
			<div class="marginT5">'+commento.commento+'</div>\
		</div>\
	</div>\
	<div style="display:none;" id="dialog-confirmCommento_'+commento.id_commento+'" title="">\
	<p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span><span id="testoBoxConfermaCommento_'+commento.id_commento+'"></span></p>\
	</div>';

	if (posizione == 'append') $('#segnalazione_commenti_'+ids).append(commentoHTML);
	else if (posizione == 'prepend') $('#segnalazione_commenti_'+ids).prepend(commentoHTML);
	
	
	<?php if ($_smarty_tpl->getVariable('user')->value){?>
	if (<?php echo $_smarty_tpl->getVariable('user')->value['id_utente'];?>
 == commento.id_utente) {
		
		$('#closeIconCommento_'+commento.id_commento).click(function(){
		
			$('#testoBoxConfermaCommento_'+commento.id_commento).html('<?php echo $_smarty_tpl->getConfigVariable('eliminaCommMex');?>
');

			$("#dialog-confirmCommento_"+commento.id_commento).dialog({
				resizable: false,
				movable: false,
				height:200,
				width:300,
				modal: true,
				title: '<?php echo $_smarty_tpl->getConfigVariable('eliminaCommTitle');?>
',
				buttons: {
					"<?php echo $_smarty_tpl->getConfigVariable('procedi');?>
": function() {
						commentoElimina(commento.id_commento);
						$( this ).dialog( "close" );
					},
					"<?php echo $_smarty_tpl->getConfigVariable('annulla');?>
": function() {
						$( this ).dialog( "close" );
					}
				}
			});
	
		});
	} else {
		$('#closeIconCommento_'+commento.id_commento).click(function(){
		
			$('#testoBoxConfermaCommento_'+commento.id_commento).html('<?php echo $_smarty_tpl->getConfigVariable('segnalaCommMex');?>
');

			$("#dialog-confirmCommento_"+commento.id_commento).dialog({
				resizable: false,
				movable: false,
				height:200,
				width:300,
				modal: true,
				title: '<?php echo $_smarty_tpl->getConfigVariable('segnalaCommTitle');?>
',
				buttons: {
					"<?php echo $_smarty_tpl->getConfigVariable('procedi');?>
": function() {
						commentoImproprio(commento.id_commento,<?php echo $_smarty_tpl->getVariable('user')->value['id_utente'];?>
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
	}
	<?php }?>

}

function mappa_init(segnalazione, zoom) {

	//alert(dump(segnalazione));

	var posizione = new google.maps.LatLng(segnalazione.lat, segnalazione.lng);
	var selector = '#mini_mappa_'+segnalazione.id_segnalazione;
	
	var mapTypeIds = [];
  for(var type in google.maps.MapTypeId) {
      mapTypeIds.push(google.maps.MapTypeId[type]);
  }
  mapTypeIds.push("OSM");

	var mapOptions = {
		zoom: zoom,
		center: posizione,
		//mapTypeId: google.maps.MapTypeId.ROADMAP,
		mapTypeId: "OSM",
    mapTypeControlOptions: {
        mapTypeIds: mapTypeIds
    },
		disableDefaultUI: true
	};
	
	var map = new google.maps.Map($(selector)[0], mapOptions);

  map.mapTypes.set("OSM", new google.maps.ImageMapType({
      getTileUrl: function(coord, zoom) {
          return "http://tile.openstreetmap.org/" + zoom + "/" + coord.x + "/" + coord.y + ".png";
      },
      tileSize: new google.maps.Size(256, 256),
      name: "OpenStreetMap",
      maxZoom: 18
  }));

  var image = new google.maps.MarkerImage('<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
'+segnalazione.marker,
    new google.maps.Size(30, 48),
    new google.maps.Point(0,0),
    new google.maps.Point(15, 48));
	
	var marker = new google.maps.Marker({
	  position: posizione,
	  map: map,
	  icon: image
	  //animation: google.maps.Animation.DROP
	});

}

function mostra_tutti_commenti(id) {

	$('#mostraCommenti').hide();

	for (i=max_commenti;i<segnalazioni[id].commenti.length;i++) {
		aggiungi_commento_lista('prepend', id, segnalazioni[id].commenti[i]);
	}

}

function segnalazioni_nuove_get() {

	if (!lock) {
		lock = 1;

		aggiorna_date();
	

		//newest = 1306078360;

		$.ajax({
		<?php if ($_smarty_tpl->getVariable('page')->value=='principale'){?>
			url: '<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
ajax/segnalazioni_get.php?idu=<?php echo $_smarty_tpl->getVariable('user')->value['id_utente'];?>
&t_newer='+newest+'&c=1&w=1',
		<?php }elseif($_smarty_tpl->getVariable('page')->value=='vediProfilo'){?>
			url: '<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
ajax/segnalazioni_get.php?idu=<?php echo $_smarty_tpl->getVariable('user_profile')->value['id_utente'];?>
&t_newer='+newest+'&c=1',
		<?php }?>
		
			dataType: "json",
			success: function(seg) {
				if (seg) {
					for (i in seg) {
						segnalazioni_nuove = seg;
					}
					numero_nuove_segnalazioni = seg.length;
					mostra_nuove_contatore(numero_nuove_segnalazioni);
				}
			},
			complete: function(seg) {
				lock = 0;
			}
		});
	}

}

function mostra_nuove_contatore(n) {

	if ($('#segnalazioniNuoveContatore').length == 0) {

		segnalazioniNuoveContatore = '<div id="segnalazioniNuoveContatore" class="" style="display:none;">&nbsp;</div>';

		$('#segnalazioniElenco').prepend(segnalazioniNuoveContatore);
		$('#segnalazioniNuoveContatore').toggle("blind",{},1000);
		//$('#segnalazioniNuoveContatore').css('display', 'block').slideToggle("slow");
		//$('#segnalazioniNuoveContatore').slideDown('slow');
		//$('#segnalazioniNuoveContatore').effect("blind",{},1000);				
		
		$('#segnalazioniNuoveContatore').click(
			function () {
				mostra_nuove();
			}
		);
	}
	
	$('#segnalazioniNuoveContatore').html(n+' nuove segnalazioni');

}

function mostra_nuove() {

	aggiorna_date();

	//$('#segnalazioniNuoveDivisore').remove();
	$('#segnalazioniNuoveContatore').remove();
	//segnalazioniNuoveDivisore = '<div id="segnalazioniNuoveDivisore"></div>';
	//$('#segnalazioniLista').prepend(segnalazioniNuoveDivisore);
	
	newest = segnalazioni_nuove[0].last_edit;
	segnalazioni_nuove.reverse();

	for (i in segnalazioni_nuove) {
		segnalazioni[segnalazioni_nuove[i].id_segnalazione] = segnalazioni_nuove[i];
		aggiungi_segnalazione_lista('prepend', segnalazioni_nuove[i]);
		//$("#segnalazione_"+segnalazioni_nuove[i].id_segnalazione).addClass('segnListaBoxNew');
	}

	segnalazioni_nuove=[];
	numero_nuove_segnalazioni = 0;

}

function segnalazioni_vecchie_get() {

	if (!lock) {
		lock = 1;

		$('#segnalazioniVecchieLoad').remove();
		aggiorna_date();
	
		//newest = 0;

		$.ajax({
		<?php if ($_smarty_tpl->getVariable('page')->value=='principale'){?>
			url: '<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
ajax/segnalazioni_get.php?idu=<?php echo $_smarty_tpl->getVariable('user')->value['id_utente'];?>
&t_old='+oldest+'&l='+settings_limit_numero+'&c=1?w=1',
		<?php }elseif($_smarty_tpl->getVariable('page')->value=='vediProfilo'){?>
			url: '<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
ajax/segnalazioni_get.php?idu=<?php echo $_smarty_tpl->getVariable('user_profile')->value['id_utente'];?>
&t_old='+oldest+'&l='+settings_limit_numero+'&c=1',
		<?php }?>
			dataType: "json",
			success: function(seg) {

				if (seg) {
					for (i in seg) {
						segnalazioni_vecchie = seg;
					}
					mostra_vecchie();
					$('.segnalazione_titolo').ThreeDots({ max_rows:1 });
				}
			},
			complete: function(seg) {
				lock = 0;
			}
		});
	}
}

function mostra_vecchie() {

	aggiorna_date();
	
	//alert(segnalazioni_vecchie.length);
	oldest = segnalazioni_vecchie[segnalazioni_vecchie.length-1].last_edit;
	if (!newest) newest = segnalazioni_vecchie[0].last_edit;

	for (i in segnalazioni_vecchie) {
		segnalazioni[segnalazioni_vecchie[i].id_segnalazione] = segnalazioni_vecchie[i];
		aggiungi_segnalazione_lista('append', segnalazioni_vecchie[i]);
	}

	if (segnalazioni_vecchie.length == settings_limit_numero) {
		segnalazioniVecchieLoad = '<div id="segnalazioniVecchieLoad" class="" onclick="segnalazioni_vecchie_get();">Segnalazioni precedenti</div>';
		$('#segnalazioniElenco').append(segnalazioniVecchieLoad);
	}
	
	segnalazioni_vecchie=[];

}

function aggiungi_commento(ids,idu) {

	aggiorna_date();

	commento = $('#commento_segnalazione_'+ids).val();
	var tmp = document.createElement("DIV");
	tmp.innerHTML = commento;
	commento = $(tmp).text();

	if (commento != '')
		$.ajax({
			type: "POST",
		  url: '<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
ajax/segnalazione_commento_add.php',
		  data: 'ids='+ids+'&idu='+idu+'&commento='+commento,
		  success: function(data) {
				if (data != "0") {
				
					data_commento=new Date();
					var comm_new = { "id_utente":"<?php echo $_smarty_tpl->getVariable('user')->value['id_utente'];?>
", "id_commento":data, "commento":commento, "data":data_commento/1000, "nome":"<?php echo $_smarty_tpl->getVariable('user')->value['nome'];?>
", "cognome":"<?php echo $_smarty_tpl->getVariable('user')->value['cognome'];?>
", "avatar":"<?php echo $_smarty_tpl->getVariable('user')->value['avatar'];?>
", "id_ruolo":"<?php echo $_smarty_tpl->getVariable('user')->value['id_ruolo'];?>
"};
	
					aggiungi_commento_lista('append', ids, comm_new);
					
					$("#commento_segnalazione_"+ids).val('');										
					//segnalazioni[ids].commenti.push(comm_new);
				}
		  }
		});
		
	return false;

}

function aggiorna_date() {

	for (i in segnalazioni) {
		$('#segnalazione_data_'+segnalazioni[i].id_segnalazione).html(relativeTime(segnalazioni[i].data));
		
		for (j in segnalazioni[i].commenti) {
			$('#commento_data_'+segnalazioni[i].id_segnalazione+'_'+segnalazioni[i].commenti[j].id_commento).html(relativeTime(segnalazioni[i].commenti[j].data));
		}
		
	}

}

/*segnalazioneEdit(segnalazione.id_segnalazione,campo) {

	// Controllare che l'utente sia autorizzato ad effettuare l'operazione.
	return;

	$.ajax({
		type: "POST",
	  url: '<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
ajax/segnalazione_edit.php',
	  data: 'ids='+ids,
	  success: function(data) {
			if (data == "1") {
				$('#segnalazione_'+ids).remove();
			}
	  }
	});

}*/

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

function segnalazioneFollow(ids) {

	$.ajax({
	  url: '<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
ajax/segnalazione_follow.php?ids='+ids,
	  success: function(data) {
	  	if (data != "-1") {
	  		$('#nFollower_'+ids).html(data);
	  		//$('#followButton_'+ids).html('Un-Follow');
	  		$('#followButton_'+ids).attr("href", "javascript:segnalazioneUnFollow("+ids+")");
			$('#followButtonDiv_'+ids).removeClass('doITfollow').addClass('doITunfollow');
	  	}
	  }
	});

}

function segnalazioneUnFollow(ids) {

	//alert("Non implementato: "+ids);
	//exit;

	$.ajax({
	  url: '<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
ajax/segnalazione_unfollow.php?ids='+ids,
	  success: function(data) {
	  	if (data != "-1") {
	  		$('#nFollower_'+ids).html(data);
	  		//$('#followButton_'+ids).html('Follow');
	  		$('#followButton_'+ids).attr("href", "javascript:segnalazioneFollow("+ids+")");
			$('#followButtonDiv_'+ids).removeClass('doITunfollow').addClass('doITfollow');
	  	}
	  }
	});

}				

function commentoElimina(id) {

	$.ajax({
	  url: '<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
ajax/commento_elimina.php?id='+id,
	  success: function(data) {
			if (data == "1") {
			  $('#commento_'+id).remove();
			}
	  }
	});

}

function commentoImproprio(idc,idu) {

	$.ajax({
	  url: '<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
ajax/commento_improprio.php?idc='+idc+'&idu='+idu,
	  success: function(data) {
			if (data == "1") {
			  alert('Grazie per il tuo contributo!');
			}
	  }
	});

}

function showModal(idu, ids, foto_base_url) {

	$('#modalOuter').css('top','0px');
	$('#modalOuter').css('width',$(window).width()+'px');
	$('#modalOuter').css('height',$(document).height()+'px');
				
	/*var img = document.createElement('img');
	img.src='<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/segnalazioni/'+idu+'/'+ids+'/1.jpeg';
	
	img.onload = function () {
		var imgWidth=img.width;
		var imgHeight=img.height;
		var maxHeight = ($(window).height()-140 > 0)?$(window).height()-140:0;
		if (940/maxHeight > imgWidth/imgHeight) {
			finalWidth=maxHeight*imgWidth/imgHeight;
			$('#modalInner').css('top','70px');
			$('#modalInner').css('left',(($(window).width()-finalWidth)/2)+'px');
			$('#modalInner').css('width',finalWidth+'px');
			$('#modalInner').css('height',maxHeight+'px');
			//$('#modalFotoImg').attr('src', '/resize.php?h='+maxHeight+'&f=/images/segnalazioni/'+idu+'/'+ids+'/1.jpeg');
		} else {
			finalHeight=940*imgHeight/imgWidth;
			$('#modalInner').css('top',70+(maxHeight-finalHeight)/2+'px');
			$('#modalInner').css('left',(($(window).width()-940)/2)+'px');
			$('#modalInner').css('width',940+'px');
			$('#modalInner').css('height',finalHeight+'px');
			//$('#modalFotoImg').attr('src', '/resize.php?w=940&f=/images/segnalazioni/'+idu+'/'+ids+'/1.jpeg');
		}

		$('#modalFoto').append(img);
		
		$('#modalInner').show();
		google.maps.event.trigger(modalMap, "resize");
		modalMap.setCenter(posizione);
	
		modalTimer = setTimeout("hideModalMappa();",3000);

	};*/
	
	var image = $('<img />').attr('src', '<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
'+foto_base_url+'0-0.jpg');
	image.load(function () {
	
		if ($('#modalOuter').is(":visible")) {
		
			var imgWidth=this.width;
			var imgHeight=this.height;
			var maxHeight = ($(window).height()-140 > 0)?$(window).height()-140:0;
			if (940/maxHeight > imgWidth/imgHeight) {
				finalWidth=maxHeight*imgWidth/imgHeight;
				$('#modalInner').css('top','70px');
				$('#modalInner').css('left',(($(window).width()-finalWidth)/2)+'px');
				$('#modalInner').css('width',finalWidth+'px');
				$('#modalInner').css('height',maxHeight+'px');
				$(this).css('width', finalWidth+'px');
				$(this).css('height', maxHeight+'px');
			} else {
				finalHeight=940*imgHeight/imgWidth;
				$('#modalInner').css('top',70+(maxHeight-finalHeight)/2+'px');
				$('#modalInner').css('left',(($(window).width()-940)/2)+'px');
				$('#modalInner').css('width',940+'px');
				$('#modalInner').css('height',finalHeight+'px');
				$(this).css('width', 940+'px');
				$(this).css('height', finalHeight+'px');
			}
	
			$('#modalFoto').append('<div class="bigCloseIcon right" style="position:relative;margin-bottom:-18px;" onclick="hideModal();"></div>');
			$('#modalFoto').append(this);
			
			$('#modalInner').show();
			google.maps.event.trigger(modalMap, "resize");
			modalMap.setCenter(posizione);
		
			modalTimer = setTimeout("hideModalMappa();",3000);
			
		}
		
	});
	

	$('#modalOuter').show();
	

	$('#modalMappaToggle').stop();
	$('#modalMappaMap').stop();
	$('#modalMappa').stop();
	
	if ($('#modalMappaToggle').hasClass('bigLeftArrow')) {
		$('#modalMappaToggle').removeClass('bigLeftArrow');
		$('#modalMappaToggle').addClass('bigRightArrow');
	}
	$('#modalMappaMap').css('width', '330px');
	$('#modalMappa').css('width', '350px');
	$('#modalMappaToggle').css('right', '332px');


  var image = new google.maps.MarkerImage('<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
'+segnalazioni[ids].marker,
    new google.maps.Size(30, 48),
    new google.maps.Point(0,0),
    new google.maps.Point(15, 48));
	
	
	var posizione = new google.maps.LatLng(segnalazioni[ids].lat, segnalazioni[ids].lng);
	
	if (modalMarker) {
		modalMarker.setPosition(posizione);
		modalMarker.setIcon(image);
	} else {
		modalMarker = new google.maps.Marker({
		  position: posizione,
		  map: modalMap,
		  icon: image
		});
	}
	


}

function hideModal() {

	clearTimeout(modalTimer);

	//$('#modalFotoImg').attr('src', '');
	$('#modalFoto').html('');
	
	//hideModalMappa();

	$('#modalOuter').hide();
	$('#modalInner').hide();

}

function toggleModalMappa() {

	if ($('#modalMappaToggle').hasClass('bigRightArrow')) {
		hideModalMappa();
	} else if ($('#modalMappaToggle').hasClass('bigLeftArrow')) {
		showModalMappa();
	}

}

function hideModalMappa() {

	if ($('#modalMappaToggle').hasClass('bigRightArrow')) {
	
		$('#modalMappaMap').animate({
	    width: '0px'
	  }, modalMapToggleDuration, function() {
	  	$('#modalMappaToggle').removeClass('bigRightArrow');
	  	$('#modalMappaToggle').addClass('bigLeftArrow');
	  });
	  
		$('#modalMappa').animate({
	    width: '20px'
	  }, modalMapToggleDuration, function() {

	  });
	  
		$('#modalMappaToggle').animate({
	    right: '2px'
	  }, modalMapToggleDuration, function() {

	  });
	  
	}

}

function showModalMappa() {

	if ($('#modalMappaToggle').hasClass('bigLeftArrow')) {
	
		$('#modalMappaMap').animate({
	    width: '330px'
	  }, modalMapToggleDuration, function() {
			$('#modalMappaToggle').removeClass('bigLeftArrow');
	  	$('#modalMappaToggle').addClass('bigRightArrow');
	  });
	  
		$('#modalMappa').animate({
	    width: '350px'
	  }, modalMapToggleDuration, function() {

	  });
	  
		$('#modalMappaToggle').animate({
	    right: '332px'
	  }, modalMapToggleDuration, function() {

	  });
	  
	}

}

function initModal() {

	modalOuter = '<div id="modalOuter" onclick="hideModal();"></div>';
	
	modalInner = '<div id="modalInner">\
									<div id="modalFoto">\
										<div class="bigCloseIcon right" style="position:relative;margin-bottom:-18px;" onclick="hideModal();"></div>\
									</div>\
									<div id="modalMappa" onclick="toggleModalMappa();">\
									</div>\
									<div id="modalMappaToggle" class="bigRightArrow" style="position:absolute; right:332px; top:170px; z-index:100000;" onclick="toggleModalMappa();"></div>\
									<div id="modalMappaMap"></div>\
									<div style="background:Red;">prova</div>\
								</div>';

	$(document.body).append(modalOuter);
	$(document.body).append(modalInner);
	
	var roma = new google.maps.LatLng(41.893056, 12.482778);
	var selector = '#modalMappaMap';

	var mapTypeIds = [];
  for(var type in google.maps.MapTypeId) {
      mapTypeIds.push(google.maps.MapTypeId[type]);
  }
  mapTypeIds.push("OSM");

	var options = {
		zoom: 14,
		center: roma,
		//mapTypeId: google.maps.MapTypeId.ROADMAP,
		mapTypeId: "OSM",
    mapTypeControlOptions: {
        mapTypeIds: mapTypeIds
    },
		streetViewControl: false
	};
	
	modalMap = new google.maps.Map($(selector)[0], options);
	
  modalMap.mapTypes.set("OSM", new google.maps.ImageMapType({
      getTileUrl: function(coord, zoom) {
          return "http://tile.openstreetmap.org/" + zoom + "/" + coord.x + "/" + coord.y + ".png";
      },
      tileSize: new google.maps.Size(256, 256),
      name: "OpenStreetMap",
      maxZoom: 18
  }));
  
	// Bug fix problema scroll su Firefox
	var oldScrollTop, body = document.documentElement  ||  document.body;
  modalMap.getDiv().addEventListener("DOMMouseScroll", function (e) {
    if (e.axis === e.VERTICAL_AXIS) {
      oldScrollTop = body.scrollTop;
      setTimeout( function () { body.scrollTop = oldScrollTop; } );
    }
  }, true);
	
	google.maps.event.addListener(modalMap, 'click', function() {	
		clearTimeout(modalTimer);
  });
  
	google.maps.event.addListener(modalMap, 'dragstart', function() {
		clearTimeout(modalTimer);
  });
  
	google.maps.event.addListener(modalMap, 'rightclick', function() {
		clearTimeout(modalTimer);
  });	
  
	google.maps.event.addListener(modalMap, 'tilt_changed', function() {
		clearTimeout(modalTimer);
  });
  
	google.maps.event.addListener(modalMap, 'zoom_changed', function() {
		clearTimeout(modalTimer);
  });									

}

window.onload=function() {

	segnalazioni_first_load();
	
	<?php if ($_smarty_tpl->getVariable('page')->value=='principale'||$_smarty_tpl->getVariable('page')->value=='vediProfilo'){?>
	//interval = setInterval ( "segnalazioni_nuove_get()", 1800000);
	//interval = setInterval ( "segnalazioni_nuove_get()", 300000);
	<?php }?>
	
	initModal();
	
}


</script>

