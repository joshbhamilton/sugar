<?php /* Smarty version 2.6.11, created on 2011-09-01 15:01:11
         compiled from modules/SavedSearch/SavedSearchSelects.tpl */ ?>

<?php if ($this->_tpl_vars['SAVED_SEARCHES_OPTIONS'] != null): ?>
<select style="width: 110px" name='saved_search_select' id='saved_search_select' onChange='SUGAR.savedViews.shortcut_select(this, "<?php echo $this->_tpl_vars['SEARCH_MODULE']; ?>
");'>
	<?php echo $this->_tpl_vars['SAVED_SEARCHES_OPTIONS']; ?>

</select>
<script>
<?php echo '
	//if the function exists, call the function that will populate the searchform
	//labels based on the value of the saved search dropdown
	if(typeof(fillInLabels)==\'function\'){
		fillInLabels();
	}
'; ?>
	
</script>
<?php endif; ?>
