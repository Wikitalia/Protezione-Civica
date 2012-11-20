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

{include file="includes/header.tpl"}




		<div id="bodyPrehome">

			<div id="topIntro" class="textJustify">
				Le foto dei danni, le richieste e le offerte di aiuto, le strutture di emergenza e le buone pratiche di chi ha trovato un modo intelligente e generoso di affrontare il dopo terremoto: la mappa della protezione civica è tutto questo. Un contenitore per tutte le vostre segnalazioni georeferenziate in modo da tenere sempre un faro acceso sull'Emilia e contribuire ad una ricostruzione trasparente e partecipata delle zone colpite dal sisma. 
			</div>	

			<div id="mapContainerSmall">
				<div class="mapControls">
					<img src="{$settings.sito.url}images/iconFullScreenOn.png" alt="" id="fullScreenOn" />
					<img src="{$settings.sito.url}images/buttInviaSegnalazione.png" alt="" id="inviaSegnalazioneButton" />
				</div>
				{include file="listaSegnalazioni.tpl"}
			</div>
			
			<div id="tipoSegnalazione" class="none">
				Cosa vuoi segnalare?<br /><br />
				<img src="{$settings.sito.url}images/inviaBuonaPratica.png" alt="Invia buona pratica" onclick="location.href='{$settings.sito.inviaBuonaPratica}'" />
				<img src="{$settings.sito.url}images/inviaSegnalazione.png" alt="Invia buona pratica" onclick="location.href='{$settings.sito.inviaSegnalazione}'" />
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
			
			{if !$user}
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
			{else}
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
			{/if}
			
			
			
			
			<div id="midBoxes">
				
				<h4 class="fBlue padd0 margin0 marginT15 marginB5">
					Ultime Segnalazioni
				</h4>
				<div id="ultimeSegnalazioni">
				
				<script>
				var ultime_segnalazioni = new Array();
				</script>
				
				{foreach name="ultime_segnalazioni" from=$ultime_segnalazioni item=segnalazione}
				
					<div id="segnalazione_{$segnalazione.id_segnalazione}" class="ultimeSegnalazioni {if !$smarty.foreach.ultime_segnalazioni.last}borderBDashed{else}margin0 padd0{/if}">
					<img src="{$settings.sito.url}{$segnalazione.foto_base_url}85-55.jpg" class="marginR5 left" style="z-index:1000;" />
					<div class="closeIcon right marginB5" id="closeIcon_{$segnalazione.id_segnalazione}"></div>
					<span class="fontS10">{$segnalazione.data|ConvertitoreData_UNIXTIMESTAMP_IT}</span> - 
					<span class="marginT5 fontS10">{$segnalazione.indirizzo} {$segnalazione.civico}, {$segnalazione.cap} {$segnalazione.citta}</span><br />
					<span class="fontS14 fGeorgia">{$segnalazione.messaggio|truncate:130:"..."}</span> - <a href="{$segnalazione.url}" class="fontS10">Vedi dettagli</a><br />

					<div style="display:none;" id="dialog-confirm_{$segnalazione.id_segnalazione}" title="">
					<p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span><span id="testoBoxConferma_{$segnalazione.id_segnalazione}"></span></p>
					</div>


					<script>
					
						function segnalazioneElimina(id) {

							$.ajax({
							  url: '{$settings.sito.url}ajax/segnalazione_elimina.php?id='+id,
							  success: function(data) {
									if (data == "1") {
									  $('#segnalazione_'+id).remove();
									}
							  }
							});
						
						}


						function segnalazioneImpropria(ids,idu) {
						
							$.ajax({
							  url: '{$settings.sito.url}ajax/segnalazione_impropria.php?ids='+ids+'&idu='+idu,
							  success: function(data) {
									if (data == "1") {
									  alert('Grazie per il tuo contributo!');
									}
							  }
							});
						
						}


					
						var seg = new Array();
						seg['data'] = {$segnalazione.data};
						seg['id_segnalazione'] = {$segnalazione.id_segnalazione};
						ultime_segnalazioni.push(seg);
						
						{if $user}
							{if $user.id_utente == $segnalazione.id_utente}
								
								$('#closeIcon_{$segnalazione.id_segnalazione}').click(function(){

									$('#testoBoxConferma_{$segnalazione.id_segnalazione}').html('{#eliminaSegnMex#}');
							
									$( "#dialog-confirm_{$segnalazione.id_segnalazione}").dialog({
										resizable: false,
										movable: false,
										height:200,
										width:300,
										modal: true,
										title: '{#eliminaSegnTitle#}',
										buttons: {
											"{#procedi#}": function() {
												segnalazioneElimina({$segnalazione.id_segnalazione});
												$( this ).dialog( "close" );
											},
											"{#annulla#}": function() {
												$( this ).dialog( "close" );
											}
										}
									});
							
								});
								
							{else}
							
								$('#closeIcon_{$segnalazione.id_segnalazione}').click(function(){

									$('#testoBoxConferma_{$segnalazione.id_segnalazione}').html('{#segnalaSegnMex#}');
							
									$( "#dialog-confirm_{$segnalazione.id_segnalazione}").dialog({
										resizable: false,
										movable: false,
										height:200,
										width:300,
										modal: true,
										title: '{#segnalaSegnTitle#}',
										buttons: {
											"{#procedi#}": function() {
												segnalazioneImpropria({$segnalazione.id_segnalazione},{$user.id_utente});
												$( this ).dialog( "close" );
											},
											"{#annulla#}": function() {
												$( this ).dialog( "close" );
											}
										}
									});
							
								});
								
							{/if}
						{else}
							$('#closeIcon_{$segnalazione.id_segnalazione}').click(function(){
							
								$('#testoBoxConferma_{$segnalazione.id_segnalazione}').html('E\' necessario essere utenti registrati per effettuare questa operazione');
						
								$( "#dialog-confirm_{$segnalazione.id_segnalazione}").dialog({
									resizable: false,
									movable: false,
									height:200,
									width:300,
									modal: true,
									title: 'Registrazione necessaria',
									buttons: {
										"{#annulla#}": function() {
											$( this ).dialog( "close" );
										}
									}
								});
						
							});
						{/if}
						
	
							
						
						
					</script>
					
					</div>
					
					

					
					
					
					{/foreach}
					
				</div>
			</div>
	
			

			</div>
			






<script>

window.onload=function() {
	du_map.init('#map_canvas_list',initialLocation,zoom);
	segnalazioni_first_load();
	$( "#listaSegnFiltersCategoria" ).buttonset();
	$( "#listaSegnFilters" ).show();
	$('.segnListaText').ThreeDots({ max_rows:2 });
}


</script>

<div class="demo-description" id="modalControlli">
</div>


{include file="includes/footer.tpl"}
