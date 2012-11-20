<?php /* Smarty version Smarty-3.0.7, created on 2012-04-22 05:49:47
         compiled from "/var/www/test.decorourbano.org/templates/topSegnalatori.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1105383514f937fdbc0de55-59193850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe040e2fb0667114172674f505310df2b7f401c8' => 
    array (
      0 => '/var/www/test.decorourbano.org/templates/topSegnalatori.tpl',
      1 => 1333467934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1105383514f937fdbc0de55-59193850',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_math')) include '/var/www/test.decorourbano.org/include/smarty_3.0.7/libs/plugins/function.math.php';
if (!is_callable('smarty_function_cycle')) include '/var/www/test.decorourbano.org/include/smarty_3.0.7/libs/plugins/function.cycle.php';
?>

<?php $_template = new Smarty_Internal_Template("includes/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<div class="rightPageHeader">
	<div class="rightHeadText"><h3 class="fontS18 marginB5 fBrown"><?php echo $_smarty_tpl->getConfigVariable('titolo');?>
</h3>
		<?php echo $_smarty_tpl->getConfigVariable('intro');?>

	</div>
	<div class="rightHeadIcon"><div class="rhiTopSegnalatori"></div></div>
</div>

<div class="testoFumetto">
	<div><h3 class="pageTitle auto left marginB15"><?php echo $_smarty_tpl->getConfigVariable('criterio1');?>
</h3><span class="right fontS10"><?php echo $_smarty_tpl->getConfigVariable('dataAgg');?>
 <?php echo smarty_function_math(array('assign'=>'tsdate','equation'=>"x - (24*60*60)",'x'=>time()),$_smarty_tpl);?>
<?php echo ConvertitoreData_UNIXTIMESTAMP_IT($_smarty_tpl->getVariable('tsdate')->value);?>
</span></div>
	<table id="topSegnLista" cellspacing="0" cellpadding="0">
		<tr>
			<th>#</th>
			<th colspan="2"><?php echo $_smarty_tpl->getConfigVariable('segnalatore');?>
</th>
			<th><?php echo $_smarty_tpl->getConfigVariable('citta');?>
</th>
			<th><?php echo $_smarty_tpl->getConfigVariable('segnalazioni');?>
</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['segnalatore'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('segnalatori_top')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['segnalatori']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['segnalatore']->key => $_smarty_tpl->tpl_vars['segnalatore']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['segnalatori']['index']++;
?>

		<tr class="<?php echo smarty_function_cycle(array('values'=>"lightGrayBG,"),$_smarty_tpl);?>
">
			<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['segnalatori']['index']+1;?>
</td>
			<td >
				<a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['vediProfilo'];?>
?idu=<?php echo $_smarty_tpl->tpl_vars['segnalatore']->value['id_utente'];?>
" class="paddY10"><img src="/resize.php?w=30&h=30&f=<?php echo $_smarty_tpl->tpl_vars['segnalatore']->value['avatar'];?>
" /></a>
			</td>
			<td>
				<a href="<?php echo $_smarty_tpl->getVariable('settings')->value['sito']['vediProfilo'];?>
?idu=<?php echo $_smarty_tpl->tpl_vars['segnalatore']->value['id_utente'];?>
" class="paddY10 tdNone fBold"><?php echo $_smarty_tpl->tpl_vars['segnalatore']->value['nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['segnalatore']->value['cognome'];?>
</a>
			</td>
			<td><?php echo $_smarty_tpl->tpl_vars['segnalatore']->value['citta'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['segnalatore']->value['n_segnalazioni'];?>
</td>
		</tr>

		<?php }} ?>
	</table>
</div>

<?php $_template = new Smarty_Internal_Template("includes/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>