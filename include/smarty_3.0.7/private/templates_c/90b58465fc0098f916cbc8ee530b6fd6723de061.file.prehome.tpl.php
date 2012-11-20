<?php /* Smarty version Smarty-3.0.7, created on 2012-05-24 19:07:49
         compiled from "/var/www/test.decorourbano.org/templates/prehome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2331294844fbe6ae52f2962-26700636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90b58465fc0098f916cbc8ee530b6fd6723de061' => 
    array (
      0 => '/var/www/test.decorourbano.org/templates/prehome.tpl',
      1 => 1337879263,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2331294844fbe6ae52f2962-26700636',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/test.decorourbano.org/include/smarty_3.0.7/libs/plugins/modifier.truncate.php';
?>

<?php $_template = new Smarty_Internal_Template("includes/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>


		<div id="bodyPrehome">
			<div id="topCategories" onclick="location.href='<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['listaSegnalazioni'];?>
'"></div>
			<div id="topIntro" onclick="location.href='<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['listaSegnalazioni'];?>
'">
				<h1><?php echo $_smarty_tpl->getConfigVariable('contribuisci');?>
</h1>
				<h2><strong><?php echo $_smarty_tpl->getConfigVariable('decoro');?>
</strong> <?php echo $_smarty_tpl->getConfigVariable('progetto');?>
</h2>
			</div>	
			<div id="cittadiniAttivi">
				<b><?php echo number_format($_smarty_tpl->getVariable('abitanti_attivi')->value,0,",",".");?>
 cittadini</b><i>Fonte ISTAT</i><br />
				possono segnalare il degrado nei <a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['comuniAttivi'];?>
"><span class="fOrange fUnderline fBold">Comuni Attivi</span></a>. Invita il tuo comune ad aderire gratuitamente! WE DU! 
			</div>
			<div id="midContainer">	
				<div id="leftMobile" onclick="location.href='<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['applicazioni'];?>
'">
					<div class="marginT40">
						<a href="http://itunes.apple.com/it/app/wedu-decoro-urbano/id441229423?mt=8&ls=1" target="_blank">
							<img src="/images/dispositivi/appStoreBadge.png" class="marginR10" />
						</a>
						<a href="https://market.android.com/details?id=it.maioralabs.decorourbano" target="_blank">
							<img src="/images/dispositivi/androidMarketBadge.png" class="right" />
						</a>
					</div>
					<div class="marginT10"><?php echo $_smarty_tpl->getConfigVariable('appIntro');?>
</div>
				</div>
				<div id="rightRegister">
					<h3 class="marginB5"><?php echo $_smarty_tpl->getConfigVariable('regIntro');?>
</h3>
					<img src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
/images/prehome/du.png"  alt="" />
					<div id="rightRegisterIntro">
						<fb:login-button scope="<?php echo $_smarty_tpl->getVariable('settings')->value['facebook']['perms'];?>
" show-faces="false" max-rows="1" onlogin="check_fb_status();" class="left" autologoutlink="false">
							<?php echo $_smarty_tpl->getConfigVariable('fbAccedi');?>

						</fb:login-button>
						<div class="auto marginL10 marginT5"><?php echo $_smarty_tpl->getConfigVariable('consigliato');?>
</div>
					</div>
					<h3 class="marginT5 marginB5" style="width:325px;"><?php echo $_smarty_tpl->getConfigVariable('regDU');?>
</h3>
					<form action="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['registrati'];?>
" method="post" onsubmit="return ValidateForm_(controlFields, 'submit');">
							<div>
								<label for="regNome"><?php echo $_smarty_tpl->getConfigVariable('nome');?>
</label> 
								<input name="regNome" id="regNome" type="text" autocomplete="off" />
								<span id="controllo_regNome" class="regPrehomeControllo"></span>
							</div>
							<div>
								<label for="regCognome"><?php echo $_smarty_tpl->getConfigVariable('cognome');?>
</label> 
								<input name="regCognome" id="regCognome" type="text" autocomplete="off" />
								<span id="controllo_regCognome" class="regPrehomeControllo"></span>
							</div>
							<div>
								<label for="regCognomeNascosto"><?php echo $_smarty_tpl->getConfigVariable('cognomeNascosto');?>
</label> 
								<input name="regCognomeNascosto" id="regCognomeNascosto" type="checkbox" />
							</div>
							<div>
								<label for="regAssociazione"><?php echo $_smarty_tpl->getConfigVariable('utenteAssociazione');?>
</label> 
								<input name="regAssociazione" id="regAssociazione" type="checkbox" onclick="toggle_associazione();" />
							</div>
							<div>
								<label for="regNomeAssociazione"><?php echo $_smarty_tpl->getConfigVariable('nomeAssociazione');?>
</label>
								<input name="regNomeAssociazione" id="regNomeAssociazione" type="text" disabled="true" />
							</div>
							<div>
								<label for="regEmail"><?php echo $_smarty_tpl->getConfigVariable('email');?>
</label> 
								<input name="regEmail" id="regEmail" type="text" autocomplete="off" />
								<span id="controllo_regEmail" class="regPrehomeControllo"></span>
							</div>
							<div>
								<label for="regConfermaEmail"><?php echo $_smarty_tpl->getConfigVariable('email2');?>
</label> 
								<input name="regConfermaEmail" id="regConfermaEmail" type="text" autocomplete="off" />
								<span id="controllo_regConfermaEmail" class="regPrehomeControllo"></span>
							</div>
							<div>
								<label for="regPassword"><?php echo $_smarty_tpl->getConfigVariable('pass');?>
</label> 
								<input name="regPassword" id="regPassword" type="password" autocomplete="off" />
								<span id="controllo_regPassword" class="regPrehomeControllo"></span>
							</div>
							<div class="fontS10 marginL10" style="width:300px;">
								<?php echo $_smarty_tpl->getConfigVariable('regAccetta1');?>
 <a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['tos'];?>
" target="_blank"><?php echo $_smarty_tpl->getConfigVariable('condizioni');?>
</a> <?php echo $_smarty_tpl->getConfigVariable('regAccetta2');?>
 
								<a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['privacy'];?>
" target="_blank"><?php echo $_smarty_tpl->getConfigVariable('privacy');?>
</a>
							</div>
							<div class="skinnedForm">
								<input type="submit" name="form_registrazione" class="right marginR30" value="<?php echo $_smarty_tpl->getConfigVariable('iscriviti');?>
" />
							</div>
						</form>
				</div>
			</div>
			
			<div id="midBoxes">
				<div id="leftBox">
					<h4><?php echo $_smarty_tpl->getConfigVariable('comuneTitle');?>
</h4>
					<div id="comune2Intro"><strong><?php echo $_smarty_tpl->getConfigVariable('decoro');?>
</strong> <?php echo $_smarty_tpl->getConfigVariable('comuneAttivoIntro');?>
</div>
					<div id="comune2Box" onclick="window.open('<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
docs/Decoro_Urbano.pdf','_blank');"></div>
					<ul>
						<div class="fGray marginB5"><?php echo $_smarty_tpl->getConfigVariable('comuneSubTitle');?>
</div>
						<li><img src="/images/prehome/verySmallArrow.png" alt="" /> <?php echo $_smarty_tpl->getConfigVariable('vantaggio1');?>
</li>
						<li><img src="/images/prehome/verySmallArrow.png" alt="" /> <?php echo $_smarty_tpl->getConfigVariable('vantaggio2');?>
</li>
						<li><img src="/images/prehome/verySmallArrow.png" alt="" /> <?php echo $_smarty_tpl->getConfigVariable('vantaggio3');?>
</li>
						<li><img src="/images/prehome/verySmallArrow.png" alt="" /> <?php echo $_smarty_tpl->getConfigVariable('vantaggio4');?>
</li>
					</ul>
					<div id="comune2Contatti">
						<div class="auto left marginT10"><img src="../images/prehome/mailIcon.png" alt="<?php echo $_smarty_tpl->getConfigVariable('numVerde');?>
" title="<?php echo $_smarty_tpl->getConfigVariable('numVerde');?>
" /></div>
						<div class="auto left marginT15 marginL10"><a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['contatti'];?>
"><img src="../images/prehome/email.png" alt="" /></a></div>
						<div class="auto right"><img src="../images/prehome/numVerde.png" alt="<?php echo $_smarty_tpl->getConfigVariable('numVerde');?>
" title="<?php echo $_smarty_tpl->getConfigVariable('numVerde');?>
" /></div>
					</div>
				</div>
				<div id="rightBox">
					<h4 class="fGreen">
						<?php echo $_smarty_tpl->getConfigVariable('ultimeSegn');?>
 
						<div class="auto right fontS10 marginT10"><a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['listaSegnalazioni'];?>
" class="tdNone fNormal"><?php echo $_smarty_tpl->getConfigVariable('vediTutte');?>
</a></div>
					</h4>
					<div id="ultimeSegnalazioni">
					
					<script>
					var ultime_segnalazioni = new Array();
					</script>
					
					<?php  $_smarty_tpl->tpl_vars['segnalazione'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('ultime_segnalazioni')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['segnalazione']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['segnalazione']->iteration=0;
if ($_smarty_tpl->tpl_vars['segnalazione']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['segnalazione']->key => $_smarty_tpl->tpl_vars['segnalazione']->value){
 $_smarty_tpl->tpl_vars['segnalazione']->iteration++;
 $_smarty_tpl->tpl_vars['segnalazione']->last = $_smarty_tpl->tpl_vars['segnalazione']->iteration === $_smarty_tpl->tpl_vars['segnalazione']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["ultime_segnalazioni"]['last'] = $_smarty_tpl->tpl_vars['segnalazione']->last;
?>
					
					<div id="segnalazione_<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['id_segnalazione'];?>
" class="ultimeSegnalazioni <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['ultime_segnalazioni']['last']){?>borderBDashed<?php }?>" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['url'];?>
'">
						<div class="leftAvatar">
							<a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['vediProfilo'];?>
?idu=<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['id_utente'];?>
"><img src="/resize.php?w=30&h=30&f=<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['avatar'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['cognome'];?>
" /></a>
						</div>
						<div class="rightContents">
							<img src="<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['foto_base_url'];?>
85-55.jpg" class="marginL5 right" />
							<a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['vediProfilo'];?>
?idu=<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['id_utente'];?>
" class="tdNone"><span class="fBold fontS12">
								<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['cognome'];?>
</span>
							</a>
							<span class="fBold fontS12"><?php echo ConvertitoreData_UNIXTIMESTAMP_IT($_smarty_tpl->tpl_vars['segnalazione']->value['data']);?>
</span><br />
							<span class="fontS14 fGeorgia"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['segnalazione']->value['messaggio'],37,"...");?>
</span><br />
							<div class="auto fontS10 fGreen" style="margin-top:-1px;"> <?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['citta'];?>
 - <?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['indirizzo'];?>
 <?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['civico'];?>
</div>
							<?php if ($_smarty_tpl->tpl_vars['segnalazione']->value['client']=='iPhone'){?><div class="auto fontS10 clear" style="margin-top:-10px;">via <a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['applicazioni'];?>
">iPhone</a></div><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['segnalazione']->value['client']=='Android'){?><div class="auto fontS10 clear" style="margin-top:-10px;">via <a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['applicazioni'];?>
">Android</a></div><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['segnalazione']->value['client']=='Windows Phone'){?><div class="auto fontS10 clear" style="margin-top:-10px;">via <a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['applicazioni'];?>
">Windows Phone</a></div><?php }?>

						</div>
					</div>
					
					<script>
						var seg = new Array();
						seg['data'] = <?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['data'];?>
;
						seg['id_segnalazione'] = <?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['id_segnalazione'];?>
;
						ultime_segnalazioni.push(seg);
					</script>
					
					<?php }} ?>
					</div>
				</div>
			</div>
			
			<div id="twitterBox"  >
				<div id="twitterFollowBox">
					<a href="<?php echo $_smarty_tpl->getVariable('settings')->value['social']['twitter'];?>
" target="_blank"><img src="/images/prehome/tweet.png" alt="" /></a> 
				</div>
				<img src="<?php echo $_smarty_tpl->getVariable('ultimo_tweet_avatar')->value;?>
" style="width:30px;" class="marginT25 marginR10 left" />
				<div id="twitterText">
					<div class="marginT25 auto"><a href="http://www.twitter.com/<?php echo $_smarty_tpl->getVariable('ultimo_tweet_from_user')->value;?>
" class="fBrown fBold tdNone" target="_blank"><?php echo $_smarty_tpl->getVariable('ultimo_tweet_from_user')->value;?>
</a> <?php echo $_smarty_tpl->getVariable('ultimo_tweet')->value;?>
				</div>
				</div>
				<div class="auto right fontS10 fArial"><?php echo $_smarty_tpl->getVariable('ultimo_tweet_time')->value;?>
</div>
			</div>
			
			<div id="bottomBox">
			
				<div id="topSegnBox">
					<h5 onclick="location.href='<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['topSegnalatori'];?>
'" style="cursor:pointer;"><img src="../images/prehome/topSegnalatori.png" alt="" class="marginR5 left" /> <?php echo $_smarty_tpl->getConfigVariable('topSegn');?>
</h5>
					<div class="bottomBoxBody">
					
						<?php  $_smarty_tpl->tpl_vars['segnalatore'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('segnalatori_top')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['segnalatore']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['segnalatore']->iteration=0;
if ($_smarty_tpl->tpl_vars['segnalatore']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['segnalatore']->key => $_smarty_tpl->tpl_vars['segnalatore']->value){
 $_smarty_tpl->tpl_vars['segnalatore']->iteration++;
 $_smarty_tpl->tpl_vars['segnalatore']->last = $_smarty_tpl->tpl_vars['segnalatore']->iteration === $_smarty_tpl->tpl_vars['segnalatore']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['segnalatori']['last'] = $_smarty_tpl->tpl_vars['segnalatore']->last;
?>

						<div class="bottomBoxSegnalazione <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['segnalatori']['last']){?>borderBDashed marginB10<?php }?>">
							<a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['vediProfilo'];?>
?idu=<?php echo $_smarty_tpl->tpl_vars['segnalatore']->value['id_utente'];?>
"><img src="/resize.php?w=30&h=30&f=<?php echo $_smarty_tpl->tpl_vars['segnalatore']->value['avatar'];?>
" class="left" /></a>
							<div class="bottomBoxSegnInfos">
								<a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['vediProfilo'];?>
?idu=<?php echo $_smarty_tpl->tpl_vars['segnalatore']->value['id_utente'];?>
" class="tdNone">
									<div class="fontS14 fBold"><?php echo $_smarty_tpl->tpl_vars['segnalatore']->value['nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['segnalatore']->value['cognome'];?>
</div>
								</a>
								<div class="fontS10"><?php echo $_smarty_tpl->tpl_vars['segnalatore']->value['n_segnalazioni'];?>
 Segnalazioni</div>
								<div class="textRight fontS10"><?php echo $_smarty_tpl->tpl_vars['segnalatore']->value['citta'];?>
</div>
							</div>
						</div>

						<?php }} ?>
					</div>
				</div>
				
				<div id="newSegnBox">
					<h5><img src="../images/prehome/newSegnalatori.png" alt="" class="marginR5 left" /> <?php echo $_smarty_tpl->getConfigVariable('nuoviSegn');?>
</h5>
					<div class="bottomBoxBody">
						<?php  $_smarty_tpl->tpl_vars['utente'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('nuovi_utenti')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['utente']->key => $_smarty_tpl->tpl_vars['utente']->value){
?>
							<a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['vediProfilo'];?>
?idu=<?php echo $_smarty_tpl->tpl_vars['utente']->value['id_utente'];?>
"><img src="/resize.php?w=67&h=67&f=<?php echo $_smarty_tpl->tpl_vars['utente']->value['avatar'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['utente']->value['nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['utente']->value['cognome'];?>
" class="left" /></a>
						<?php }} ?>
					</div>
				</div>
				<div id="facebookBox">
					<iframe src="http://www.facebook.com/plugins/fan.php?id=211422328889297&amp;size=large&amp;width=410&amp;height=237&amp;stream=false&amp;header=false&amp;connections=14" scrolling="no" frameborder="0" allowTransparency="true" style="width:410px; height:237px; overflow:hidden;"></iframe>
				</div>
 

					
			
					
				</div>
			</div>
			
		</div>





<script>

//var newest = <?php echo $_smarty_tpl->getVariable('ultima_segnalazione')->value['data'];?>
;
//newest = 1305122836;

controlFields=new Array();

controlNew = new Array();
controlNew['nome'] = "regNome";
controlNew['nome_esteso'] = "Nome";
controlNew['lenght'] = 1;
controlNew['type'] = 1;
controlFields.push(controlNew);

controlNew = new Array();
controlNew['nome'] = "regCognome";
controlNew['nome_esteso'] = "Cognome";
controlNew['lenght'] = 1;
controlNew['type'] = 1;
controlFields.push(controlNew);

controlNew = new Array();
controlNew['nome'] = "regEmail";
controlNew['nome_esteso'] = "Indirizzo email";
controlNew['lenght'] = 0;
controlNew['type'] = 2;
controlFields.push(controlNew);

controlNew = new Array();
controlNew['nome'] = "regPassword";
controlNew['nome_esteso'] = "Password";
controlNew['lenght'] = 6;
controlNew['type'] = 1;
controlFields.push(controlNew);

controlNew = new Array();
controlNew['nome'] = "regConfermaEmail";
controlNew['nome_esteso'] = "Conferma indirizzo email";
controlNew['compare'] = 'regEmail';
controlNew['type'] = 10;
controlFields.push(controlNew);



function segnalazione_nuova_get() {

	//newest = 0;
	$.ajax({
		url: '/ajax/segnalazioni_get.php?t_newer='+ultime_segnalazioni[0].data,
		dataType: "json",
		success: function(data) {
		
			if (data && data.length) {
			
				data = data.reverse();
		
				for(i in data) {
					nuova_segnalazione_scorri(data[i]);
				}
				
			}

		},
		complete: function(seg) {
			lock = 0;
		}
	});

}

function nuova_segnalazione_scorri(seg) {

	var temp = new Array();
	temp['data'] = seg.data;
	temp['id_segnalazione'] = seg.id_segnalazione;
	ultime_segnalazioni.unshift(temp);

	segnalazioneHTML = '\
		<div id="segnalazione_'+seg.id_segnalazione+'" class="ultimeSegnalazioni borderBDashed" style="display:none;" onclick="location.href=\''+seg.url+'\'">\
			<div class="leftAvatar"><a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['vediProfilo'];?>
?idu='+seg.id_utente+'"><img src="/resize.php?w=30&h=30&f='+seg.avatar+'" alt="'+seg.nome+' '+seg.cognome+'" /></a></div>\
			<div class="rightContents">\
				<img src="'+seg.foto_base_url+'85-55.jpg" class="marginL5 right" />\
				<a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['vediProfilo'];?>
?idu='+seg.id_utente+'"><span class="fBold fontS12 fGreen">'+seg.nome+' '+seg.cognome+'</span></a>\
				<span class="fBold fontS12">'+relativeTime(seg.data)+'</span><br />\
				<span class="fontS14 fGeorgia">'+seg.messaggio+'</span><br />\
				<span class="fontS10 fGreen"><div class="rifiutiSmallIcon auto"></div> '+seg.citta+' - '+seg.indirizzo+' '+seg.civico+'</span>\
			</div>\
		</div>';

	$('#ultimeSegnalazioni').prepend(segnalazioneHTML);
	$('#segnalazione_'+seg.id_segnalazione).slideToggle("slow");
	$('#segnalazione_'+ultime_segnalazioni[ultime_segnalazioni.length-1].id_segnalazione).slideToggle("slow", function() {
		$('#segnalazione_'+ultime_segnalazioni[ultime_segnalazioni.length-1].id_segnalazione).remove();
		ultime_segnalazioni.pop();
	});

	

}


function toggle_associazione() {

  if ($('#regAssociazione').is(':checked')) {
  	$('#regNomeAssociazione').removeAttr('disabled');
  } else {
		$('#regNomeAssociazione').attr('disabled', true);
  }   

}


window.onload=function() {
	$('.segnListaText').ThreeDots({ max_rows:2 });
	addListeners (controlFields);
	//interval = setInterval ( "segnalazione_nuova_get()", 30000 );
}

</script>

<div class="demo-description" id="modalControlli">
</div>


<?php $_template = new Smarty_Internal_Template("includes/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
