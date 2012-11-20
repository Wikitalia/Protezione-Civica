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
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//IT" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://ogp.me/ns#">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="it" />

<title>Protezione Civica - Mappa delle segnalazioni</title>




<link rel="image_src" type="image/jpeg" href="{$settings.sito.url}images/PCM.jpg" />

{if $page=="vediProfilo" && ($segnalazioni == 'null' || $user_profile.profilo_pubblico == 0)}
<meta name="robots" content="noindex,follow" />
{/if}

<meta name="description" content="{$metaDesc}" />

<meta property="og:title" content="{$pageTitle}" />
<meta property="og:type" content="product" />
<meta property="og:url" content="http://{$smarty.server.SERVER_NAME}{$smarty.server.REQUEST_URI}" />
{if $page=="dettaglioSegnalazione" && $segnalazione_valida}
<meta property="og:image" content="{$settings.sito.url}images/segnalazioni/{$segnalazione.tipo_nome_url}-{$segnalazione.citta_url}-{$segnalazione.indirizzo_url}-{$user_profile.id_utente}-{$ids}-0-0.jpg" />
{else}
<meta property="og:image" content="{$settings.sito.url}images/PCM.jpg" />
{/if}
<meta property="og:description" content="Le foto dei danni, le richieste e le offerte di aiuto, le strutture di emergenza e le buone pratiche di chi ha trovato un modo intelligente e generoso di affrontare il dopo terremoto: la mappa della protezione civica è tutto questo." />
<meta property="og:site_name" content="Protezione Civica{$siteNameTail}" />
<meta property="fb:app_id" content="{$settings.facebook.app_id}" />






<link rel="icon" href="{$settings.sito.url}images/favicon.ico" />

{if $page=="prehome"} 
<link rel="stylesheet" type="text/css" href="{$settings.sito.url}css/prehome.css" />
{/if}



<link rel="stylesheet" type="text/css" href="{$settings.sito.url}css/leftSideBar.css" />

<link rel="stylesheet" type="text/css" href="{$settings.sito.url}css/fileuploader.css" />	
<link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>

<link type="text/css" href="{$settings.sito.url}css/jqueryui/jquery-ui-1.8.12.custom.css" rel="stylesheet" />	
<link rel="stylesheet" type="text/css" href="{$settings.sito.url}css/global.css" />
<link rel="stylesheet" type="text/css" href="{$settings.sito.url}css/globalClass.css" />
<script type="text/javascript" src="{$settings.sito.url}js/jquery-1.5.1.min.js"></script>
<script type="text/javascript" src="{$settings.sito.url}js/jquery-ui-1.8.12.custom.min.js"></script>
<script type="text/javascript" src="{$settings.sito.url}js/jquery.json-2.2.min.js"></script>
<script type="text/javascript" src="{$settings.sito.url}js/jquery.ThreeDots.min.js"></script>
<script type="text/javascript" src="{$settings.sito.url}js/fileuploader.js"></script>
<script type="text/javascript" src="{$settings.sito.url}js/funzioni.js"></script>
<script type="text/javascript" src="{$settings.sito.url}js/Date.extend.js"></script>
<script type="text/javascript" src="{$settings.sito.url}js/Array.extend.js"></script>
<script type="text/javascript" src="{$settings.sito.url}js/controlli.js"></script>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?v=3.2&sensor=false&language=it"></script>

<script type="text/javascript">

	/*function check_fb_status_PHP_JS() {

		FB.getLoginStatus(function(response) {
			if (!response.authResponse) {
				//alert('Discrepanza.');
				if ('{$fb_user}' != '') location.href="{$settings.sito.logout}";
			}
		});
	}*/

	function check_fb_status() {

		FB.getLoginStatus(function(response) {
			if (response.authResponse) {
				{if !$utente_fb_eliminato}
				window.location.reload();
				{/if}
			}
		});
	}
	
	function show_login_dialog() {
	
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
	
	}

</script>

<!--[if IE]>
<link type="text/css" href="{$settings.sito.url}css/ie.css" rel="stylesheet" />	
<![endif]-->


