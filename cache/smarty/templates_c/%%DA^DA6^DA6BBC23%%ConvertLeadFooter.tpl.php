<?php /* Smarty version 2.6.11, created on 2011-09-01 16:50:27
         compiled from modules/Leads/tpls/ConvertLeadFooter.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_translate', 'modules/Leads/tpls/ConvertLeadFooter.tpl', 42, false),)), $this); ?>
<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
<td class="buttons">
<?php if ($this->_tpl_vars['bean']->aclAccess('save')): ?>
    <input title='<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SAVE_BUTTON_LABEL'), $this);?>
' accessKey="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SAVE_BUTTON_KEY'), $this);?>
" class="button primary" 
        onclick="return check_form('<?php echo $this->_tpl_vars['form_name']; ?>
');"
        type="submit" name="button" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SAVE_BUTTON_LABEL'), $this);?>
">
<?php endif; ?>

<?php if (! empty ( $_REQUEST['return_action'] ) && ( $_REQUEST['return_action'] == 'DetailView' && ! empty ( $this->_tpl_vars['record_id'] ) )): ?>
    <input title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CANCEL_BUTTON'), $this);?>
" accessKey="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CANCEL_BUTTON_KEY'), $this);?>
" class="button" 
        onclick="this.form.action.value='DetailView'; this.form.module.value='<?php echo $_REQUEST['return_module']; ?>
'; this.form.record.value='<?php echo $_REQUEST['return_id']; ?>
';" 
        type="submit" name="button" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CANCEL_BUTTON_LABEL'), $this);?>
">
<?php elseif (! empty ( $_REQUEST['return_action'] ) && ( $_REQUEST['return_action'] == 'DetailView' && ! empty ( $_REQUEST['return_id'] ) )): ?>';
    <input title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CANCEL_BUTTON_TITLE'), $this);?>
" accessKey="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CANCEL_BUTTON_KEY'), $this);?>
" class="button" 
        onclick="this.form.action.value='DetailView'; this.form.module.value='<?php echo $_REQUEST['return_module']; ?>
'; this.form.record.value='<?php echo $_REQUEST['return_id']; ?>
';" 
        type="submit" name="button" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CANCEL_BUTTON_LABEL'), $this);?>
">
<?php else: ?>
    <input title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CANCEL_BUTTON_TITLE'), $this);?>
" accessKey="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CANCEL_BUTTON_KEY'), $this);?>
" class="button" 
        onclick="this.form.action.value='DetailView'; this.form.module.value='Leads'; this.form.record.value='<?php echo $_REQUEST['record']; ?>
';" 
        type="submit" name="button" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CANCEL_BUTTON_LABEL'), $this);?>
">
<?php endif; ?>
</td>
</tr>
</table>