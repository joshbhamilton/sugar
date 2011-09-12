<?php /* Smarty version 2.6.11, created on 2011-09-01 15:12:50
         compiled from include/ListView/ListViewNoMassUpdate.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'include/ListView/ListViewNoMassUpdate.tpl', 56, false),array('function', 'sugar_translate', 'include/ListView/ListViewNoMassUpdate.tpl', 61, false),array('function', 'sugar_getimagepath', 'include/ListView/ListViewNoMassUpdate.tpl', 65, false),array('function', 'sugar_evalcolumn_old', 'include/ListView/ListViewNoMassUpdate.tpl', 105, false),array('function', 'sugar_field', 'include/ListView/ListViewNoMassUpdate.tpl', 107, false),array('modifier', 'default', 'include/ListView/ListViewNoMassUpdate.tpl', 59, false),array('modifier', 'lower', 'include/ListView/ListViewNoMassUpdate.tpl', 61, false),)), $this); ?>

<?php if ($this->_tpl_vars['overlib']): ?>
	<script type='text/javascript' src='include/javascript/overlibmws.js'></script>
	<script type='text/javascript' src='include/javascript/overlibmws_iframe.js'></script>
	<div id='overDiv' style='position:absolute; visibility:hidden; z-index:1000;'></div>
<?php endif; ?>

<table cellpadding='0' cellspacing='0' width='100%' border='0' class='list View'>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'include/ListView/ListViewPagination.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<tr height='20'>
	    <?php if (! empty ( $this->_tpl_vars['quickViewLinks'] )): ?>
		<th scope='col' nowrap="nowrap" width='1%'>&nbsp;</th>
		<?php endif; ?>
		<?php echo smarty_function_counter(array('start' => 0,'name' => 'colCounter','print' => false,'assign' => 'colCounter'), $this);?>

		<?php $_from = $this->_tpl_vars['displayColumns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['colHeader'] => $this->_tpl_vars['params']):
?>
			<th scope='col' width='<?php echo $this->_tpl_vars['params']['width']; ?>
%' nowrap="nowrap">
				<span sugar="sugar<?php echo $this->_tpl_vars['colCounter']; ?>
"><div style='white-space: nowrap;'width='100%' align='<?php echo ((is_array($_tmp=@$this->_tpl_vars['params']['align'])) ? $this->_run_mod_handler('default', true, $_tmp, 'left') : smarty_modifier_default($_tmp, 'left')); ?>
'>
                <?php if (((is_array($_tmp=@$this->_tpl_vars['params']['sortable'])) ? $this->_run_mod_handler('default', true, $_tmp, true) : smarty_modifier_default($_tmp, true))): ?>
	                <a href='<?php echo $this->_tpl_vars['pageData']['urls']['orderBy'];  echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['params']['orderBy'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['colHeader']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['colHeader'])))) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
' class='listViewThLinkS1'><?php echo smarty_function_sugar_translate(array('label' => $this->_tpl_vars['params']['label'],'module' => $this->_tpl_vars['pageData']['bean']['moduleDir']), $this);?>
</a>&nbsp;&nbsp;
					<?php if (((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['params']['orderBy'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['colHeader']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['colHeader'])))) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)) == $this->_tpl_vars['pageData']['ordering']['orderBy']): ?>
						<?php if ($this->_tpl_vars['pageData']['ordering']['sortOrder'] == 'ASC'): ?>
							<?php ob_start(); ?>arrow_down.<?php echo $this->_tpl_vars['arrowExt'];  $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('imageName', ob_get_contents());ob_end_clean(); ?>
							<img border='0' src='<?php echo smarty_function_sugar_getimagepath(array('file' => $this->_tpl_vars['imageName']), $this);?>
' width='<?php echo $this->_tpl_vars['arrowWidth']; ?>
' height='<?php echo $this->_tpl_vars['arrowHeight']; ?>
' align='absmiddle' alt='<?php echo $this->_tpl_vars['arrowAlt']; ?>
'>
						<?php else: ?>
							<?php ob_start(); ?>arrow_up.<?php echo $this->_tpl_vars['arrowExt'];  $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('imageName', ob_get_contents());ob_end_clean(); ?>
							<img border='0' src='<?php echo smarty_function_sugar_getimagepath(array('file' => $this->_tpl_vars['imageName']), $this);?>
' width='<?php echo $this->_tpl_vars['arrowWidth']; ?>
' height='<?php echo $this->_tpl_vars['arrowHeight']; ?>
' align='absmiddle' alt='<?php echo $this->_tpl_vars['arrowAlt']; ?>
'>
						<?php endif; ?>
					<?php else: ?>
						<?php ob_start(); ?>arrow.<?php echo $this->_tpl_vars['arrowExt'];  $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('imageName', ob_get_contents());ob_end_clean(); ?>
						<img border='0' src='<?php echo smarty_function_sugar_getimagepath(array('file' => $this->_tpl_vars['imageName']), $this);?>
' width='<?php echo $this->_tpl_vars['arrowWidth']; ?>
' height='<?php echo $this->_tpl_vars['arrowHeight']; ?>
' align='absmiddle' alt='<?php echo $this->_tpl_vars['arrowAlt']; ?>
'>
					<?php endif; ?>
				<?php else: ?>
					<?php echo smarty_function_sugar_translate(array('label' => $this->_tpl_vars['params']['label'],'module' => $this->_tpl_vars['pageData']['bean']['moduleDir']), $this);?>

				<?php endif; ?>
				</div></span sugar='sugar<?php echo $this->_tpl_vars['colCounter']; ?>
'>
			</th>
			<?php echo smarty_function_counter(array('name' => 'colCounter'), $this);?>

		<?php endforeach; endif; unset($_from); ?>
	</tr>

	<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['rowIteration'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['rowIteration']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['rowData']):
        $this->_foreach['rowIteration']['iteration']++;
?>
		<?php if ((1 & $this->_foreach['rowIteration']['iteration'])): ?>
			<?php $this->assign('_rowColor', $this->_tpl_vars['rowColor'][0]); ?>
		<?php else: ?>
			<?php $this->assign('_rowColor', $this->_tpl_vars['rowColor'][1]); ?>
		<?php endif; ?>
		<tr height='20' class='<?php echo $this->_tpl_vars['_rowColor']; ?>
S1'>
			<?php if (! empty ( $this->_tpl_vars['quickViewLinks'] )): ?>
			<td width='1%' nowrap>
				<?php if ($this->_tpl_vars['pageData']['access']['edit'] && $this->_tpl_vars['pageData']['bean']['moduleDir'] != 'Employees'): ?>
					<a title='<?php echo $this->_tpl_vars['editLinkString']; ?>
' href='index.php?action=EditView&module=<?php echo $this->_tpl_vars['pageData']['bean']['moduleDir']; ?>
&record=<?php echo $this->_tpl_vars['rowData']['ID']; ?>
&offset=<?php echo $this->_tpl_vars['pageData']['offsets']['current']+$this->_foreach['rowIteration']['iteration']; ?>
&stamp=<?php echo $this->_tpl_vars['pageData']['stamp']; ?>
&return_module=<?php echo $this->_tpl_vars['pageData']['bean']['moduleDir']; ?>
'><img border="0" src="<?php echo smarty_function_sugar_getimagepath(array('file' => "edit_inline.gif"), $this);?>
"></a>
				<?php endif; ?>
			</td>
			<?php endif; ?>
			<?php echo smarty_function_counter(array('start' => 0,'name' => 'colCounter','print' => false,'assign' => 'colCounter'), $this);?>

			<?php $_from = $this->_tpl_vars['displayColumns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['col'] => $this->_tpl_vars['params']):
?>
				<td scope='row' align='<?php echo ((is_array($_tmp=@$this->_tpl_vars['params']['align'])) ? $this->_run_mod_handler('default', true, $_tmp, 'left') : smarty_modifier_default($_tmp, 'left')); ?>
' <?php if ($this->_tpl_vars['params']['nowrap']): ?>nowrap='nowrap' <?php endif; ?>valign='top'><span sugar="sugar<?php echo $this->_tpl_vars['colCounter']; ?>
b">
					<?php if ($this->_tpl_vars['col'] == 'NAME' || $this->_tpl_vars['params']['bold']): ?><b><?php endif; ?>
				    <?php if ($this->_tpl_vars['params']['link'] && ! $this->_tpl_vars['params']['customCode']): ?>
						<<?php echo ((is_array($_tmp=@$this->_tpl_vars['pageData']['tag'][$this->_tpl_vars['id']][$this->_tpl_vars['params']['ACLTag']])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['pageData']['tag'][$this->_tpl_vars['id']]['MAIN']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['pageData']['tag'][$this->_tpl_vars['id']]['MAIN'])); ?>
 href="#" onMouseOver="javascript:lvg_nav('<?php if ($this->_tpl_vars['params']['dynamic_module']):  echo $this->_tpl_vars['rowData'][$this->_tpl_vars['params']['dynamic_module']];  else:  echo ((is_array($_tmp=@$this->_tpl_vars['params']['module'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['pageData']['bean']['moduleDir']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['pageData']['bean']['moduleDir']));  endif; ?>', '<?php echo ((is_array($_tmp=@$this->_tpl_vars['rowData'][$this->_tpl_vars['params']['id']])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['rowData']['ID']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['rowData']['ID'])); ?>
', 'd', <?php echo $this->_foreach['rowIteration']['iteration']; ?>
, this);"  onFocus="javascript:lvg_nav('<?php if ($this->_tpl_vars['params']['dynamic_module']):  echo $this->_tpl_vars['rowData'][$this->_tpl_vars['params']['dynamic_module']];  else:  echo ((is_array($_tmp=@$this->_tpl_vars['params']['module'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['pageData']['bean']['moduleDir']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['pageData']['bean']['moduleDir']));  endif; ?>', '<?php echo ((is_array($_tmp=@$this->_tpl_vars['rowData'][$this->_tpl_vars['params']['id']])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['rowData']['ID']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['rowData']['ID'])); ?>
', 'd', <?php echo $this->_foreach['rowIteration']['iteration']; ?>
, this);">
						<?php endif; ?>
					<?php if ($this->_tpl_vars['params']['customCode']): ?>
						<?php echo smarty_function_sugar_evalcolumn_old(array('var' => $this->_tpl_vars['params']['customCode'],'rowData' => $this->_tpl_vars['rowData']), $this);?>

					<?php else: ?>
                       <?php echo smarty_function_sugar_field(array('parentFieldArray' => $this->_tpl_vars['rowData'],'vardef' => $this->_tpl_vars['params'],'displayType' => 'ListView','field' => $this->_tpl_vars['col']), $this);?>

					<?php endif; ?>
					<?php if (empty ( $this->_tpl_vars['rowData'][$this->_tpl_vars['col']] )): ?>&nbsp;<?php endif; ?>
					<?php if ($this->_tpl_vars['params']['link'] && ! $this->_tpl_vars['params']['customCode']): ?>
						</<?php echo ((is_array($_tmp=@$this->_tpl_vars['pageData']['tag'][$this->_tpl_vars['id']][$this->_tpl_vars['params']['ACLTag']])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['pageData']['tag'][$this->_tpl_vars['id']]['MAIN']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['pageData']['tag'][$this->_tpl_vars['id']]['MAIN'])); ?>
>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['col'] == 'NAME' || $this->_tpl_vars['params']['bold']): ?></b><?php endif; ?>
				</span sugar='sugar<?php echo $this->_tpl_vars['colCounter']; ?>
b'></td>
				<?php echo smarty_function_counter(array('name' => 'colCounter'), $this);?>

			<?php endforeach; endif; unset($_from); ?>
	    	</tr>
	<?php endforeach; else: ?>
	<tr height='20' class='<?php echo $this->_tpl_vars['rowColor'][0]; ?>
S1'>
	    <td colspan="<?php echo $this->_tpl_vars['colCount']; ?>
">
	        <em><?php echo $this->_tpl_vars['APP']['LBL_NO_DATA']; ?>
</em>
	    </td>
	</tr>
	<?php endif; unset($_from); ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'include/ListView/ListViewPagination.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</table>
<script type='text/javascript'>
<?php echo 'function lvg_nav(m,id,act,offset,t){if(t.href.search(/#/) < 0){return;}else{if(act==\'pte\'){act=\'ProjectTemplatesEditView\';}else if(act==\'d\'){ act=\'DetailView\';}else if( act ==\'ReportsWizard\'){act = \'ReportsWizard\';}else{ act=\'EditView\';}'; ?>
url = 'index.php?module='+m+'&offset=' + offset + '&stamp=<?php echo $this->_tpl_vars['pageData']['stamp']; ?>
&return_module='+m+'&action='+act+'&record='+id;t.href=url;<?php echo '}}'; ?>

<?php echo 'function lvg_dtails(id){'; ?>
return SUGAR.util.getAdditionalDetails( '<?php echo $this->_tpl_vars['pageData']['bean']['moduleDir']; ?>
',id, 'adspan_'+id);<?php echo '}'; ?>

<?php if ($this->_tpl_vars['contextMenus']): ?>
	<?php echo $this->_tpl_vars['contextMenuScript']; ?>

<?php endif; ?>
</script>