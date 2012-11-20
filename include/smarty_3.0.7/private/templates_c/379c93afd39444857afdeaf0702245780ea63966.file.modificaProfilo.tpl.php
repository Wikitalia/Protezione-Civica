<?php /* Smarty version Smarty-3.0.7, created on 2012-06-11 12:58:48
         compiled from "/var/www/protezionecivica/templates/modificaProfilo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12248616134fd5cf68881fa8-98247022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '379c93afd39444857afdeaf0702245780ea63966' => 
    array (
      0 => '/var/www/protezionecivica/templates/modificaProfilo.tpl',
      1 => 1339236170,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12248616134fd5cf68881fa8-98247022',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<?php $_template = new Smarty_Internal_Template("includes/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
js/controlli.js"></script>

<div class="rightPageHeader">
	<div class="rightHeadText"><h3 class="fontS18 marginB5 fBrown"><?php echo $_smarty_tpl->getConfigVariable('titolo');?>
</h3>
		<?php echo $_smarty_tpl->getConfigVariable('modificaProfiloIntro');?>

	</div>
	<div class="rightHeadIcon"><div class="rhiProfilo"></div></div>
</div>

<div id="modificaProfiloContainer">

	<div class="testoFumetto">

<?php if ($_smarty_tpl->getVariable('user')->value['id_ruolo']==2||$_smarty_tpl->getVariable('user')->value['id_ruolo']==1){?>
		<form class="skinnedForm" method="post" onsubmit="return check_submit();">	

			<div><h3 class="pageTitle marginB5"><?php echo $_smarty_tpl->getConfigVariable('datiPers');?>
</h3></div>
			<div class="fontS10 marginB15"><?php echo $_smarty_tpl->getConfigVariable('datiPersIntro');?>
</div>
			<div class="marginB10">
				<label><?php echo $_smarty_tpl->getConfigVariable('nome');?>
</label><input id="utenteNome" type="text" name="nome" value="<?php echo $_smarty_tpl->getVariable('user')->value['nome'];?>
" disabled="disabled" />
				<span id="controllo_utenteNome"></span>
			</div>
			<div class="marginB10">
				<label><?php echo $_smarty_tpl->getConfigVariable('cognome');?>
</label><input id="utenteCognome" type="text" name="cognome" value="<?php echo $_smarty_tpl->getVariable('user')->value['cognome_hidden'];?>
" disabled="disabled" />
				<span id="controllo_utenteCognome"></span>
			</div>

	
			<div class="marginT40"><h3 class="pageTitle marginB5"><?php echo $_smarty_tpl->getConfigVariable('immagProfilo');?>
</h3></div>
			<div id="modProfImgContainer">
				<img id="immagineProfilo" src="/resize.php?w=90&h=90&f=<?php echo $_smarty_tpl->getVariable('user')->value['avatar'];?>
" class="left" alt="" />
				<div id="closeIcon_715" style="position:relative; z-index:10000;" class="closeIcon marginL5" onclick="avatarElimina(<?php echo $_smarty_tpl->getVariable('user')->value['id_utente'];?>
);"></div>
			</div>
			
			<div id="modProfImgTools">
				<div class="marginB15 fontS10"><?php echo $_smarty_tpl->getConfigVariable('selNuovaImg');?>
</div>
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
			


			<?php if (!isset($_SESSION['fb_session'])){?>
			<div class="marginT40"><h3 class="pageTitle marginB5"><?php echo $_smarty_tpl->getConfigVariable('cambiaPass');?>
</h3></div>
			<div class="fontS10 marginB15"><?php echo $_smarty_tpl->getConfigVariable('passMin6');?>
</div>
			<div class="marginB10">
				<label for="utentePass"><?php echo $_smarty_tpl->getConfigVariable('nuovaPass');?>
</label><input id="utentePass" type="password" name="utentePass" value="" />
				<span id="controllo_utentePass"></span>
			</div>
			<div class="marginB10">
				<label for="utentePass2"><?php echo $_smarty_tpl->getConfigVariable('nuovaPass2');?>
</label><input id="utentePass2" type="password" name="utentePass2" value=""  />
				<span id="controllo_utentePass2"></span>
			</div>
			<?php }?>

			<div class="marginT40"><h3 class="pageTitle marginB15"><?php echo $_smarty_tpl->getConfigVariable('infoExtra');?>
</h3></div>
			<div clasS="marginB10">
				<label for="utenteCitta"><?php echo $_smarty_tpl->getConfigVariable('citta');?>
</label><input id="utenteCitta" type="text" name="citta" value="<?php echo $_smarty_tpl->getVariable('user')->value['citta'];?>
" />
			</div>
			<div class="marginB10">
				<label for="utenteQuartiere"><?php echo $_smarty_tpl->getConfigVariable('quartiere');?>
</label><input id="utenteQuartiere" type="text" name="quartiere" value="<?php echo $_smarty_tpl->getVariable('user')->value['quartiere'];?>
" />
			</div>
			<div class="marginB10">
				<label for="utenteSito"><?php echo $_smarty_tpl->getConfigVariable('sito');?>
<br /><span class="fontS10 italic"><?php echo $_smarty_tpl->getConfigVariable('sitoEs');?>
</span></label><input id="utenteSito" type="text" name="sito" value="<?php echo $_smarty_tpl->getVariable('user')->value['sito'];?>
" />
			</div>
			<div class="marginB10">
				<label for="utenteFacebook"><?php echo $_smarty_tpl->getConfigVariable('profiloFb');?>
<br /><span class="fontS10 italic">www.facebook.com/</span> </label><input id="utenteFacebook" type="text" name="facebook_url" value="<?php echo $_smarty_tpl->getVariable('user')->value['facebook_url'];?>
" <?php if (isset($_SESSION['fb_session'])){?>disabled="disabled"<?php }?>/>
			</div>
			<div class="marginB10">
				<label for="utenteTwitter"><?php echo $_smarty_tpl->getConfigVariable('profiloTw');?>
<br /><span class="fontS10 italic">www.twitter.com/</span></label><input id="utenteTwitter" type="text" name="twitter" value="<?php echo $_smarty_tpl->getVariable('user')->value['twitter'];?>
" />
			</div>
			<div class="marginB10">
				<label for="utenteAbout"><?php echo $_smarty_tpl->getConfigVariable('suDiTe');?>
</label><textarea name="about" id="utenteAbout"><?php echo $_smarty_tpl->getVariable('user')->value['about'];?>
</textarea>
			</div>
			<div class="marginT20 textRight"><input type="submit" value="Salva le modifiche" name="form_profilo_utente1" class="marginR10" /></div>

		

	</form>
	
<?php }elseif($_smarty_tpl->getVariable('user')->value['id_ruolo']==3){?>



		<form class="skinnedForm" method="post" onsubmit="return check_submit();">
		
			<div class="marginT40"><h3 class="pageTitle marginB5"><?php echo $_smarty_tpl->getConfigVariable('immagProfilo');?>
</h3></div>
			<div id="modProfImgContainer">
				<img id="immagineProfilo" src="/resize.php?w=90&h=90&f=<?php echo $_smarty_tpl->getVariable('user')->value['avatar'];?>
" class="left" alt="" />
				<div id="closeIcon_715" style="position:relative; z-index:10000;" class="closeIcon marginL5" onclick="avatarElimina(<?php echo $_smarty_tpl->getVariable('user')->value['id_utente'];?>
);"></div>
			</div>
			
			<div id="modProfImgTools">
				<div class="marginB15 fontS10"><?php echo $_smarty_tpl->getConfigVariable('selNuovaImg');?>
</div>
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
		
		
			<input id="utenteCitta" type="hidden" name="citta" value="<?php echo $_smarty_tpl->getVariable('user')->value['citta'];?>
" />

			<div class="marginT40"><h3 class="pageTitle marginB5"><?php echo $_smarty_tpl->getConfigVariable('cambiaPass');?>
</h3></div>
			<div class="fontS10 marginB15"><?php echo $_smarty_tpl->getConfigVariable('passMin6');?>
</div>
			<div class="marginB10">
				<label for="utentePass"><?php echo $_smarty_tpl->getConfigVariable('nuovaPass');?>
</label><input id="utentePass" type="password" name="utentePass" value="" />
				<span id="controllo_utentePass"></span>
			</div>
			<div class="marginB10">
				<label for="utentePass2"><?php echo $_smarty_tpl->getConfigVariable('nuovaPass2');?>
</label><input id="utentePass2" type="password" name="utentePass2" value=""  />
				<span id="controllo_utentePass2"></span>
			</div>
			<div class="marginT20 textRight"><input type="submit" value="Salva le modifiche" name="form_profilo_utente1" class="marginR10" /></div>

		</form>
		
<?php }?>

</div>
<script>

function avatarElimina(id) {

	$.ajax({
	  url: '/ajax/utente_avatar_elimina.php?uid='+id,
	  success: function(data) {
			$('#immagineProfilo').attr('src','/resize.php?w=90&h=90&f='+data);
	  }
	});

}


var uploading = false;

var uploader = new qq.FileUploader({
  // pass the dom node (ex. $(selector)[0] for jQuery users)
  element: document.getElementById('file-uploader'),
  // path to server-side upload script
  action: '/ajax/utente_avatar_upload.php',
  // ex. ['jpg', 'jpeg', 'png', 'gif'] or []
	allowedExtensions: ['jpg', 'jpeg', 'png', 'gif'],
	multiple: false,
	listElement: document.getElementById('lista_file'),
	onSubmit: function(id, fileName){
		uploading = true;
		$('#lista_file').html('');
	},
	onComplete: function(id, fileName, responseJSON){
		uploading = false;
		//$('#immagineProfilo').attr('src','/resize.php?w=90&h=90&f=/images/avatar/<?php echo $_smarty_tpl->getVariable('user')->value['id_utente'];?>
/resized_temp_avatar.jpeg');
		$('#immagineProfilo').attr('src','/resize.php?w=90&h=90&f=/images/avatar/<?php echo $_smarty_tpl->getVariable('user')->value['id_utente'];?>
/1.jpeg');
	},
	params: {
		uid: '<?php echo $_smarty_tpl->getVariable('user')->value['id_utente'];?>
'
	}
});

function check_submit() {

	if ($('#utentePass').val() == '') return true;
	else if (!ValidateForm_(controlFields, 'submit') || uploading) return false;
	else return true;

}

/*function utente_profilo_modifica() {

	id=<?php echo $_smarty_tpl->getVariable('user')->value['id_utente'];?>
;
	nome=$('#utenteNome').val();
	cognome=$('#utenteCognome').val();
	citta=$('#utenteCitta').val();
	about=$('#utenteAbout').val();

	$.ajax({
	  url: '/ajax/utente_profilo_update.php?id='+id+'&nome='+nome+'&cognome='+cognome+'&citta='+citta+'&about='+about,
	  success: function(data) {
			if (data == "1") {
				//Cosa fare dopo l'aggiornamento del profilo?
			}
	  }
	});

}*/

controlFields=new Array();

/*controlNew = new Array();
controlNew['nome'] = "utenteNome";
controlNew['lenght'] = 1;
controlNew['type'] = 1;
controlFields.push(controlNew);

controlNew = new Array();
controlNew['nome'] = "utenteCognome";
controlNew['lenght'] = 1;
controlNew['type'] = 1;
controlFields.push(controlNew);*/

<?php if (!isset($_SESSION['fb_session'])){?>
controlNew = new Array();
controlNew['nome'] = "utentePass";
controlNew['nome_esteso'] = "Password";
controlNew['lenght'] = 6;
controlNew['type'] = 1;
controlFields.push(controlNew);

controlNew = new Array();
controlNew['nome'] = "utentePass2";
controlNew['nome_esteso'] = "Conferma password";
controlNew['compare'] = 'utentePass';
controlNew['type'] = 10;
controlFields.push(controlNew);
<?php }?>

addListeners (controlFields);


</script>

<div class="demo-description" id="modalControlli">
</div>

<?php $_template = new Smarty_Internal_Template("includes/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>