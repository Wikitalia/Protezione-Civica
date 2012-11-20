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

/**
 * Inizializzazione del template engine Smarty
 */

require_once('config.php');
require_once($settings['smarty']['root'].'libs/Smarty.class.php');

$smarty = new Smarty;
$smarty->template_dir = $settings['sito']['percorso'].'templates/';
$smarty->compile_dir = $settings['smarty']['private'].'templates_c/';
$smarty->config_dir = $settings['smarty']['private'].'config/';
$smarty->cache_dir = $settings['smarty']['private'].'cache/';

$smarty->assign('sid', session_id());

?>
