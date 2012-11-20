<?php /* Smarty version Smarty-3.0.7, created on 2012-07-02 22:30:38
         compiled from "/htdocs/web//mappa/templates/prehome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1089109314ff204ee3ed1d3-77810225%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e97716eaa41f74a2fef2e421cc94349cca09661f' => 
    array (
      0 => '/htdocs/web//mappa/templates/prehome.tpl',
      1 => 1341261036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1089109314ff204ee3ed1d3-77810225',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_truncate')) include '/htdocs/public/www/mappa/include/smarty_3.0.7/libs/plugins/modifier.truncate.php';
?>

<?php $_template = new Smarty_Internal_Template("includes/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>




		<div id="bodyPrehome">

			<div id="topIntro" class="textJustify">
				Le foto dei danni, le richieste e le offerte di aiuto, le strutture di emergenza e le buone pratiche di chi ha trovato un modo intelligente e generoso di affrontare il dopo terremoto: la mappa della protezione civica è tutto questo. Un contenitore per tutte le vostre segnalazioni georeferenziate in modo da tenere sempre un faro acceso sull'Emilia e contribuire ad una ricostruzione trasparente e partecipata delle zone colpite dal sisma. 
			</div>	

			<div id="mapContainerSmall">
				<div class="mapControls">
					<img src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/iconFullScreenOn.png" alt="" id="fullScreenOn" />
					<img src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/buttInviaSegnalazione.png" alt="" id="inviaSegnalazioneButton" />
				</div>
				<?php $_template = new Smarty_Internal_Template("listaSegnalazioni.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
			</div>
			
			<div id="tipoSegnalazione" class="none">
				Cosa vuoi segnalare?<br /><br />
				<img src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/inviaBuonaPratica.png" alt="Invia buona pratica" onclick="location.href='<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['inviaBuonaPratica'];?>
'" />
				<img src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
images/inviaSegnalazione.png" alt="Invia buona pratica" onclick="location.href='<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['inviaSegnalazione'];?>
'" />
			</div>

			<script>
				$('#fullScreenOn').click(function() {
					var height = $(window).height();  
					// sottraggo l'altezza dell'header
					
					height = height - 75;
					
					$('#mapContainerBig').height(height);
					
					$('#mapContainerBig').fadeIn(1000, function() {
						$('.container').fadeOut(100, function() {
							$('#bigMapLoading').fadeOut(100, function() {
							
								$('#listaSegnalazioni').height(height);
								$('#listaSegnMappa').height(height);
								$('#map_canvas_list').height(height);

								$('#listaSegnalazioni').appendTo("#mapContainerBig");

								var centro = du_map.map.getCenter();
								google.maps.event.trigger(du_map.map, "resize");
								du_map.map.setCenter(centro);
								
								$('#mapFilters').delay(500).fadeIn(1200);

							}); 
						}); 
					}); 
				});
				
				$('#fullScreenOff').click(function() {
				
					$('#mapFilters').fadeOut(300, function() {
					
						$('#listaSegnalazioni').fadeOut(300, function() {

							$('#listaSegnalazioni').height(450);
							$('#listaSegnMappa').height(450);
							$('#map_canvas_list').height(445);
							
							$('#listaSegnalazioni').appendTo("#mapContainerSmall");

							$('.container').fadeIn(200, function() {
							
								$('#listaSegnalazioni').show();
								$('#mapContainerBig').hide();
								var centro = du_map.map.getCenter();
								google.maps.event.trigger(du_map.map, "resize");
								du_map.map.setCenter(centro);
								
							});
						});
						
					});
					
					
				});
			</script>
			
			<?php if (!$_smarty_tpl->getVariable('user')->value){?>
				<script>
		
				$('#inviaSegnalazioneButton').click(function() {
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
					});
					
					$('#inviaSegnalazioneButton2').click(function() {
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
					});
		
			</script>	
			<?php }else{ ?>
			<script>
				$('#inviaSegnalazioneButton').click(function() {
					$( "#tipoSegnalazione" ).dialog({
						width:400,
						modal: true,
						draggable:false,
						resizable:false,
						dialogClass: 'inviaSegnalazioneScelta'
					});
				});
					
				$('#inviaSegnalazioneButton2').click(function() {
					$( "#tipoSegnalazione" ).dialog({
						width:400,
						modal: true,
						draggable:false,
						resizable:false,
						dialogClass: 'inviaSegnalazioneScelta'
					});
				});
		
			</script>	
			<?php }?>
			
			
			
			
			<div id="midBoxes">
				
				<h4 class="fBlue padd0 margin0 marginT15 marginB5">
					Ultime Segnalazioni
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
" class="ultimeSegnalazioni <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['ultime_segnalazioni']['last']){?>borderBDashed<?php }else{ ?>margin0 padd0<?php }?>">
					<img src="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['foto_base_url'];?>
85-55.jpg" class="marginR5 left" style="z-index:1000;" />
					<div class="closeIcon right marginB5" id="closeIcon_<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['id_segnalazione'];?>
"></div>
					<span class="fontS10"><?php echo ConvertitoreData_UNIXTIMESTAMP_IT($_smarty_tpl->tpl_vars['segnalazione']->value['data']);?>
</span> - 
					<span class="marginT5 fontS10"><?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['indirizzo'];?>
 <?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['civico'];?>
, <?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['cap'];?>
 <?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['citta'];?>
</span><br />
					<span class="fontS14 fGeorgia"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['segnalazione']->value['messaggio'],130,"...");?>
</span> - <a href="<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['url'];?>
" class="fontS10">Vedi dettagli</a><br />

					<div style="display:none;" id="dialog-confirm_<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['id_segnalazione'];?>
" title="">
					<p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span><span id="testoBoxConferma_<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['id_segnalazione'];?>
"></span></p>
					</div>


					<script>
					
						function segnalazioneElimina(id) {

							$.ajax({
							  url: '<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
ajax/segnalazione_elimina.php?id='+id,
							  success: function(data) {
									if (data == "1") {
									  $('#segnalazione_'+id).remove();
									}
							  }
							});
						
						}


						function segnalazioneImpropria(ids,idu) {
						
							$.ajax({
							  url: '<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['url'];?>
ajax/segnalazione_impropria.php?ids='+ids+'&idu='+idu,
							  success: function(data) {
									if (data == "1") {
									  alert('Grazie per il tuo contributo!');
									}
							  }
							});
						
						}


					
						var seg = new Array();
						seg['data'] = <?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['data'];?>
;
						seg['id_segnalazione'] = <?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['id_segnalazione'];?>
;
						ultime_segnalazioni.push(seg);
						
						<?php if ($_smarty_tpl->getVariable('user')->value){?>
							<?php if ($_smarty_tpl->getVariable('user')->value['id_utente']==$_smarty_tpl->tpl_vars['segnalazione']->value['id_utente']){?>
								
								$('#closeIcon_<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['id_segnalazione'];?>
').click(function(){

									$('#testoBoxConferma_<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['id_segnalazione'];?>
').html('<?php echo $_smarty_tpl->getConfigVariable('eliminaSegnMex');?>
');
							
									$( "#dialog-confirm_<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['id_segnalazione'];?>
").dialog({
										resizable: false,
										movable: false,
										height:200,
										width:300,
										modal: true,
										title: '<?php echo $_smarty_tpl->getConfigVariable('eliminaSegnTitle');?>
',
										buttons: {
											"<?php echo $_smarty_tpl->getConfigVariable('procedi');?>
": function() {
												segnalazioneElimina(<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['id_segnalazione'];?>
);
												$( this ).dialog( "close" );
											},
											"<?php echo $_smarty_tpl->getConfigVariable('annulla');?>
": function() {
												$( this ).dialog( "close" );
											}
										}
									});
							
								});
								
							<?php }else{ ?>
							
								$('#closeIcon_<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['id_segnalazione'];?>
').click(function(){

									$('#testoBoxConferma_<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['id_segnalazione'];?>
').html('<?php echo $_smarty_tpl->getConfigVariable('segnalaSegnMex');?>
');
							
									$( "#dialog-confirm_<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['id_segnalazione'];?>
").dialog({
										resizable: false,
										movable: false,
										height:200,
										width:300,
										modal: true,
										title: '<?php echo $_smarty_tpl->getConfigVariable('segnalaSegnTitle');?>
',
										buttons: {
											"<?php echo $_smarty_tpl->getConfigVariable('procedi');?>
": function() {
												segnalazioneImpropria(<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['id_segnalazione'];?>
,<?php echo $_smarty_tpl->getVariable('user')->value['id_utente'];?>
);
												$( this ).dialog( "close" );
											},
											"<?php echo $_smarty_tpl->getConfigVariable('annulla');?>
": function() {
												$( this ).dialog( "close" );
											}
										}
									});
							
								});
								
							<?php }?>
						<?php }else{ ?>
							$('#closeIcon_<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['id_segnalazione'];?>
').click(function(){
							
								$('#testoBoxConferma_<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['id_segnalazione'];?>
').html('E\' necessario essere utenti registrati per effettuare questa operazione');
						
								$( "#dialog-confirm_<?php echo $_smarty_tpl->tpl_vars['segnalazione']->value['id_segnalazione'];?>
").dialog({
									resizable: false,
									movable: false,
									height:200,
									width:300,
									modal: true,
									title: 'Registrazione necessaria',
									buttons: {
										"<?php echo $_smarty_tpl->getConfigVariable('annulla');?>
": function() {
											$( this ).dialog( "close" );
										}
									}
								});
						
							});
						<?php }?>
						
	
							
						
						
					</script>
					
					</div>
					
					

					
					
					
					<?php }} ?>
					
				</div>
			</div>
	
			

			</div>
			






<script>

window.onload=function() {
	du_map.init('#map_canvas_list',initialLocation,zoom);
	segnalazioni_first_load();
	$( "#listaSegnFiltersCategoria" ).buttonset();
	$( "#listaSegnFilters" ).show();
	$('.segnListaText').ThreeDots({ max_rows:2 });
}


</script>

<div class="demo-description" id="modalControlli">
</div>


<?php $_template = new Smarty_Internal_Template("includes/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
