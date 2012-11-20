<?php /* Smarty version Smarty-3.0.7, created on 2012-03-22 17:31:26
         compiled from "/var/www/test.decorourbano.org/templates/mappa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13682726014f6b53deb47918-82159795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c826911fba22910e4dcccf41a8b1aac1d1f32cc4' => 
    array (
      0 => '/var/www/test.decorourbano.org/templates/mappa.tpl',
      1 => 1331649390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13682726014f6b53deb47918-82159795',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<?php $_template = new Smarty_Internal_Template("includes/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js/mappa_elenco.js"></script>
<script type="text/javascript" src="js/popup.js"></script>
<script type="text/javascript" src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/markerclusterer/src/markerclusterer.js"></script>


<div id="filtri">
    Tipo segnalazione:<br />
    <form name="tipi" id="tipi">
    	<ul id="naviCategories">
      	<li>Filtra per categoria</li>
        <li>Rifiuti</li>
        <li>Select</li>
      </ul>
      <input type="radio" name="tipo_segnalazione" id="tipo_segnalazione" value="0" checked="true" onClick="segnalazioni_tipi_filtra();">Tutti
      <br />
      <input type="radio" name="tipo_segnalazione" id="tipo_segnalazione" value="<<?php ?>?=$tipo['id_tipo']?<?php ?>>" onClick="segnalazioni_tipi_filtra();"><<?php ?>?=$tipo['nome']?<?php ?>>
    </form>
</div>
<div id="map_container">
	<div id="map_canvas"></div>
</div>

<script type="text/javascript">
du_map.init('#map_canvas',roma,15);
</script>

<?php $_template = new Smarty_Internal_Template("includes/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>