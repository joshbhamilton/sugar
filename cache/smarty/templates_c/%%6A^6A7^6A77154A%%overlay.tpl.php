<?php /* Smarty version 2.6.11, created on 2011-09-12 14:11:43
         compiled from modules/Emails/templates/overlay.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'overlib_includes', 'modules/Emails/templates/overlay.tpl', 59, false),)), $this); ?>
<div id="SUGAR.email2.e2overlay" style="visibility:hidden; position:absolute; top:0px; background-color:#fff;">
	<div class="ydlg-hd" id="overlayTitle"></div>
	<div class="ydlg-bd" id="overlayBody"></div>
</div>

<!-- add file for attachment dialog //-->
<div id="addFileDialog" class="yui-hidden">
	<div class="ydlg-bd">
		<div id="addFileDialogContent" class="ylayout-inactive-content">
			<!--  -->
			<form id="uploadAttachment" name="uploadAttachment" method='POST' action="index.php" enctype='multipart/form-data'>
				<input type="hidden" name="to_pdf" value="true">
				<input type="hidden" name="module" value="Emails">
				<input type="hidden" name="action" value="EmailUIAjax">
				<input type="hidden" name="emailUIAction" value="uploadAttachment">
				<input type='file' name='email_attachment' id='email_attachment' size='30' />&nbsp;
				<input type="button" onclick="SUGAR.email2.composeLayout.uploadAttachment();" class="button" value="<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_ATTACH_FILE_TO_EMAIL']; ?>
" />
			</form>
		</div>
	</div>
</div>
<?php echo smarty_function_overlib_includes(array(), $this);?>
