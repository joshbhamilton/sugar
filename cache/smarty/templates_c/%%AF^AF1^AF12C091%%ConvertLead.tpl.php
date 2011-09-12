<?php /* Smarty version 2.6.11, created on 2011-09-12 14:22:35
         compiled from cache/modules/Opportunities/ConvertLead.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_translate', 'cache/modules/Opportunities/ConvertLead.tpl', 24, false),array('function', 'counter', 'cache/modules/Opportunities/ConvertLead.tpl', 38, false),array('function', 'html_options', 'cache/modules/Opportunities/ConvertLead.tpl', 78, false),array('function', 'sugar_number_format', 'cache/modules/Opportunities/ConvertLead.tpl', 100, false),array('function', 'sugar_getimagepath', 'cache/modules/Opportunities/ConvertLead.tpl', 117, false),array('modifier', 'default', 'cache/modules/Opportunities/ConvertLead.tpl', 28, false),array('modifier', 'strip_semicolon', 'cache/modules/Opportunities/ConvertLead.tpl', 34, false),)), $this); ?>

<span class="color"><?php echo $this->_tpl_vars['ERROR']; ?>
</span>
<h4>
<style>
input[disabled] {
background-color:lightgray;
}
</style>
<table><tr><td>
<input type="hidden" name="convert_create_Opportunities" id="convert_create_Opportunities" 
<?php if (( $this->_tpl_vars['def']['required'] && empty ( $this->_tpl_vars['def']['select'] ) ) || ( ! empty ( $this->_tpl_vars['def']['default_action'] ) && $this->_tpl_vars['def']['default_action'] == 'create' )): ?> value="true" <?php endif; ?>/>
<?php if (! $this->_tpl_vars['def']['required'] || ! empty ( $this->_tpl_vars['def']['select'] )): ?>
<input class="checkbox" type="checkbox" name="newOpportunities" id="newOpportunities" onclick="toggleDisplay('createOpportunities');">
<script type="text/javascript">
  <?php if (! empty ( $this->_tpl_vars['def']['default_action'] ) && $this->_tpl_vars['def']['default_action'] == 'create'): ?>
    YAHOO.util.Event.onContentReady('createOpportunities', function(){
		toggleDisplay('createOpportunities');
		document.getElementById('newOpportunities').checked = true;
			});
 <?php endif;  endif; ?>
</script>
</td><td>
<?php echo smarty_function_sugar_translate(array('label' => 'LNK_NEW_OPPORTUNITY','module' => 'Leads'), $this);?>

</td><td>
</td></tr></table>
</h4>
<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="<?php echo ((is_array($_tmp=@$this->_tpl_vars['def']['templateMeta']['panelClass'])) ? $this->_run_mod_handler('default', true, $_tmp, 'edit view') : smarty_modifier_default($_tmp, 'edit view')); ?>
" id ="createOpportunities" <?php if (! $this->_tpl_vars['def']['required'] || ! empty ( $this->_tpl_vars['def']['select'] )): ?>style="display:none"<?php endif; ?>>
<tr>
<td valign="top" id='name_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_OPPORTUNITY_NAME','module' => 'Opportunities'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['name']['value']);  endif; ?>  
<input type='text' name='Opportunitiesname' 
id='Opportunitiesname' size='30' 
maxlength='50' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='119' > 
</td>
<td valign="top" id='currency_id_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_CURRENCY','module' => 'Opportunities'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>

<span id='currency_id'>
<?php echo $this->_tpl_vars['fields']['currency_id']['value']; ?>
</span>
</td>
</tr>
<tr>
<td valign="top" id='sales_stage_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_SALES_STAGE','module' => 'Opportunities'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<select name="Opportunitiessales_stage" 
id="Opportunitiessales_stage" 
title='' tabindex="121"  
>
<?php if (isset ( $this->_tpl_vars['fields']['sales_stage']['value'] ) && $this->_tpl_vars['fields']['sales_stage']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['sales_stage']['options'],'selected' => $this->_tpl_vars['fields']['sales_stage']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['sales_stage']['options'],'selected' => $this->_tpl_vars['fields']['sales_stage']['default']), $this);?>

<?php endif; ?>
</select>
</td>
<td valign="top" id='amount_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_AMOUNT','module' => 'Opportunities'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['amount']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['amount']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['amount']['value']);  endif; ?>  
<input type='text' name='Opportunitiesamount' 
id='Opportunitiesamount' size='30'  value='<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['value']), $this);?>
' title='' tabindex='122' > 
</td>
</tr>
<tr>
<td valign="top" id='date_closed_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DATE_CLOSED','module' => 'Opportunities'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span class="dateTime">
<?php $this->assign('date_value', $this->_tpl_vars['fields']['date_closed']['value']); ?>
<input class="date_input" autocomplete="off" type="text" name="Opportunitiesdate_closed" id="Opportunitiesdate_closed" value="<?php echo $this->_tpl_vars['date_value']; ?>
" title=''  tabindex='123' size="11" maxlength="10" >
<img border="0" src="<?php echo smarty_function_sugar_getimagepath(array('file' => 'jscalendar.gif'), $this);?>
" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
" id="Opportunitiesdate_closed_trigger" align="absmiddle" />
</span>
<script type="text/javascript">
Calendar.setup ({
inputField : "Opportunitiesdate_closed",
ifFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
button : "Opportunitiesdate_closed_trigger",
singleClick : true,
dateStr : "<?php echo $this->_tpl_vars['date_value']; ?>
",
step : 1,
weekNumbers:false
}
);
</script>
</td>
<td valign="top" id='_label' width='12.5%' scope="row">
</td>
<td valign="top" width='37.5%' >
</td>
</tr>
<tr>
<td valign="top" id='description_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Opportunities'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' colspan='3'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['description']['value'] )):  $this->assign('value', $this->_tpl_vars['fields']['description']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['description']['value']);  endif; ?>  
<textarea  id='Opportunitiesdescription' name='Opportunitiesdescription'
rows="6" 
cols="80" 
title='' tabindex="125" ><?php echo $this->_tpl_vars['value']; ?>
</textarea>
</td>
</tr>
</table><?php echo '
<script type="text/javascript">
addToValidateBinaryDependency(\'ConvertLead\', \'assigned_user_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Opportunities','for_js' => true), $this); echo ': ';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'Opportunities','for_js' => true), $this); echo '\', \'assigned_user_id\' );
</script>'; ?>
