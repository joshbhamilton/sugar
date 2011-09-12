<?php /* Smarty version 2.6.11, created on 2011-09-12 14:22:35
         compiled from cache/modules/Accounts/ConvertLead.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_translate', 'cache/modules/Accounts/ConvertLead.tpl', 36, false),array('function', 'sugar_getimagepath', 'cache/modules/Accounts/ConvertLead.tpl', 60, false),array('function', 'counter', 'cache/modules/Accounts/ConvertLead.tpl', 100, false),array('modifier', 'default', 'cache/modules/Accounts/ConvertLead.tpl', 90, false),array('modifier', 'strip_semicolon', 'cache/modules/Accounts/ConvertLead.tpl', 96, false),)), $this); ?>

<span class="color"><?php echo $this->_tpl_vars['ERROR']; ?>
</span>
<h4>
<style>
input[disabled] {
background-color:lightgray;
}
</style>
<table><tr><td>
<input type="hidden" name="convert_create_Accounts" id="convert_create_Accounts" 
<?php if (( $this->_tpl_vars['def']['required'] && empty ( $this->_tpl_vars['def']['select'] ) ) || ( ! empty ( $this->_tpl_vars['def']['default_action'] ) && $this->_tpl_vars['def']['default_action'] == 'create' )): ?> value="true" <?php endif; ?>/>
<input type="hidden" name="opportunity_id" value="<?php echo $_REQUEST['opportunity_id']; ?>
">   
<input type="hidden" name="case_id" value="<?php echo $_REQUEST['case_id']; ?>
">   
<input type="hidden" name="bug_id" value="<?php echo $_REQUEST['bug_id']; ?>
">   
<input type="hidden" name="email_id" value="<?php echo $_REQUEST['email_id']; ?>
">   
<input type="hidden" name="inbound_email_id" value="<?php echo $_REQUEST['inbound_email_id']; ?>
">   
<?php if (! $this->_tpl_vars['def']['required'] || ! empty ( $this->_tpl_vars['def']['select'] )): ?>
<input class="checkbox" type="checkbox" name="newAccounts" id="newAccounts" onclick="toggleDisplay('createAccounts');toggleAccountsSelect();">
<script type="text/javascript">
  toggleAccountsSelect = function(){ 
    var inputs = document.getElementById('selectAccounts').getElementsByTagName('input');
	for(var i in inputs) {inputs[i].disabled = !inputs[i].disabled;}
	var buttons = document.getElementById('selectAccounts').getElementsByTagName('button');
    for(var i in buttons) {buttons[i].disabled = !buttons[i].disabled;}
 }
  <?php if (! empty ( $this->_tpl_vars['def']['default_action'] ) && $this->_tpl_vars['def']['default_action'] == 'create'): ?>
    YAHOO.util.Event.onContentReady('createAccounts', function(){
		toggleDisplay('createAccounts');
		document.getElementById('newAccounts').checked = true;
				toggleAccountsSelect();
			});
 <?php endif;  endif; ?>
</script>
</td><td>
<?php echo smarty_function_sugar_translate(array('label' => 'LNK_NEW_ACCOUNT','module' => 'Leads'), $this);?>

</td><td>
<?php echo smarty_function_sugar_translate(array('label' => 'LNK_SELECT_ACCOUNTS','module' => 'Leads'), $this);?>

<?php if ($this->_tpl_vars['def']['required']): ?>
<span class="required">*</span>
<?php endif; ?>
</td><td id ="selectAccounts">

<input type="text" name="<?php echo $this->_tpl_vars['contact_def']['account_name']['name']; ?>
" class="sqsEnabled" tabindex="" id="<?php echo $this->_tpl_vars['contact_def']['account_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['contact_def']['account_name']['value']; ?>
" title='' autocomplete="off"  >
<input type="hidden" name="<?php echo $this->_tpl_vars['contact_def']['account_name']['id_name']; ?>
" 
id="<?php echo $this->_tpl_vars['contact_def']['account_name']['id_name']; ?>
" 
value="<?php echo $this->_tpl_vars['contact_def']['account_id']['value']; ?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['contact_def']['account_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['contact_def']['account_name']['name']; ?>
" tabindex="" title="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_KEY']; ?>
" class="button firstChild" value="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_LABEL']; ?>
" 
onclick='open_popup(
"<?php echo $this->_tpl_vars['contact_def']['account_name']['module']; ?>
", 
600, 
400, 
"", 
true, 
false, 
<?php echo '{"call_back_function":"set_return","form_name":"ConvertLead","field_to_name_array":{"id":"account_id","name":"account_name"}}'; ?>
, 
"single", 
true
);' ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-select.png"), $this);?>
"></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['contact_def']['account_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['contact_def']['account_name']['name']; ?>
" tabindex="" title="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_KEY']; ?>
" class="button lastChild" 
onclick="this.form.<?php echo $this->_tpl_vars['contact_def']['account_name']['name']; ?>
.value = ''; this.form.<?php echo $this->_tpl_vars['contact_def']['account_name']['id_name']; ?>
.value = '';" 
value="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_LABEL']; ?>
" ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-clear.png"), $this);?>
"></button>
</span>
<script type="text/javascript">
<!--
if(typeof QSProcessedFieldsArray != 'undefined') 
	QSProcessedFieldsArray["<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['contact_def']['account_name']['name']; ?>
"] = false;
	

enableQS(false);
-->	
</script>
<script>
if (typeof(sqs_objects) == "undefined") sqs_objects = [];
sqs_objects['ConvertLead_account_name'] = {
form          : 'ConvertLead',
method        : 'query',
modules       : ['Accounts'],
group         : 'or',
field_list    : ['name', 'id'],
populate_list : ['account_name', 'account_id'],
conditions    : [{'name':'name','op':'like','end':'%','value':''}],
required_list : ['account_id'],
order         : 'name',
limit         : '10'
}
</script>
</td></tr></table>
</h4>
<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="<?php echo ((is_array($_tmp=@$this->_tpl_vars['def']['templateMeta']['panelClass'])) ? $this->_run_mod_handler('default', true, $_tmp, 'edit view') : smarty_modifier_default($_tmp, 'edit view')); ?>
" id ="createAccounts" <?php if (! $this->_tpl_vars['def']['required'] || ! empty ( $this->_tpl_vars['def']['select'] )): ?>style="display:none"<?php endif; ?>>
<tr>
<td valign="top" id='name_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'Accounts'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['name']['value']);  endif; ?>  
<input type='text' name='Accountsname' 
id='Accountsname' size='30' 
maxlength='150' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='115' > 
</td>
<td valign="top" id='phone_office_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PHONE_OFFICE','module' => 'Accounts'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['phone_office']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['phone_office']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['phone_office']['value']);  endif; ?>  
<input type='text' name='Accountsphone_office' id='Accountsphone_office' size='30' maxlength='100' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='116' class="phone" >
</td>
</tr>
<tr>
<td valign="top" id='website_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_WEBSITE','module' => 'Accounts'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' colspan='3'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['website']['value'] )): ?>
<input type='text' name='Accountswebsite' id='Accountswebsite' size='30' 
maxlength='255' value='<?php echo $this->_tpl_vars['fields']['website']['value']; ?>
' title='' tabindex='117'>
<?php else: ?>
<input type='text' name='Accountswebsite' id='Accountswebsite' size='30' 
maxlength='255' 
<?php if ($this->_tpl_vars['displayView'] == 'advanced_search' || $this->_tpl_vars['displayView'] == 'basic_search'): ?>value=''<?php else: ?>value='http://'<?php endif; ?> title='' tabindex='117'>
<?php endif; ?>
</td>
</tr>
<tr>
<td valign="top" id='description_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Accounts'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' colspan='3'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['description']['value'] )):  $this->assign('value', $this->_tpl_vars['fields']['description']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['description']['value']);  endif; ?>  
<textarea  id='Accountsdescription' name='Accountsdescription'
rows="6" 
cols="80" 
title='' tabindex="118" ><?php echo $this->_tpl_vars['value']; ?>
</textarea>
</td>
</tr>
</table><?php echo '
<script type="text/javascript">
addToValidateBinaryDependency(\'ConvertLead\', \'assigned_user_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Accounts','for_js' => true), $this); echo ': ';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'Accounts','for_js' => true), $this); echo '\', \'assigned_user_id\' );
</script>'; ?>