</head>
	
<body>

	{if $page=='prehome'} 
		<div id="mapContainerBig" style="display:none;">
		<div id="mapFilters">
			<div class="marginB5 auto clear">
				<div class="auto clear textLeft">
					<img src="images/iconFullScreenOff.png" alt="Rimpicciolisci mappa" id="fullScreenOff" class="left" />
					<div style="width:125px; height:21px; color:white; font-size:11px; margin-left:6px; padding:5px 0 0 5px;background:url({$settings.sito.url}images/totaleSegnalazioniBackground.png) no-repeat;">
						SEGNALAZIONI
						<div class="auto right marginR5">{$segnalazioni_count}</div>
					</div>
				</div>
				<div class="auto clear textLeft" style="margin:2px 0 0 -2px;">
					<img src="images/buttInviaSegnalazione.png" alt="Invia una segnalazione" id="inviaSegnalazioneButton2" class="buttInviaSegnalazione" />
				</div>
			</div>
			
			<div class="auto clear">
				<h5 class="fontS14 margin0 marginB5 marginT5 textLeft">Categorie</h5>
				<ul>
					<li>
						<img src="{$settings.sito.url}images/catIcons/buone-pratiche.png" alt="" class="left marginR5" />
						<input type="checkbox" id="radioBP" name="tipo" value="BP1" onClick="segnalazioni_filtra();" disabled="true" checked="true"/>
							Buone Pratiche
					</li>
				{foreach from=$tipi item=tipo name="filtri"}
					<li>
						<img src="{$settings.sito.url}images/catIcons/{$tipo.label}.png" alt="" class="left marginR5" />
						<input type="checkbox" id="radio{$tipo.id_tipo}" name="tipo" value="{$tipo.id_tipo}" onClick="segnalazioni_filtra();" checked="true" />
						{$tipo.nome}
					</li>
				{/foreach}
				</ul>
			</div>
		</div>	
		<img src="http://net35.ccs.neu.edu/home/chunzhao/image/wait.gif" id="bigMapLoading" alt="" style="margin-top:20%;" />
		</div>
	{/if}
	{if $page=="dettaglioSegnalazione" && $segnalazione_valida}
	<img src="{$settings.sito.url}images/segnalazioni/{$segnalazione.tipo_nome_url}-{$segnalazione.citta_url}-{$segnalazione.indirizzo_url}-{$user_profile.id_utente}-{$ids}-0-0.jpg" style="display:none;" />
	{else}
	<img src="{$settings.sito.url}images/PCM.jpg" style="display:none;" />
	{/if}
	
