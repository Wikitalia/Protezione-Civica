<?php /* Smarty version Smarty-3.0.7, created on 2012-05-24 17:05:40
         compiled from "/var/www/test.decorourbano.org/templates/test.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13591133464fbe4e446e6068-41982450%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d4394033b29c3e0e947a35a74bcd5141306a829' => 
    array (
      0 => '/var/www/test.decorourbano.org/templates/test.tpl',
      1 => 1337871864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13591133464fbe4e446e6068-41982450',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('user')->value){?>
	<a href="http://www.test.decorourbano.org/logout/">logout</a>
<?php }else{ ?>
	logged out
<?php }?>
