<?php /* Smarty version 2.6.11, created on 2011-09-12 14:11:43
         compiled from modules/Emails/templates/addressSearch.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getimagepath', 'modules/Emails/templates/addressSearch.tpl', 56, false),array('function', 'sugar_translate', 'modules/Emails/templates/addressSearch.tpl', 73, false),)), $this); ?>
<form id="searchForm" method="get" action="#">
    <table id="searchTable" border="0" cellpadding="0" cellspacing="0" width="670">
		<tr id="peopleTableSearchRow">
			<td scope="row" nowrap="NOWRAP">
			     <div id="rollover">
			     <?php echo $this->_tpl_vars['mod_strings']['LBL_SEARCH_FOR']; ?>
:
			         <a href="#" class="rollover"><img border="0" src="themes/default/images/helpInline.gif">
	                        <div style="position:absolute;top:-2px"><span class="rollover"><?php echo $this->_tpl_vars['mod_strings']['LBL_ADDRESS_BOOK_SEARCH_HELP']; ?>
</span></div>
	                 </a>
	                          
		      	<input id="input_searchField" name="input_searchField" type="text" value="">
		      	</div>
			    &nbsp;&nbsp; <?php echo $this->_tpl_vars['mod_strings']['LBL_LIST_RELATED_TO']; ?>
: &nbsp;
			    <select name="person" id="input_searchPerson">
			         <?php echo $this->_tpl_vars['listOfPersons']; ?>

			    </select>
			    &nbsp;
			    <a href="javascript:void(0);">
		           	<img onclick="SUGAR.email2.addressBook.searchContacts();" src="<?php echo smarty_function_sugar_getimagepath(array('file' => 'select.gif'), $this);?>
" align="absmiddle" border="0" alt="<?php echo $this->_tpl_vars['mod_strings']['LBL_EMAIL_SELECTOR']; ?>
">
                </a>
                <a href="javascript:void(0);">
		           	<img onclick="SUGAR.email2.addressBook.clearAddressBookSearch();" src="<?php echo smarty_function_sugar_getimagepath(array('file' => 'clear.gif'), $this);?>
" align="absmiddle" border="0" alt="<?php echo $this->_tpl_vars['mod_strings']['LBL_EMAIL_SELECTOR']; ?>
">
                </a>  
			</td>
        </tr>
        <tr id="peopleTableSearchRow">
            <td scope="row" nowrap="NOWRAP" colspan="2" id="relatedBeanColumn">
		      <?php echo $this->_tpl_vars['mod_strings']['LBL_FILTER_BY_RELATED_BEAN']; ?>
<span id="relatedBeanInfo"></span>
		   	  <input name="hasRelatedBean" id="hasRelatedBean" type="checkbox"/>
            </td>
            
        </tr>
        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr id="peopleTableSearchRow">
            <td id="searchSubmit" scope="row" nowrap="NOWRAP">
                <button onclick="SUGAR.email2.addressBook.insertContactToResultTable(null,'<?php echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_ADDRESS_BOOK_ADD_TO'), $this);?>
')">
                    <?php echo smarty_function_sugar_translate(array('label' => 'LBL_ADD_TO_ADDR','module' => 'Emails'), $this);?>
 <b><?php echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_ADDRESS_BOOK_ADD_TO'), $this);?>
</b>
                </button>
                <button onclick="SUGAR.email2.addressBook.insertContactToResultTable(null,'<?php echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_ADDRESS_BOOK_ADD_CC'), $this);?>
')">
                    <?php echo smarty_function_sugar_translate(array('label' => 'LBL_ADD_TO_ADDR','module' => 'Emails'), $this);?>
 <b><?php echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_ADDRESS_BOOK_ADD_CC'), $this);?>
</b>
                </button>
                <button onclick="SUGAR.email2.addressBook.insertContactToResultTable(null,'<?php echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC'), $this);?>
')">
                    <?php echo smarty_function_sugar_translate(array('label' => 'LBL_ADD_TO_ADDR','module' => 'Emails'), $this);?>
 <b><?php echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC'), $this);?>
</b>
                </button>
            </td>
        </tr>
        
    </table>
</form>