<?php /* Smarty version 2.6.11, created on 2011-09-01 15:12:29
         compiled from include/SugarEmailAddress/templates/forDuplicatesView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'include/SugarEmailAddress/templates/forDuplicatesView.tpl', 40, false),)), $this); ?>
<input type="hidden" name="<?php echo $this->_tpl_vars['moduleDir']; ?>
_email_widget_id" value="<?php echo $this->_tpl_vars['email_widget_id']; ?>
">
<input type="hidden" name="emailAddressWidget" value="<?php echo $this->_tpl_vars['emailAddressWidget']; ?>
">
<?php echo smarty_function_counter(array('assign' => 'count','start' => -1,'print' => false), $this);?>

<?php $_from = $this->_tpl_vars['emails']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['email']):
?>
<input type="hidden" name="<?php echo $this->_tpl_vars['moduleDir'];  echo $this->_tpl_vars['email_widget_id']; ?>
emailAddress<?php echo smarty_function_counter(array('print' => true), $this);?>
" value="<?php echo $this->_tpl_vars['email']; ?>
">
<?php endforeach; endif; unset($_from);  echo smarty_function_counter(array('assign' => 'count','start' => -1,'print' => false), $this);?>

<?php $_from = $this->_tpl_vars['verified']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['email']):
?>
<input type="hidden" name="<?php echo $this->_tpl_vars['moduleDir'];  echo $this->_tpl_vars['email_widget_id']; ?>
emailAddressVerifiedValue<?php echo smarty_function_counter(array('print' => true), $this);?>
" value="<?php echo $this->_tpl_vars['email']; ?>
">
<?php endforeach; endif; unset($_from);  if (isset ( $this->_tpl_vars['primary'] )): ?>
<input type="hidden" name="<?php echo $this->_tpl_vars['moduleDir'];  echo $this->_tpl_vars['email_widget_id']; ?>
emailAddressPrimaryFlag" value="<?php echo $this->_tpl_vars['primary']; ?>
">
<?php endif;  $_from = $this->_tpl_vars['optOut']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['email']):
?>
<input type="hidden" name="<?php echo $this->_tpl_vars['moduleDir'];  echo $this->_tpl_vars['email_widget_id']; ?>
emailAddressOptOutFlag[]" value="<?php echo $this->_tpl_vars['email']; ?>
">
<?php endforeach; endif; unset($_from);  $_from = $this->_tpl_vars['invalid']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['email']):
?>
<input type="hidden" name="<?php echo $this->_tpl_vars['moduleDir'];  echo $this->_tpl_vars['email_widget_id']; ?>
emailAddressInvalidFlag[]" value="<?php echo $this->_tpl_vars['email']; ?>
">
<?php endforeach; endif; unset($_from);  $_from = $this->_tpl_vars['replyTo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['email']):
?>
<input type="hidden" name="<?php echo $this->_tpl_vars['moduleDir'];  echo $this->_tpl_vars['email_widget_id']; ?>
emailAddressReplyToFlag[]" value="<?php echo $this->_tpl_vars['email']; ?>
">
<?php endforeach; endif; unset($_from);  $_from = $this->_tpl_vars['delete']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['email']):
?>
<input type="hidden" name="<?php echo $this->_tpl_vars['moduleDir'];  echo $this->_tpl_vars['email_widget_id']; ?>
emailAddressDeleteFlag[]" value="<?php echo $this->_tpl_vars['email']; ?>
">
<?php endforeach; endif; unset($_from); ?>
<input type="hidden" name="useEmailWidget" value="true">