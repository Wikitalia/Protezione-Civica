<?php

/*
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
 */

/*
 * File di configurazione dell'applicazione. Contiene tutti i parametri configurabili
 * necessari al funzionamento di Decoro Urbano
 */

setlocale(LC_TIME, 'it_IT');
//setlocale(LC_ALL, 'it_IT');

// Parametri DB
$settings['db']['host'] = 'hostingmysql249.register.it';
$settings['db']['db_name'] = 'cf556d997_c71505';
$settings['db']['user'] = 'cf556d997_d89a51';
$settings['db']['pass'] = 'Rivoltana_12';

//Facebook
$settings['facebook']['app_id'] = '394882767216378';
$settings['facebook']['app_secret'] = 'a7acf463c721813cc443828310660e84';
$settings['facebook']['perms'] = 'publish_stream,email';

// Parametri sito
$settings['sito']['dominio'] = 'www.protezionecivica.it';
$settings['sito']['percorso'] = $_SERVER['DOCUMENT_ROOT'].'/mappa/';
$settings['sito']['url_ns'] = 'http://'.$settings['sito']['dominio'].'/mappa';
$settings['sito']['url'] = $settings['sito']['url_ns'].'/';
$settings['sito']['debug'] = 0;
$settings['sito']['hashsalt'] = 'protezionecivicahashmaiora';
$settings['sito']['encrypt_key'] = 'protezionecivicahashmaiora';
$settings['sito']['versione'] = '0.1.0';
$settings['sito']['caratteri_non_ammessi'] = array("<", ">", "@");

// Social 
//$settings['social']['twitter'] = 'http://twitter.com/decorourbano';
$settings['social']['facebook'] = 'http://www.facebook.com/ProtezioneCivica';

// Parametri Apps 
$settings['apps']['iPhone'] = '';
$settings['apps']['android'] = '';
$settings['apps']['WindowsPhone'] = '';
$settings['apps']['currentiPhoneVersion'] = '1.0';
$settings['apps']['currentAndroidVersion'] = '1';
$settings['apps']['currentWindowsPhoneVersion'] = '1.0.0';

// Pagine
$settings['sito']['prehome'] = $settings['sito']['url'];//.'prehome/';
$settings['sito']['modificaProfilo'] = $settings['sito']['url'].'modifica-profilo/';
$settings['sito']['impostazioni'] = $settings['sito']['url'].'impostazioni/';
$settings['sito']['logout'] = $settings['sito']['url'].'logout/';
$settings['sito']['vediProfilo'] = $settings['sito']['url'].'vedi-profilo/';
$settings['sito']['registrati'] = $settings['sito']['url'].'registrati/';
$settings['sito']['confermaRegistrazione'] = $settings['sito']['url'].'conferma-registrazione/';
$settings['sito']['passDimenticata'] = $settings['sito']['url'].'pass-dimenticata/';
$settings['sito']['inviaSegnalazione'] = $settings['sito']['url'].'invia-segnalazione/';
$settings['sito']['inviaBuonaPratica'] = $settings['sito']['url'].'invia-buona-pratica/';
$settings['sito']['listaSegnalazioni'] = $settings['sito']['url'].'lista-segnalazioni/';
$settings['sito']['dettaglioSegnalazione'] = $settings['sito']['url'].'dettaglio-segnalazione/';
$settings['sito']['applicazioni'] = $settings['sito']['url'].'applicazioni/';
$settings['sito']['tos'] = $settings['sito']['url'].'cdu/';
$settings['sito']['privacy'] = $settings['sito']['url'].'privacy/';
$settings['sito']['errore'] = $settings['sito']['url'].'errore/';
$settings['sito']['paginaNonTrovata'] = $settings['sito']['url'].'paginaNonTrovata/';

$settings['sito']['title']['prehome'] = 'La mappa della Protezione Civica';
$settings['sito']['title']['modificaProfilo'] = 'Modifica il tuo profilo';
$settings['sito']['title']['impostazioni'] = 'Impostazioni sulla privacy';
$settings['sito']['title']['vediProfilo'] = 'Profilo utente';
$settings['sito']['title']['registrati'] = 'Inizia ad utilizzare Protezione Civica';
$settings['sito']['title']['passDimenticata'] = 'Password dimenticata';
$settings['sito']['title']['inviaSegnalazione'] = 'Invia una segnalazione';
$settings['sito']['title']['inviaBuonaPratica'] = 'Segnala una buona pratica';
$settings['sito']['title']['listaSegnalazioni'] = 'Tutte le segnalazioni';
$settings['sito']['title']['applicazioni'] = 'Applicazioni smartphone';
$settings['sito']['title']['tos'] = 'Clausole di utilizzo';
$settings['sito']['title']['privacy'] = 'Informativa sulla privacy';
$settings['sito']['title']['errore'] = 'Si è verificato un errore';
$settings['sito']['title']['paginaNonTrovata'] = 'Pagina non trovata';

