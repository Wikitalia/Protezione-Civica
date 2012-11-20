<?php /* Smarty version Smarty-3.0.7, created on 2012-05-23 16:57:38
         compiled from "/var/www/test.decorourbano.org/templates/inviaSegnalazione.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6558906274fbcfae2d4fc21-22214478%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '071a53e704c36487ceda88f7ea2fea97fceb91d3' => 
    array (
      0 => '/var/www/test.decorourbano.org/templates/inviaSegnalazione.tpl',
      1 => 1337785055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6558906274fbcfae2d4fc21-22214478',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<?php $_template = new Smarty_Internal_Template("includes/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
js/mappa_segnala.js"></script>

<script>
	$(function() {
		$( "#invSegnCategoria" ).buttonset();
	});
	var tipo = 0;
</script>

<div class="rightPageHeader">
	<div class="rightHeadText"><h3 class="fontS18 marginB5 fBrown"><?php echo $_smarty_tpl->getConfigVariable('titolo');?>
</h3>
		<?php echo $_smarty_tpl->getConfigVariable('inviaIntro');?>
 <a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['guida'];?>
"><?php echo $_smarty_tpl->getConfigVariable('guida');?>
</a>
	</div>
	<div class="rightHeadIcon"><div class="rhiInviaSegnalazione"></div></div>
</div>

<form id="formInviaSegnalazione" onsubmit="return ajaxSubmit();">
	
	<div id="invSegnCategoria" class="testoFumetto">
		<div><h3 class="pageTitle marginB5"><span class="fontS20">1.</span> <?php echo $_smarty_tpl->getConfigVariable('categoria');?>
 <span id="controlloCategoria"></span></h3></div>
		<?php  $_smarty_tpl->tpl_vars['tipo'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('tipi')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['tipo']->key => $_smarty_tpl->tpl_vars['tipo']->value){
?>
		<input type="radio" id="radio<?php echo $_smarty_tpl->tpl_vars['tipo']->value['id_tipo'];?>
" name="tipo" class="" value="<?php echo $_smarty_tpl->tpl_vars['tipo']->value['id_tipo'];?>
" />
		<label for="radio<?php echo $_smarty_tpl->tpl_vars['tipo']->value['id_tipo'];?>
" aria-pressed="false" class="categoriaButt" role="button" aria-disabled="false">
			<span class="ui-button-text" onclick="categoria_set(<?php echo $_smarty_tpl->tpl_vars['tipo']->value['id_tipo'];?>
);"><span class="<?php echo $_smarty_tpl->tpl_vars['tipo']->value['label'];?>
Icon"></span><br /><?php echo $_smarty_tpl->tpl_vars['tipo']->value['nome'];?>
</span>
		</label>
		<?php }} ?>
	</div>
	
	<div id="invSegnForm" class="skinnedForm">
		<h3 class="pageTitle marginB5"><span class="fontS20">2.</span> <?php echo $_smarty_tpl->getConfigVariable('descProblema1');?>
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
 *</b> <span class="fontS10"><?php echo $_smarty_tpl->getConfigVariable('limiteImg');?>
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
		<h3 class="pageTitle marginB5"><span class="fontS20">3.</span> <?php echo $_smarty_tpl->getConfigVariable('affinaPos');?>
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

//$('#radio6').click(function() { verifica('categoria'); });

var upload_done = false;
var err_msg;

var uploader = new qq.FileUploader({
  // pass the dom node (ex. $(selector)[0] for jQuery users)
  element: document.getElementById('file-uploader'),
  // path to server-side upload script
  action: '/ajax/segnalazione_foto_add.php',
  // ex. ['jpg', 'jpeg', 'png', 'gif'] or []
	allowedExtensions: ['jpg', 'jpeg', 'png', 'gif'],
	multiple: false,
	listElement: document.getElementById('lista_file'),
	onSubmit: function(id, fileName){
		$('#lista_file').html('');
	},
	onComplete: function(id, fileName, responseJSON){
		if (responseJSON.success) {
			upload_done = true;
			verifica('foto');
		}
	},
	params: {
		sid: '<?php echo $_smarty_tpl->getVariable('sid')->value;?>
'
	}
});

function categoria_set(cat) {

	tipo=cat;
	verifica('categoria');

}

function verifica(campo) {

	//var tipo = $('input[name=tipo]:checked').val();
	//alert(tipo);
	var descrizione = $("#descrizione").val();

	var tmp = document.createElement("DIV");
	tmp.innerHTML = descrizione;
	descrizione = $(tmp).text();
	
	var indirizzo = $("#indirizzo").val();

	var err = 0;
	err_msg='';

	if(campo == 'categoria' || campo == '')
		if(!tipo) {
			$("#controlloCategoria").removeClass('checkPassed');
			$("#controlloCategoria").addClass('checkFailed');
			err = 1;
			err_msg += '<p><?php echo $_smarty_tpl->getConfigVariable('verifica1');?>
</p>';
		} else {
			$("#controlloCategoria").removeClass('checkFailed');
			$("#controlloCategoria").addClass('checkPassed');
		}
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
		if(indirizzo == '' || via == '' || citta == '') {
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
		if(!upload_done) {
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

	//var tipo = $('input:radio[name=tipo]:checked').val();
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
					$('#modalControlli').dialog('close');
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
	dataString += '&id_tipo='+tipo;
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
	


	//alert (dataString);
	//return false;
  $.ajax({
    type: "POST",
    url: "/ajax/segnalazione_data_add.php",
    dataType: "json",
    data: dataString,
    success: function(result) {
    	if (result && result.status == 'ok') {
	    	/*$('#loadingInviaSegnalazione').hide();
	    	$('#riepilogoIndirizzo').html(indirizzo+' '+civico);
	    	$('#riepilogoMessaggio').html(descrizione);
	    	$('#riepilogoFoto').attr('src','/resize.php?w=450&f=/images/segnalazioni/<?php echo $_smarty_tpl->getVariable('user')->value['id_utente'];?>
/'+result+'/1.jpeg');						    	
	    	$('#invSegnRiepilogo').show();*/
	    	window.location.href=result.link_segnalazione;
    	} else {
    		$('#loadingInviaSegnalazione').hide();
    		$('#formInviaSegnalazione').show();
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

<div id="invSegnApplicaz" class="marginT20">
	<div><h3 class="pageTitle marginB5"><?php echo $_smarty_tpl->getConfigVariable('mobilitatiTitolo');?>
</h3></div>
		<div style="width:540px;"><?php echo $_smarty_tpl->getConfigVariable('mobilitati1');?>
 <strong><?php echo $_smarty_tpl->getConfigVariable('decoro');?>
</strong> <?php echo $_smarty_tpl->getConfigVariable('mobilitati2');?>
 <a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['applicazioni'];?>
"><?php echo $_smarty_tpl->getConfigVariable('applicazioni');?>
</a> <?php echo $_smarty_tpl->getConfigVariable('mobilitati3');?>
</div>
		<div class="rhiApplicazioni right"></div>
</div>

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