<!--
	<div style="position:fixed; 
							cursor:pointer;
							z-index:0;
							top:75px; 
							float:none; 
							width:100%; 
							height:228px; 
							background:url({$settings.sito.url}images/topNews_openSource.png) center top no-repeat;
							{*background:red;*}
							" onClick= "window.open('{$settings.sito.url}blog/2011/10/open-du-apri-tutto/');"></div>
              -->
							
	<div class="marginT5 fOrange" id="msgErrore" style="display:none;"></div>

	<div id="header">
			
				{if !$user}

				<div class="auto left marginL20"><a href="{$settings.sito.url}" style="float:left;"><img src="{$settings.sito.url}images/logo.png" id="logo" alt="{#logoAlt#}" /></a></div>
				<div id="topBox">
					
					
					<div id="loginForm" style="display:none;" class="skinnedForm">
						<div>
							<h4 class="fontS18 margin0 auto left">{#duAccedi#}</h4>
							<div class="closeIcon marginT5 right" onClick="$('#loginForm').dialog('close');"></div>
						</div>
						<p class="fontS16 marginT10 marginB5 fBold">{#accediConFb#}</p>
						<fb:login-button scope="{$settings.facebook.perms}" show-faces="false" max-rows="1" onlogin="check_fb_status();" class="left" autologoutlink="false">
							{#fbAccedi#}
						</fb:login-button> <span class="marginL10 fontS16">{#consigliato#}</span>
						<div class="normalLogin">
						<p class="fontS16 margin0 marginB10 fBold">{#accediConDU#}</p>
							<div style="width:340px;">
								<form method="post">
									<div>
										<input type="text" name="email" value="{if isset($cookie)}{$cookie.user_email}{/if}" placeholder="email" class="marginB5" /> 
										<input type="password" name="password" value="{if isset($cookie)}{$cookie.user_password}{/if}" placeholder="password" /> 
									</div>
									<div class="textLeft marginT10"> 
										<input type="checkbox" name="restaCollegato" id="restaCollegato" style="height:10px;" checked="checked"/> <label class="fontS10" for="restaCollegato">{#restCollegato#}</label> 
										<span class="fontS12 right"><a href="{$settings.sito.passDimenticata}">{#passDimenticata#}</a></span>
									</div>
									<div class="marginB5 marginT10"><input type="submit" name="login_form" value="{#accedi#}" class="right" /></div>
								</form>
							</div>
							<div style="width:200px" class="right fontS12">
								<div class="loginRegister">
									<div class="fontS14 fBold">{#nonDuUser#}</div>
									<div class="marginT10 fontS16 fBold"><a href="{$settings.sito.registrati}" class="tdNone">{#registrati#}</a> <span class="fontS12">{#gratis#}</span></div>
								</div>
							</div>
						</div>
					</div>
					
					<div id="login" style="background:none !important;">
						<div class="fontS12" style="background:none !important;">
							 <a href="javascript:show_login_dialog();" style="background:none !important;">Entra</a> <span class="fWhite">|</span> 
							 <a href="{$settings.sito.registrati}" style="background:none !important;">{#registrati#}</a> <span class="fWhite">|</span> 
								
								<fb:login-button scope="{$settings.facebook.perms}" style="width:72px; height:16px;  margin-top:-3px;" show-faces="false" width="200" max-rows="1" onlogin="check_fb_status();" autologoutlink="false"></fb:login-button>
								
								<div id="fb-root"></div>
								<script src="http://connect.facebook.net/it_IT/all.js" type="text/javascript"></script>
								<script>
									window.fbAsyncInit = function() {
									
										FB.init({
											appId  : '{$settings.facebook.app_id}',
											status : true, // check login status
											cookie : true, // enable cookies to allow the server to access the session
											xfbml  : true, // parse XFBML
											oauth  : true
										});
										
										check_fb_status();
										
									};
								
								</script>
								
						</div>
					</div>
						
						{if $errore_login == 1}
						
						<script>
						
							$('#msgErrore').html('{#loginMexErrore#}');
						
							$('#msgErrore').dialog({
								height: 200,
								width:300,
								modal: true,
								draggable:false,
								resizable:false,
								buttons: {
									Ok: function() {
										$( this ).dialog( "close" );
									}
								}
							});
						
						</script>
						
						{/if}
					
				</div>
				{else}
				
			  <div id="fb-root"></div>
       	<script src="http://connect.facebook.net/it_IT/all.js" type="text/javascript"></script>
       	
       	<script>
       	  window.fbAsyncInit = function() {
						FB.init({
							appId  : '{$settings.facebook.app_id}',
							status : true, // check login status
							cookie : true, // enable cookies to allow the server to access the session
							xfbml  : true, // parse XFBML
							oauth  : true
						});
						
						//check_fb_status_PHP_JS();
						
       		};
       	</script>
				
				<div class="auto left marginL20"><a href="{$settings.sito.url}" style="float:left;"><img src="{$settings.sito.url}images/logo.png" id="logo" alt="{#logoAlt#}" /></a></div>
				<div id="topBox">
					<div id="logout">
						<span class="fontS10">{#bentornato#} <span class="fBold fontS12 paddX5"><a href="{$settings.sito.impostazioni}" class="fWhite">{$user.nome}</a></span> <a href="{$settings.sito.logout}" class="fWhite">Esci</a></span>
					</div>
				</div>
			{/if}
				

	
				
				<script>
				
				function checkGeocode() {
				
					if ($('#ricercaVeloceLat').val() == '' || $('#ricercaVeloceLng').val() == '') {
					
						/*$('#msgErrore').html("{#ricercaMexErrore#}");
					
						$('#msgErrore').dialog({
							height: 200,
							width:300,
							modal: true,
							draggable:false,
							resizable:false,
							buttons: {
								Ok: function() {
									$( this ).dialog( "close" );
								}
							}
						});*/
					
						return false;
					} else return true;
				
				}
				
				var geocoderAutocomplete = new google.maps.Geocoder();
				var res;

				$("#ricercaVeloceField").autocomplete({
		      //This bit uses the geocoder to fetch address values
		      source: function(request, response) {
		        geocoderAutocomplete.geocode( { 'address': request.term + ' Italia'  }, function(results, status) {
		        
		        	if (results.length) {
		        	
		        		// Ho risultati validi, vedo se è una regione o altro
								res = decodeLocationField(results[0]['address_components']);
								
								//alert(results[0]['types'].contains('administrative_area_level_1'));

								if (array_contains(results[0]['types'], 'administrative_area_level_1')) { // Ho una regione
									locality = res['administrative_area_level_1'].long_name;
		          	} else {
		          		locality = res['locality'].long_name;
		          	}
		          	
		          	$("#ricercaVeloceForm").attr("action", "http://"+slug(locality)+".{$settings.sito.dominio}/");
			        	$('#ricercaVeloceLat').val(results[0].geometry.location.lat());
				        $('#ricercaVeloceLng').val(results[0].geometry.location.lng());
				        $('#ricercaVeloceType').val(results[0]['types'][0]);				        
							
							} else {
							
								// Non ho risultati validi (bloccare il submit sarebbe meglio)
								$("#ricercaVeloceForm").attr("action", "");
			        	$('#ricercaVeloceLat').val('');
				        $('#ricercaVeloceLng').val('');
				        $('#ricercaVeloceType').val('');				        
							
							}

		          response(jQuery.map(results, function(item) {
		          
		          	//alert(dump(item['types']));
								
								res = decodeLocationField(item['address_components']);

								if (array_contains(item['types'], 'administrative_area_level_1')) { // Regione
									locality = res['administrative_area_level_1'].long_name;
		          	} else if (array_contains(item['types'], 'locality')) { // Comune
		          		locality = res['locality'].long_name;
		          	} else { // Altro
									locality = res['locality'].long_name;
								}
		          	
		          	//$("#ricercaVeloceForm").attr("action", "http://"+slug(locality)+".{$settings.sito.dominio}/");
			        	//$('#ricercaVeloceLat').val(item.geometry.location.lat());
				        //$('#ricercaVeloceLng').val(item.geometry.location.lng());
		          	
		            return {
		              label:  item.formatted_address,
		              value: item.formatted_address,
		              latitude: item.geometry.location.lat(),
		              longitude: item.geometry.location.lng(),
		              locality: locality,
		              type: item['types'][0]		              
		            }
		          }));

		        })
		      },
		      //This bit is executed upon selection of an address
		      select: function(event, ui) {
		        $('#ricercaVeloceLat').val(ui.item.latitude);
		        $('#ricercaVeloceLng').val(ui.item.longitude);
		        $('#ricercaVeloceType').val(ui.item.type);		        
		        $("#ricercaVeloceForm").attr("action", "http://"+slug(ui.item.locality)+".{$settings.sito.dominio}/");
		        $('#ricercaVeloceForm').submit();
		      }
		    });
				</script>
				
	</div>


	{if $page == 'inviaSegnalazione' || $page == 'inviaBuonaPratica'}
	<div id="loadingInviaSegnalazione" class="loadingMask" style="display:none;" >
		<div class="loadingPopUp">
			<img src="{$settings.sito.url}images/loading.gif" alt="Caricamento...."  /><br /><br />
			<span class="fontS20 marginT10">{#caricamento#}...</span>
		</div>
	</div>
	{/if}
	
	<div class="container" style="position:relative; z-index:10; margin-top:75px;">
        <div id="body">
				
				
				
				