// Login/Logout
$settings['sito']['login_url'] = $settings['sito']['url'];
$settings['sito']['logout_url'] = $settings['sito']['url'];

// Link esterni
//$settings['sito']['ideascale'] = 'http://idee.'.$settings['sito']['dominio'].'/';
$settings['sito']['wikitalia'] = 'http://www.wikitalia.it';

// Autorizzazioni di accesso per le singole pagine
// '<nome_pagina>' => array{<utente_non_loggato>, <utente_loggato>, <admin>}
// utente_non_loggato -> 1: autorizzato; 0: non autorizzato
// utente_loggato -> 1: autorizzato; 0: non autorizzato
// admin -> 1: autorizzato; 0: non autorizzato
$auth = array(
	'prehome' => array(1, 1, 1),
	'modificaProfilo' => array(0, 1, 1),
	'impostazioni' => array(0, 1, 1),
	'logout' => array(0, 1, 1),
	'vediProfilo' => array(1, 1, 1),
	'registrati' => array(1, 1, 1),
	'confermaRegistrazione' => array(1, 1, 1),
	'passDimenticata' => array(1, 1, 1),
	'inviaSegnalazione' => array(0, 1, 1),
	'inviaBuonaPratica' => array(0, 1, 1),
	'listaSegnalazioni' => array(1, 1, 1),
	'dettaglioSegnalazione' => array(1, 1, 1),
	'applicazioni' => array(1, 1, 1),
	'tos' => array(1, 1, 1),
	'privacy' => array(1, 1, 1),
	'confermaRegistrazione' => array(1, 1, 1),
	'errore' => array(1,1,1),
	'paginaNonTrovata' => array(1,1,1)
);

// Parametri segnalazioni
$settings['client']['nome'] = 'Segnalazione Web';
$settings['client']['versione'] = $settings['sito']['versione'];

// Parametri developer
$settings['dev']['nome'] = 'Maiora Labs Srl';
$settings['dev']['url'] = 'http://www.maioralabas.it';
$settings['dev']['email'] = 'info@maioralabs.it';

// Parametri email
$settings['email']['nome'] = 'Protezione Civica';
$settings['email']['indirizzo'] = 'info@protezionecivica.it';

// Parametri per l'accesso ad un SMTP esterno, utilizzati in caso di invio PEC
$settings['email']['SMTP_host'] = 'sendm.cert.legalmail.it';
$settings['email']['SMTP_port'] = 25;
$settings['email']['SMTP_secure'] = 'tls';
$settings['email']['SMTP_username'] = '';
$settings['email']['SMTP_password'] = '';

// Parametri Smarty
$settings['smarty']['root'] = $settings['sito']['percorso'].'include/smarty_3.0.7/';
$settings['smarty']['private'] = $settings['smarty']['root'].'private/';

$settings['segnalazioni']['limit_giorni'] = 90;
$settings['segnalazioni']['limit_numero'] = 10;
$settings['segnalazioni']['limit_distanza'] = 0.01;
$settings['segnalazioni']['conferma_automatica'] = 1;

$settings['commenti']['conferma_automatica'] = 1;

$settings['admin_comuni']['directory'] = "comuni/";
$settings['admin_comuni']['nome_sito'] = 'Protezione Civica - Amministrazione';
$settings['admin_comuni']['proprietario'] = 'Maiora Labs Srl';
$settings['admin_comuni']['url'] = $settings['sito']['url'].$settings['admin_comuni']['directory'];
$settings['admin_comuni']['percorso'] = $settings['sito']['percorso'].$settings['admin_comuni']['directory'];
$settings['admin_comuni']['debug'] = 0;

$settings['admin']['directory'] = "admin/";
$settings['admin']['nome_sito'] = 'Protezione Civica - Amministrazione';
$settings['admin']['proprietario'] = 'Maiora Labs Srl';
$settings['admin']['url'] = $settings['sito']['url'].$settings['admin']['directory'];
$settings['admin']['percorso'] = $settings['sito']['percorso'].$settings['admin']['directory'];
$settings['admin']['debug'] = 0;


