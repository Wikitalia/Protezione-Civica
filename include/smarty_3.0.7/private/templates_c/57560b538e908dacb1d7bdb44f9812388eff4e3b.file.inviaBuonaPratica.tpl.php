<?php /* Smarty version Smarty-3.0.7, created on 2012-06-28 14:27:56
         compiled from "/htdocs/web//mappa/templates/inviaBuonaPratica.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13060549874fec4dcc98c029-48437124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57560b538e908dacb1d7bdb44f9812388eff4e3b' => 
    array (
      0 => '/htdocs/web//mappa/templates/inviaBuonaPratica.tpl',
      1 => 1340875514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13060549874fec4dcc98c029-48437124',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<?php $_template = new Smarty_Internal_Template("includes/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<script>

	var sito_url = '<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
';

</script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
js/mappa_segnala.js"></script>

<div class="rightPageHeader marginB10">
	<?php $_template = new Smarty_Internal_Template("includes/path.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</div>
<h3 class="fontS18 margin0"><?php echo $_smarty_tpl->getConfigVariable('titolo');?>
</h3>


<form id="formInviaSegnalazione" onsubmit="return ajaxSubmit();">

	<div id="invSegnForm" class="skinnedForm">
		<h3 class="pageTitle marginB5"><span class="fontS20">1.</span> <?php echo $_smarty_tpl->getConfigVariable('descProblema1');?>
 <span id="controlloDescrizione"></span></h3> 
		<div>
			<div>
				<b><?php echo $_smarty_tpl->getConfigVariable('descrizione');?>
 *</b><br />
				<span class="fontS10"><?php echo $_smarty_tpl->getConfigVariable('descProblema2');?>
</span>
			</div>
			<textarea id="descrizione" name="descrizione" onblur="verifica('descrizione');" onkeyup="verifica('descrizione');"></textarea>
		</div>
		<div>
			<div class="marginT10">
				<b><?php echo $_smarty_tpl->getConfigVariable('indirizzo');?>
 *</b><span id="controlloIndirizzo"></span><br />
				<span class="fontS10"><?php echo $_smarty_tpl->getConfigVariable('indirizzoDesc');?>
</span>
			</div>
			<input type="text" id="indirizzo" name="indirizzo" onkeyup="aggiorna_posizione_da_stringa();verifica('indirizzo_mappa');" onblur="aggiorna_posizione_da_stringa();verifica('indirizzo_mappa');" />
		</div>
		<div>
			<div class="marginT10"><b><?php echo $_smarty_tpl->getConfigVariable('immagine');?>
</b> <span class="fontS10"><?php echo $_smarty_tpl->getConfigVariable('limiteImg');?>
</span><span id="controlloFoto"></span><br />
				<span class="fontS10"><?php echo $_smarty_tpl->getConfigVariable('uploaderInfo');?>
</span></div>
			<ul id="lista_file" class="qq-upload-list">
			</ul>
			<div id="file-uploader">       
		    <noscript>
	        <p><?php echo $_smarty_tpl->getConfigVariable('jsOff');?>
</p>
	        <!-- or put a simple form for upload here -->
		    </noscript>         
			</div>
		</div>
		<div class="marginT10 fontS10">
			<?php echo $_smarty_tpl->getConfigVariable('noSegnDuplicate');?>
 <a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['guida'];?>
" target="_blank"><?php echo $_smarty_tpl->getConfigVariable('guida');?>
</a>
		</div>
		<div class="marginT20"><input type="submit" value="<?php echo $_smarty_tpl->getConfigVariable('inviaButt');?>
" /></div>
	</div>
	
	<div id="invSegnMappa">
		<h3 class="pageTitle marginB5"><span class="fontS20">2.</span> <?php echo $_smarty_tpl->getConfigVariable('affinaPos');?>
 <span id="controlloMappa"></span></h3>
		<div id="map_container_invia">
			<div id="map_canvas"></div>
		</div>
	</div>
</form>

<div id="invSegnRiepilogo" style="display:none;">
	<div class="testoFumetto">
		<div><h3 class="pageTitle marginB15"><?php echo $_smarty_tpl->getConfigVariable('segnInserita');?>
</h3></div>
		<div>
			<div class="riepilogoLeft"><?php echo $_smarty_tpl->getConfigVariable('dove');?>
</div>
			<div class="riepilogoRight" id="riepilogoIndirizzo"></div>
		</div>
		<div class="marginT20">
			<div class="riepilogoLeft"><?php echo $_smarty_tpl->getConfigVariable('commento');?>
</div>
			<div class="riepilogoRight" id="riepilogoMessaggio">
			</div>
		</div>
		<div class="marginT20">
			<div class="riepilogoLeft"><?php echo $_smarty_tpl->getConfigVariable('foto');?>
</div>
			<div class="riepilogoRight"><img id="riepilogoFoto" src="" alt="" /></div>
		</div>
	</div>
</div>



<script>


var uploading = false;
var err_msg;

var uploader = new qq.FileUploader({
  // pass the dom node (ex. $(selector)[0] for jQuery users)
  element: document.getElementById('file-uploader'),
  // path to server-side upload script
  action: '<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
ajax/segnalazione_foto_add.php',
  // ex. ['jpg', 'jpeg', 'png', 'gif'] or []
	allowedExtensions: ['jpg', 'jpeg', 'png', 'gif'],
	multiple: false,
	listElement: document.getElementById('lista_file'),
	onSubmit: function(id, fileName){
		uploading = true
		//alert("Uploading true? "+uploading);
		$('#lista_file').html('');
	},
	onComplete: function(id, fileName, responseJSON){
		uploading = false;
		verifica('foto');
		//alert("Uploading false? "+uploading);
	},
	params: {
		sid: '<?php echo $_smarty_tpl->getVariable('sid')->value;?>
'
	}
});

function verifica(campo) {

	var descrizione = $("#descrizione").val();

	var tmp = document.createElement("DIV");
	tmp.innerHTML = descrizione;
	descrizione = $(tmp).text();
	
	var indirizzo = $("#indirizzo").val();

	var err = 0;
	err_msg='';

	if(campo == 'descrizione' || campo == '')
		if(!descrizione.length) {
			$("#controlloDescrizione").removeClass('checkPassed');
			$("#controlloDescrizione").addClass('checkFailed');
			err = 1;
			err_msg += '<p><?php echo $_smarty_tpl->getConfigVariable('verifica2');?>
</p>';
		} else {
			$("#controlloDescrizione").removeClass('checkFailed');
			$("#controlloDescrizione").addClass('checkPassed');
		}
		
	if(campo == 'indirizzo_mappa' || campo == '')
		if(citta == '') {
			$("#controlloIndirizzo").removeClass('checkPassed');
			$("#controlloIndirizzo").addClass('checkFailed');
			err = 1;
			err_msg += '<p><?php echo $_smarty_tpl->getConfigVariable('verifica3');?>
</p>';
		} else {
			$("#controlloIndirizzo").removeClass('checkFailed');
			$("#controlloIndirizzo").addClass('checkPassed');
		}
	
	if(campo == 'indirizzo_mappa' || campo == '')
		if(typeof(lat) == 'undefined' || typeof(lng) == 'undefined' || lat == 0 || lng == 0) {
			$("#controlloMappa").removeClass('checkPassed');
			$("#controlloMappa").addClass('checkFailed');
			err = 1;
			err_msg += '<p><?php echo $_smarty_tpl->getConfigVariable('verifica4');?>
</p>';
		} else {
			$("#controlloMappa").removeClass('checkFailed');
			$("#controlloMappa").addClass('checkPassed');
		}
	
	if(campo == 'foto' || campo == '')
		if(uploading) {
			$("#controlloFoto").removeClass('checkPassed');
			$("#controlloFoto").addClass('checkFailed');
			err = 1;
			err_msg += '<p><?php echo $_smarty_tpl->getConfigVariable('verifica5');?>
</p>';
		} else {
			$("#controlloFoto").removeClass('checkFailed');
			$("#controlloFoto").addClass('checkPassed');
		}
		
	if (err) return false;
	else return true

}

function ajaxSubmit() {


	var descrizione = $("#descrizione").val();
	var indirizzo = $("#indirizzo").val();
	//var lat = $("#lat").val();
	//var lng = $("#lng").val();

	if (!verifica('')) {
		$('#modalControlli').html(err_msg);
		$('#modalControlli').dialog({
			height: 400,
			width:550,
			modal: true,
			draggable:false,
			resizable:false,
			buttons: {
				Ok: function() {
					//$( this ).dialog( "<?php echo $_smarty_tpl->getConfigVariable('annulla');?>
" );
					$( this ).remove();
				}
			}
		});
		return false;
	}

	$('#formInviaSegnalazione').hide();
	$('#loadingInviaSegnalazione').show();

  var dataString = 'id_utente=<?php echo $_smarty_tpl->getVariable('user')->value['id_utente'];?>
';
	dataString += '&sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
';
	dataString += '&id_tipo=0';
	dataString += '&genere=bp';
	dataString += '&descrizione='+descrizione;
	
	dataString += '&indirizzo='+indirizzo;
	dataString += '&lat='+lat;
	dataString += '&lng='+lng;
	
  dataString += '&civico='+civico;
	dataString += '&via='+via;
	dataString += '&cap='+cap;
	dataString += '&citta='+citta;
	dataString += '&provincia='+provincia;
	dataString += '&regione='+regione;
	dataString += '&nazione='+nazione;
	dataString += '&codice_nazione='+codice_nazione;
	
	dataString += '&client=<?php echo $_smarty_tpl->getVariable('settings')->value['client']['nome'];?>
';
	dataString += '&versione=<?php echo $_smarty_tpl->getVariable('settings')->value['client']['versione'];?>
';

  $.ajax({
    type: "POST",
    url: "<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
ajax/segnalazione_data_add.php",
    dataType: "json",
    data: dataString,
    success: function(result) {
    	if (result && result.status == 'ok') {
	    	/*$('#loadingInviaSegnalazione').hide();
	    	$('#riepilogoIndirizzo').html(indirizzo+' '+civico);
	    	$('#riepilogoMessaggio').html(descrizione);
	    	$('#riepilogoFoto').attr('src','<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
resize.php?w=450&f=<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/segnalazioni/<?php echo $_smarty_tpl->getVariable('user')->value['id_utente'];?>
/'+result+'/1.jpeg');						    	
	    	$('#invSegnRiepilogo').show();*/
	    	window.location.href=result.link_segnalazione;
    	} else {
    		alert('<?php echo $_smarty_tpl->getConfigVariable('erroreInvio');?>
');
			}
    	//window.location.href='<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
';
    }
  });
  
  return false;

}

</script>



<div class="demo-description" id="modalControlli" style="display:none;">
</div>


<script type="text/javascript">

if ('<?php echo $_smarty_tpl->getVariable('user')->value['citta'];?>
' != '') {
	var geocoder = new google.maps.Geocoder();
  geocoder.geocode( { 'address': '<?php echo $_smarty_tpl->getVariable('user')->value['quartiere'];?>
 <?php echo $_smarty_tpl->getVariable('user')->value['citta'];?>
 italy' } , function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
    	initialLocation = results[0].geometry.location;
    	init_mappa('#map_canvas',initialLocation,14);
    }
  });
} else {
	init_mappa('#map_canvas',initialLocation,14);
}

$("#loadingInviaSegnalazione").css("height", $(document).height());
</script>

<?php $_template = new Smarty_Internal_Template("includes/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>