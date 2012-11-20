<?php /* Smarty version Smarty-3.0.7, created on 2012-04-03 16:54:32
         compiled from "/var/www/test.decorourbano.org/templates/widget.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17812880024f7b0f28a81a44-09684977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c89b165ffebf84d709229ad12d5e617661493d79' => 
    array (
      0 => '/var/www/test.decorourbano.org/templates/widget.tpl',
      1 => 1332434103,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17812880024f7b0f28a81a44-09684977',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/test.decorourbano.org/include/smarty_3.0.7/libs/plugins/modifier.truncate.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Decoro Urbano - Widget</title>
<link rel="image_src" type="image/jpeg" href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/DU_FB.jpg" />
<meta name="robots" content="noindex,follow" />
<meta name="description" content="<?php echo $_smarty_tpl->getVariable('metaDesc')->value;?>
" />
<meta property="og:title" content="<?php echo $_smarty_tpl->getVariable('pageTitle')->value;?>
" />
<meta property="og:type" content="product" />
<meta property="og:url" content="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
<?php echo $_SERVER['REQUEST_URI'];?>
" />
<meta property="og:image" content="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/DU_FB.jpg" />
<meta property="og:description" content="Utilizza anche tu Decoro Urbano, lo strumento gratuito per la segnalazione del degrado via smartphone e PC. La cittadinanza attiva comincia da te." />
<meta property="og:site_name" content="Decoro Urbano" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="it" />

<link rel="icon" href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
/images/favicon.png" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
css/widget.css" />
<link href='http://fonts.googleapis.com/css?family=Nunito&subset=latin&v2' rel='stylesheet' type='text/css'>
<link type="text/css" href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
css/jqueryui/jquery-ui-1.8.12.custom.css" rel="stylesheet" />	
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
js/jquery-1.5.1.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
js/jquery-ui-1.8.12.custom.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
js/jquery.json-2.2.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
js/funzioni.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
js/Date.extend.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
js/Array.extend.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
js/controlli.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
js/markerclusterer.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?v=3.2&sensor=false&language=it"></script>

<!--[if IE]>
<link type="text/css" href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
css/ie.css" rel="stylesheet" />	
<![endif]-->

</head>
<body>


<div id="widgetWrap">
	<div id="logoDu">
   		 <a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/decorourbano.png" width="250" height="37" alt="Decoro Urbano" /></a>
    </div>
    <!-- fine logoDu -->
    
    <div id="comuneWrap">
    	<?php if ($_smarty_tpl->getVariable('comune_attivo')->value){?>
    	<div id="logoComune"><img src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
resize.php?h=73&f=<?php echo $_smarty_tpl->getVariable('comune_logo')->value;?>
" alt="Comune di <?php echo $_smarty_tpl->getVariable('comune')->value;?>
" /></div>
        <?php }else{ ?>
		<div id="logoComune"><img src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/logo_du_square.png" width="73" height="73" /></div>
		<?php }?>
		<div id="comune">
        	<div id="nomeComune"><a href="<?php echo $_smarty_tpl->getVariable('comune_url')->value;?>
" target="_blank"><?php echo $_smarty_tpl->getVariable('comune')->value;?>
</a></div>
			<?php if ($_smarty_tpl->getVariable('comune_attivo')->value){?>
            <div id="statusComune">COMUNE ATTIVO</div>
			<?php }else{ ?>
			<div id="statusComune">COMUNE NON ATTIVO</div>
			<?php }?>
        </div>
    </div>
    <!-- fine comuneWrap -->
    
	<?php if ($_smarty_tpl->getVariable('m')->value){?>	
		
		<script type="text/javascript">
		
		var json_segnalazioni='<?php echo $_smarty_tpl->getVariable('segnalazioni_json')->value;?>
';
		var segnalazioni=[];
		var initialLocation = new google.maps.LatLng(<?php echo $_smarty_tpl->getVariable('comune_lat')->value;?>
, <?php echo $_smarty_tpl->getVariable('comune_lng')->value;?>
);
		var zoom = 11;
		
		var du_map;
		var markerClusterer = null;
		
		var du_map = {
			map: null,
			center: null,
			markers: []
		}
		
		du_map.init = function(selector, initialLocation, zoom) {
			var mapOptions = {
				zoom: zoom,
				center: initialLocation,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				streetViewControl: false,
				mapTypeControl: false
			};
			
			this.map = new google.maps.Map($(selector)[0], mapOptions);
		}
		
		var boxText = document.createElement("div");
		boxText.style.cssText = "width:290px; float:right; margin:0; padding: 5px;";

		function segnalazioni_mostra() {

			du_map.markers.splice(0,du_map.markers.length);
			
			if (markerClusterer) {
				markerClusterer.clearMarkers();
			}
		
		  if (segnalazioni)
				for (i in segnalazioni)
					aggiungi_segnalazione('append', segnalazioni[i]);
		
		}
		
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
		
			//if ('<?php echo $_smarty_tpl->getVariable('user')->value['id_utente'];?>
' == '1') alert(segnalazione.marker);
		
		  var image = new google.maps.MarkerImage(segnalazione.marker,
		    new google.maps.Size(40, 40),
		    new google.maps.Point(0,0),
		    new google.maps.Point(19, 40));
		
			var marker = new google.maps.Marker({
		    position: myLatlng,
		    icon: image
			});
		
			google.maps.event.addListener(marker, 'click', function() {
				window.open(segnalazione.url,'_blank');
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
		}
		
		window.onload=function() {
			du_map.init('#mappaSegnalazioni',initialLocation,zoom);
			segnalazioni = jQuery.secureEvalJSON(json_segnalazioni);
			segnalazioni_mostra();
		}
				
		</script>
		
    <div id="mappaSegnalazioni">
    	mappa segnalazioni
    </div>
    <?php }?>
	<!-- fine mappaSegnalazioni -->
  
    <?php if ($_smarty_tpl->getVariable('n')->value){?>	  
	  <div id="segnalazioniRisolte" class="numSegnalazioni">
	    	<span><?php echo $_smarty_tpl->getVariable('count_risolte')->value;?>
</span> <div>RISOLTE</div>
	  </div>
	    <!-- fine segnalazioniRisolte -->
	    
	  <div id="segnalazioniCarico" class="numSegnalazioni">
	      <span><?php echo $_smarty_tpl->getVariable('count_carico')->value;?>
</span> <div>IN CARICO</div>
	  </div>
	    <!-- fine segnalazioniCarico -->
	    
	  <div id="segnalazioniTotali" class="numSegnalazioni">
	    	<span><?php echo $_smarty_tpl->getVariable('count_totale')->value;?>
</span> <div><b>TOTALI</b></div>
	  </div>
	    <!-- fine segnalazioniTotali -->
    <?php }?>

    <!-- fine paginaComune -->
    
	<?php if ($_smarty_tpl->getVariable('u')->value){?>	
    <div id="ultimeSegnalazioniWrap">
    	<div class="title">&nbsp;Ultime Segnalazioni</div>
        <div id="segnalazioniWrap" >
        	<?php  $_smarty_tpl->tpl_vars['segnalazione'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('ultime_segnalazioni')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['segnalazione']->key => $_smarty_tpl->tpl_vars['segnalazione']->value){
?>
	        	<div class="segnalazioni" onclick="window.open('<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['url'];?>
','_blank')">
            <div class="segnalazioni_box">
	            	<img src="<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['foto_base_url'];?>
71-46.jpg" width="71" height="46" alt="1" align="right" />
	            	<div class="segnalatore"><a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['vediProfilo'];?>
?idu=<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['id_utente'];?>
" class="tdNone"><span class="fBold fontS12">
				<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['cognome'];?>
</span>
			</a> <?php echo ConvertitoreData_UNIXTIMESTAMP_IT($_smarty_tpl->tpl_vars['segnalazione']->value['data']);?>
</div>
	                <div class="dettaglio"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['segnalazione']->value['messaggio'],47,"...");?>
</div>
	                <div class="posizione"><?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['indirizzo'];?>
 <?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['civico'];?>
</div>
	                <div class="piattaforma" style="display:none;">
	                	<?php if ($_smarty_tpl->tpl_vars['segnalazione']->value['client']=='iPhone'){?>via <a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['applicazioni'];?>
">iPhone</a><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['segnalazione']->value['client']=='Android'){?>via <a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['applicazioni'];?>
">Android</a><?php }?>
	          		</div>
                </div>
			       </div>
          	<?php }} ?>
        </div>
    </div>
    <!-- fine ultimeSegnalazioniWrap -->
    <?php }?>	
 
 		
    <div id="paginaComune">
   		<a href="<?php echo $_smarty_tpl->getVariable('comune_url')->value;?>
" target="_blank">Vai alla pagina del comune</a>
    </div>    

    <?php if ($_smarty_tpl->getVariable('tw')->value){?>
    <div id="twitterWrap">
    	<div id="twitter" class="marginT20">
			<script src="http://widgets.twimg.com/j/2/widget.js"></script>
			<script>
			new TWTR.Widget({
				version: 2,
			  type: 'search',
			  search: '#WEDU OR @decorourbano OR #decorourbano',
				rpp: 3,
			  interval: 30000,
			  title: '',
			  subject: '@decorourbano su Twitter',
			  width: 246,
			  height: 300,
			  theme: {
			    shell: {
			      background: '#4ab5e6',
			      color: '#ffffff'
			    },
			    tweets: {
			      background: '#ffffff',
			      color: '#632016',
			      links: '#3a891d'
			    }
			  },
				features: {
			    scrollbar: false,
			    loop: true,
			    live: true,
			    hashtags: true,
			    timestamp: true,
			    avatars: true,
			    behavior: 'all'
				}
			}).render().start();
			</script>
		</div>
    </div>
	<?php }?>

   
</div>
<!-- fine widgetWrap -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-16957391-5']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