// Costanti
$settings['user']['ruolo_utente_admin'] = 1;
$settings['user']['ruolo_utente_normale'] = 2;
$settings['user']['ruolo_utente_comune'] = 3;
$settings['user']['ruolo_utente_competenza'] = 4;

$settings['segnalazioni']['in_moderazione'] = 0;
$settings['segnalazioni']['rifiutata'] = 1;
$settings['segnalazioni']['rimossa'] = 2;
$settings['segnalazioni']['rimossa_errore'] = 3;
$settings['segnalazioni']['in_attesa_non_verificata'] = 100;
$settings['segnalazioni']['in_attesa_moderata'] = 101;
$settings['segnalazioni']['in_attesa_verificata'] = 102;
$settings['segnalazioni']['in_attesa_comune'] = 103; // Inserita da utenza comune
$settings['segnalazioni']['in_attesa_competenza'] = 104; // Inoltrata a utenza competenza
$settings['segnalazioni']['in_carico'] = 200;
$settings['segnalazioni']['in_carico_automatica'] = 201;
$settings['segnalazioni']['risolta'] = 300;
$settings['segnalazioni']['in_attesa'] = 100;

// lista delle regioni italiane con associato il punto geografico di riferimento
$settings['geo']['regioni'] = array(
	'piemonte' => array('nome' => 'Piemonte','nome_url' => 'piemonte','lat'=>45.052237,'lng'=>7.515389),
	'lombardia' => array('nome' => 'Lombardia','nome_url' => 'lombardia','lat'=>45.479067,'lng'=>9.845243),
	'trentino-alto-adige' => array('nome' => 'Trentino-Alto Adige','nome_url' => 'trentino-alto-adige','lat'=>46.433666,'lng'=>11.16933),
	'veneto' => array('nome' => 'Veneto','nome_url' => 'veneto','lat'=>45.762333,'lng'=>11.690976),
	'friuli-venezia-giulia' => array('nome' => 'Friuli-Venezia Giulia','nome_url' => 'friuli-venezia-giulia','lat'=>46.225918,'lng'=>13.103365),
	'liguria' => array('nome' => 'Liguria','nome_url' => 'liguria','lat'=>44.419658,'lng'=>8.528161),
	'emilia-romagna' => array('nome' => 'Emilia Romagna','nome_url' => 'emilia-romagna','lat'=>44.396761,'lng'=>11.01864),
	'toscana' => array('nome' => 'Toscana','nome_url' => 'toscana','lat'=>43.567115,'lng'=>10.9807),
	'umbria' => array('nome' => 'Umbria','nome_url' => 'umbria','lat'=>42.938004,'lng'=>12.621621),
	'marche' => array('nome' => 'Marche','nome_url' => 'marche','lat'=>43.505874,'lng'=>12.989615),
	'lazio' => array('nome' => 'Lazio','nome_url' => 'lazio','lat'=>41.655242,'lng'=>12.989615),
	'abruzzo' => array('nome' => 'Abruzzo','nome_url' => 'abruzzo','lat'=>42.192012,'lng'=>13.728917),
	'molise' => array('nome' => 'Molise','nome_url' => 'molise','lat'=>41.63109,'lng'=>14.493461),
	'campania' => array('nome' => 'Campania','nome_url' => 'campania','lat'=>41.112508,'lng'=>14.845462),
	'puglia' => array('nome' => 'Puglia','nome_url' => 'puglia','lat'=>40.792839,'lng'=>16.7),
	'basilicata' => array('nome' => 'Basilicata','nome_url' => 'basilicata','lat'=>40.643077,'lng'=>15.969988),
	'calabria' => array('nome' => 'Calabria','nome_url' => 'calabria','lat'=>38.973641,'lng'=>16.3168187),
	'sicilia' => array('nome' => 'Sicilia','nome_url' => 'sicilia','lat'=>37.39793,'lng'=>14.258782),
	'sardegna' => array('nome' => 'Sardegna','nome_url' => 'sardegna','lat'=>40.120875,'lng'=>9.012893),
	'valle-daosta' => array('nome' => 'Valle d\'Aosta','nome_url' => 'valle-daosta','lat'=>45.738888,'lng'=>7.426187)
);

