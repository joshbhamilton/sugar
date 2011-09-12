<?php /* Smarty version 2.6.11, created on 2011-09-01 15:12:50
         compiled from modules/Home/UnifiedSearchAdvancedForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getjspath', 'modules/Home/UnifiedSearchAdvancedForm.tpl', 43, false),array('function', 'sugar_getimagepath', 'modules/Home/UnifiedSearchAdvancedForm.tpl', 62, false),array('function', 'sugar_translate', 'modules/Home/UnifiedSearchAdvancedForm.tpl', 76, false),)), $this); ?>

<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'include/javascript/sugar_grp_yui_widgets.js'), $this);?>
"></script>
<link rel="stylesheet" type="text/css" href="<?php echo smarty_function_sugar_getjspath(array('file' => 'modules/Connectors/tpls/tabs.css'), $this);?>
"/>

<form name='UnifiedSearchAdvancedMain' action='index.php' onsubmit="SUGAR.saveGlobalSearchSettings();" method='POST' class="search_form">
<input type='hidden' name='module' value='Home'>
<input type='hidden' name='query_string' value='test'>
<input type='hidden' name='advanced' value='true'>
<input type='hidden' name='action' value='UnifiedSearch'>
<input type='hidden' name='search_form' value='false'>
<input type='hidden' name='search_modules' value=''>
<input type='hidden' name='skip_modules' value=''>
<input type='hidden' id='showGSDiv' name='showGSDiv' value='<?php echo $this->_tpl_vars['SHOWGSDIV']; ?>
'>
	<table width='600' border='0' cellspacing='1'>
	<tr style='padding-bottom: 10px'>
		<td class="submitButtons" colspan='8' nowrap>
			<input id='searchFieldMain' class='searchField' type='text' size='80' name='query_string' value='<?php echo $this->_tpl_vars['query_string']; ?>
'>
		    <input type="submit" class="button primary" value="<?php echo $this->_tpl_vars['LBL_SEARCH_BUTTON_LABEL']; ?>
">&nbsp;
			<a href="#" onclick="javascript:toggleInlineSearch();" style="font-size:12px; font-weight:bold; text-decoration:none; text-shadow:0 1px #FFFFFF;"><?php echo $this->_tpl_vars['MOD']['LBL_SELECT_MODULES']; ?>
&nbsp;
            <?php if ($this->_tpl_vars['SHOWGSDIV'] == 'yes'): ?>
			<img src='<?php echo smarty_function_sugar_getimagepath(array('file' => "basic_search.gif"), $this);?>
' id='up_down_img' border=0>
			<?php else: ?>
			<img src='<?php echo smarty_function_sugar_getimagepath(array('file' => "advanced_search.gif"), $this);?>
' id='up_down_img' border=0>
			<?php endif; ?>
			</a>
		</td>
	</tr>
	<tr height='5'><td></td></tr>
	<tr style='padding-top: 10px;'>
		<td colspan='8' nowrap'>
		<div id='inlineGlobalSearch' class='add_table' <?php if ($this->_tpl_vars['SHOWGSDIV'] != 'yes'): ?>style="display:none;"<?php endif; ?>>
		<table id="GlobalSearchSettings" class="GlobalSearchSettings edit view" style='margin-bottom:0px;' border="0" cellspacing="0" cellpadding="0">
		    <tr>
		    	<td colspan="2">
		    	<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SELECT_MODULES_TITLE','module' => 'Administration'), $this);?>

		    	</td>
		    </tr>
		    <tr>
				<td width='1%'>
					<div id="enabled_div"></div>	
				</td>
				<td>
					<div id="disabled_div"></div>
				</td>
			</tr>
		</table>
		</div>
		</td>
	</tr>
	</table>
</form>

<script type="text/javascript">
<?php echo '
function toggleInlineSearch()
{
    if (document.getElementById(\'inlineGlobalSearch\').style.display == \'none\')
    {
		SUGAR.globalSearchEnabledTable.render();
		SUGAR.globalSearchDisabledTable.render();    
        document.getElementById(\'showGSDiv\').value = \'yes\'		
        document.getElementById(\'inlineGlobalSearch\').style.display = \'\';
'; ?>
	
        document.getElementById('up_down_img').src='<?php echo smarty_function_sugar_getimagepath(array('file' => "basic_search.gif"), $this);?>
';
<?php echo '
    }else{
'; ?>
			
        document.getElementById('up_down_img').src='<?php echo smarty_function_sugar_getimagepath(array('file' => "advanced_search.gif"), $this);?>
';
<?php echo '			
        document.getElementById(\'showGSDiv\').value = \'no\';		
        document.getElementById(\'inlineGlobalSearch\').style.display = \'none\';		
    }    
}
'; ?>



var get = YAHOO.util.Dom.get;
var enabled_modules = <?php echo $this->_tpl_vars['enabled_modules']; ?>
;
var disabled_modules = <?php echo $this->_tpl_vars['disabled_modules']; ?>
;
var lblEnabled = '<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACTIVE_MODULES','module' => 'Administration'), $this);?>
';
var lblDisabled = '<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DISABLED_MODULES','module' => 'Administration'), $this);?>
';
<?php echo '
SUGAR.saveGlobalSearchSettings = function()
{
	var enabledTable = SUGAR.globalSearchEnabledTable;
	var modules = "";
	for(var i=0; i < enabledTable.getRecordSet().getLength(); i++){
		var data = enabledTable.getRecord(i).getData();
		if (data.module && data.module != \'\')
		    modules += "," + data.module;
	}
	modules = modules == "" ? modules : modules.substr(1);
	document.forms[\'UnifiedSearchAdvancedMain\'].elements[\'search_modules\'].value = modules;
}
'; ?>


document.getElementById("inlineGlobalSearch").style.display=<?php if ($this->_tpl_vars['SHOWGSDIV'] == 'yes'): ?>"";<?php else: ?>"none";<?php endif; ?>

<?php echo '
SUGAR.globalSearchEnabledTable = new YAHOO.SUGAR.DragDropTable(
	"enabled_div",
	[{key:"label",  label: lblEnabled, width: 200, sortable: false},
	 {key:"module", label: lblEnabled, hidden:true}],
	new YAHOO.util.LocalDataSource(enabled_modules, {
		responseSchema: {fields : [{key : "module"}, {key : "label"}]}
	}),  
	{height: "200px"}
);

SUGAR.globalSearchDisabledTable = new YAHOO.SUGAR.DragDropTable(
	"disabled_div",
	[{key:"label",  label: lblDisabled, width: 200, sortable: false},
	 {key:"module", label: lblDisabled, hidden:true}],
	new YAHOO.util.LocalDataSource(disabled_modules, {
		responseSchema: {fields : [{key : "module"}, {key : "label"}]}
	}),
	{height: "200px"}
);

SUGAR.globalSearchEnabledTable.disableEmptyRows = true;
SUGAR.globalSearchDisabledTable.disableEmptyRows = true;
SUGAR.globalSearchEnabledTable.addRow({module: "", label: ""});
SUGAR.globalSearchDisabledTable.addRow({module: "", label: ""});
SUGAR.globalSearchEnabledTable.render();
SUGAR.globalSearchDisabledTable.render();
'; ?>

</script>