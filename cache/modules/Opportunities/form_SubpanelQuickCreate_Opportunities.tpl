

<div class="clear"></div>
<form action="index.php" method="POST" name="{$form_name}" id="{$form_id}" {$enctype}>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="actionsContainer">
<tr>
<td class="buttons">
<input type="hidden" name="module" value="{$module}">
{if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}
<input type="hidden" name="record" value="">
<input type="hidden" name="duplicateSave" value="true">
<input type="hidden" name="duplicateId" value="{$fields.id.value}">
{else}
<input type="hidden" name="record" value="{$fields.id.value}">
{/if}
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="{$smarty.request.return_module}">
<input type="hidden" name="return_action" value="{$smarty.request.return_action}">
<input type="hidden" name="return_id" value="{$smarty.request.return_id}">
<input type="hidden" name="module_tab"> 
<input type="hidden" name="contact_role">
{if !empty($smarty.request.return_module) || !empty($smarty.request.relate_to)}
<input type="hidden" name="relate_to" value="{if $smarty.request.return_relationship}{$smarty.request.return_relationship}{elseif $smarty.request.relate_to && empty($smarty.request.from_dcmenu)}{$smarty.request.relate_to}{elseif empty($isDCForm) && empty($smarty.request.from_dcmenu)}{$smarty.request.return_module}{/if}">
<input type="hidden" name="relate_id" value="{$smarty.request.return_id}">
{/if}
<input type="hidden" name="offset" value="{$offset}">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button" onclick="this.form.action.value='Save';if(check_form('form_SubpanelQuickCreate_Opportunities'))return SUGAR.subpanelUtils.inlineSave(this.form.id, 'Opportunities_subpanel_save_button');return false;" type="submit" name="Opportunities_subpanel_save_button" id="Opportunities_subpanel_save_button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} 
<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate('Opportunities_subpanel_cancel_button');return false;" type="submit" name="Opportunities_subpanel_cancel_button" id="Opportunities_subpanel_cancel_button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> 
<input title="{$APP.LBL_FULL_FORM_BUTTON_TITLE}" accessKey="{$APP.LBL_FULL_FORM_BUTTON_KEY}" class="button" onclick="disableOnUnloadEditView(this.form); this.form.return_action.value='DetailView'; this.form.action.value='EditView'; if(typeof(this.form.to_pdf)!='undefined') this.form.to_pdf.value='0';" type="submit" name="Opportunities_subpanel_full_form_button" id="Opportunities_subpanel_full_form_button" value="{$APP.LBL_FULL_FORM_BUTTON_LABEL}"> <input type="hidden" name="full_form" value="full_form">
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Opportunities", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</td>
<td align='right'>
{$PAGINATION}
</td>
</tr>
</table>{sugar_include include=$includes}
<div id="form_SubpanelQuickCreate_Opportunities_tabs"
>
<div >
<div id="Default_{$module}_Subpanel">
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="{$def.templateMeta.panelClass|default:'edit view'}">
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='name_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_OPPORTUNITY_NAME' module='Opportunities'}{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if}  
<input type='text' name='{$fields.name.name}' 
id='{$fields.name.name}' size='30' 
maxlength='50' 
value='{$value}' title='' tabindex='100' > 
<td valign="top" id='account_name_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_ACCOUNT_NAME' module='Opportunities'}{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

<input type="text" name="{$fields.account_name.name}" class="sqsEnabled" tabindex="101" id="{$fields.account_name.name}" size="" value="{$fields.account_name.value}" title='' autocomplete="off"  >
<input type="hidden" name="{$fields.account_name.id_name}" 
id="{$fields.account_name.id_name}" 
value="{$fields.account_id.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.account_name.name}" id="btn_{$fields.account_name.name}" tabindex="101" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" 
onclick='open_popup(
"{$fields.account_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"form_SubpanelQuickCreate_Opportunities","field_to_name_array":{"id":"account_id","name":"account_name"}}{/literal}, 
"single", 
true
);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.account_name.name}" id="btn_clr_{$fields.account_name.name}" tabindex="101" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button lastChild" 
onclick="this.form.{$fields.account_name.name}.value = ''; this.form.{$fields.account_name.id_name}.value = '';" 
value="{$APP.LBL_CLEAR_BUTTON_LABEL}" ><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
<script type="text/javascript">
<!--
if(typeof QSProcessedFieldsArray != 'undefined') 
	QSProcessedFieldsArray["{$form_name}_{$fields.account_name.name}"] = false;
	

enableQS(false);
-->	
</script>
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='currency_id_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_CURRENCY' module='Opportunities'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}
<span id='currency_id'>
{$fields.currency_id.value}</span>
<td valign="top" id='opportunity_type_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_TYPE' module='Opportunities'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

<select name="{$fields.opportunity_type.name}" 
id="{$fields.opportunity_type.name}" 
title='' tabindex="103"  
>
{if isset($fields.opportunity_type.value) && $fields.opportunity_type.value != ''}
{html_options options=$fields.opportunity_type.options selected=$fields.opportunity_type.value}
{else}
{html_options options=$fields.opportunity_type.options selected=$fields.opportunity_type.default}
{/if}
</select>
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='amount_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_AMOUNT' module='Opportunities'}{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.amount.value) <= 0}
{assign var="value" value=$fields.amount.default_value }
{else}
{assign var="value" value=$fields.amount.value }
{/if}  
<input type='text' name='{$fields.amount.name}' 
id='{$fields.amount.name}' size='30'  value='{sugar_number_format var=$value}' title='' tabindex='104' > 
<td valign="top" id='date_closed_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_CLOSED' module='Opportunities'}{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

<span class="dateTime">
{assign var=date_value value=$fields.date_closed.value }
<input class="date_input" autocomplete="off" type="text" name="{$fields.date_closed.name}" id="{$fields.date_closed.name}" value="{$date_value}" title=''  tabindex='105' size="11" maxlength="10" >
<img border="0" src="{sugar_getimagepath file='jscalendar.gif'}" alt="{$APP.LBL_ENTER_DATE}" id="{$fields.date_closed.name}_trigger" align="absmiddle" />
</span>
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.date_closed.name}",
ifFormat : "{$CALENDAR_FORMAT}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.date_closed.name}_trigger",
singleClick : true,
dateStr : "{$date_value}",
step : 1,
weekNumbers:false
{rdelim}
);
</script>
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='next_step_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_NEXT_STEP' module='Opportunities'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.next_step.value) <= 0}
{assign var="value" value=$fields.next_step.default_value }
{else}
{assign var="value" value=$fields.next_step.value }
{/if}  
<input type='text' name='{$fields.next_step.name}' 
id='{$fields.next_step.name}' size='30' 
maxlength='100' 
value='{$value}' title='' tabindex='106' > 
<td valign="top" id='sales_stage_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_SALES_STAGE' module='Opportunities'}{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

<select name="{$fields.sales_stage.name}" 
id="{$fields.sales_stage.name}" 
title='' tabindex="107"  
>
{if isset($fields.sales_stage.value) && $fields.sales_stage.value != ''}
{html_options options=$fields.sales_stage.options selected=$fields.sales_stage.value}
{else}
{html_options options=$fields.sales_stage.options selected=$fields.sales_stage.default}
{/if}
</select>
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='applicationname_c_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_APPLICATIONNAME' module='Opportunities'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.applicationname_c.value) <= 0}
{assign var="value" value=$fields.applicationname_c.default_value }
{else}
{assign var="value" value=$fields.applicationname_c.value }
{/if}  
<input type='text' name='{$fields.applicationname_c.name}' 
id='{$fields.applicationname_c.name}' size='30' 
maxlength='255' 
value='{$value}' title='' tabindex='108' > 
<td valign="top" id='amount_usdollar_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_AMOUNT_USDOLLAR' module='Opportunities'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.amount_usdollar.value) <= 0}
{assign var="value" value=$fields.amount_usdollar.default_value }
{else}
{assign var="value" value=$fields.amount_usdollar.value }
{/if}  
<input type='text' name='{$fields.amount_usdollar.name}' 
id='{$fields.amount_usdollar.name}' size='30'  value='{sugar_number_format var=$value}' title='' tabindex='109' > 
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='date_entered_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_ENTERED' module='Opportunities'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.date_entered.value) <= 0}
{assign var="value" value=$fields.date_entered.default_value }
{else}
{assign var="value" value=$fields.date_entered.value }
{/if} 
<span class="sugar_field" id="{$fields.date_entered.name}">{$fields.date_entered.value}</span>
<td valign="top" id='probability_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_PROBABILITY' module='Opportunities'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.probability.value) <= 0}
{assign var="value" value=$fields.probability.default_value }
{else}
{assign var="value" value=$fields.probability.value }
{/if}  
<input type='text' name='{$fields.probability.name}' 
id='{$fields.probability.name}' size='30'  value='{sugar_number_format precision=0 var=$value}' title='' tabindex='111' > 
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='assigned_user_name_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Opportunities'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' colspan='3'>
{counter name="panelFieldCount"}

<input type="text" name="{$fields.assigned_user_name.name}" class="sqsEnabled" tabindex="112" id="{$fields.assigned_user_name.name}" size="" value="{$fields.assigned_user_name.value}" title='' autocomplete="off"  >
<input type="hidden" name="{$fields.assigned_user_name.id_name}" 
id="{$fields.assigned_user_name.id_name}" 
value="{$fields.assigned_user_id.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.assigned_user_name.name}" id="btn_{$fields.assigned_user_name.name}" tabindex="112" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" 
onclick='open_popup(
"{$fields.assigned_user_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"form_SubpanelQuickCreate_Opportunities","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}{/literal}, 
"single", 
true
);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.assigned_user_name.name}" id="btn_clr_{$fields.assigned_user_name.name}" tabindex="112" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button lastChild" 
onclick="this.form.{$fields.assigned_user_name.name}.value = ''; this.form.{$fields.assigned_user_name.id_name}.value = '';" 
value="{$APP.LBL_CLEAR_BUTTON_LABEL}" ><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
<script type="text/javascript">
<!--
if(typeof QSProcessedFieldsArray != 'undefined') 
	QSProcessedFieldsArray["{$form_name}_{$fields.assigned_user_name.name}"] = false;
	

enableQS(false);
-->	
</script>
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("DEFAULT").style.display='none';</script>
{/if}
</div></div>

<div class="buttons">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button" onclick="this.form.action.value='Save';if(check_form('form_SubpanelQuickCreate_Opportunities'))return SUGAR.subpanelUtils.inlineSave(this.form.id, 'Opportunities_subpanel_save_button');return false;" type="submit" name="Opportunities_subpanel_save_button" id="Opportunities_subpanel_save_button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} 
<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate('Opportunities_subpanel_cancel_button');return false;" type="submit" name="Opportunities_subpanel_cancel_button" id="Opportunities_subpanel_cancel_button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> 
<input title="{$APP.LBL_FULL_FORM_BUTTON_TITLE}" accessKey="{$APP.LBL_FULL_FORM_BUTTON_KEY}" class="button" onclick="disableOnUnloadEditView(this.form); this.form.return_action.value='DetailView'; this.form.action.value='EditView'; if(typeof(this.form.to_pdf)!='undefined') this.form.to_pdf.value='0';" type="submit" name="Opportunities_subpanel_full_form_button" id="Opportunities_subpanel_full_form_button" value="{$APP.LBL_FULL_FORM_BUTTON_LABEL}"> <input type="hidden" name="full_form" value="full_form">
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Opportunities", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</form>
{$set_focus_block}
<!-- Begin Meta-Data Javascript -->
{$PROBABILITY_SCRIPT}
<!-- End Meta-Data Javascript -->
{$overlibStuff}
<script type="text/javascript">
YAHOO.util.Event.onContentReady("form_SubpanelQuickCreate_Opportunities",
    function () {ldelim} initEditView(document.forms.form_SubpanelQuickCreate_Opportunities) {rdelim});
//window.setTimeout(, 100);
window.onbeforeunload = function () {ldelim} return onUnloadEditView(); {rdelim};
</script>{literal}
<script type="text/javascript">
addToValidate('form_SubpanelQuickCreate_Opportunities', 'id', 'id', false,'{/literal}{sugar_translate label='LBL_ID' module='Opportunities' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Opportunities', 'name', 'name', true,'{/literal}{sugar_translate label='LBL_OPPORTUNITY_NAME' module='Opportunities' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Opportunities', 'date_entered_date', 'date', false,'Date Created' );
addToValidate('form_SubpanelQuickCreate_Opportunities', 'date_modified_date', 'date', false,'Date Modified' );
addToValidate('form_SubpanelQuickCreate_Opportunities', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED' module='Opportunities' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Opportunities', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='Opportunities' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Opportunities', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Opportunities' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Opportunities', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Opportunities' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Opportunities', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='Opportunities' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Opportunities', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='Opportunities' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Opportunities', 'assigned_user_id', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_ID' module='Opportunities' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Opportunities', 'assigned_user_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Opportunities' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Opportunities', 'opportunity_type', 'enum', false,'{/literal}{sugar_translate label='LBL_TYPE' module='Opportunities' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Opportunities', 'account_name', 'relate', true,'{/literal}{sugar_translate label='LBL_ACCOUNT_NAME' module='Opportunities' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Opportunities', 'account_id', 'id', false,'{/literal}{sugar_translate label='LBL_ACCOUNT_ID' module='Opportunities' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Opportunities', 'campaign_id', 'id', false,'{/literal}{sugar_translate label='LBL_CAMPAIGN_ID' module='Opportunities' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Opportunities', 'campaign_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CAMPAIGN' module='Opportunities' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Opportunities', 'lead_source', 'enum', false,'{/literal}{sugar_translate label='LBL_LEAD_SOURCE' module='Opportunities' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Opportunities', 'amount', 'currency', true,'{/literal}{sugar_translate label='LBL_AMOUNT' module='Opportunities' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Opportunities', 'amount_usdollar', 'currency', false,'{/literal}{sugar_translate label='LBL_AMOUNT_USDOLLAR' module='Opportunities' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Opportunities', 'currency_id', 'id', false,'{/literal}{sugar_translate label='LBL_CURRENCY' module='Opportunities' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Opportunities', 'currency_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CURRENCY_NAME' module='Opportunities' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Opportunities', 'currency_symbol', 'relate', false,'{/literal}{sugar_translate label='LBL_CURRENCY_SYMBOL' module='Opportunities' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Opportunities', 'date_closed', 'date', true,'{/literal}{sugar_translate label='LBL_DATE_CLOSED' module='Opportunities' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Opportunities', 'next_step', 'varchar', false,'{/literal}{sugar_translate label='LBL_NEXT_STEP' module='Opportunities' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Opportunities', 'sales_stage', 'enum', true,'{/literal}{sugar_translate label='LBL_SALES_STAGE' module='Opportunities' for_js=true}{literal}' );
addToValidateRange('form_SubpanelQuickCreate_Opportunities', 'probability', 'int', false,'{/literal}{sugar_translate label='LBL_PROBABILITY' module='Opportunities' for_js=true}{literal}', 0, 100 );
addToValidate('form_SubpanelQuickCreate_Opportunities', 'applicationname_c', 'varchar', false,'{/literal}{sugar_translate label='LBL_APPLICATIONNAME' module='Opportunities' for_js=true}{literal}' );
addToValidateBinaryDependency('form_SubpanelQuickCreate_Opportunities', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Opportunities' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Opportunities' for_js=true}{literal}', 'assigned_user_id' );
addToValidateBinaryDependency('form_SubpanelQuickCreate_Opportunities', 'account_name', 'alpha', true,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Opportunities' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ACCOUNT_NAME' module='Opportunities' for_js=true}{literal}', 'account_id' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['form_SubpanelQuickCreate_Opportunities_account_name']={"form":"form_SubpanelQuickCreate_Opportunities","method":"query","modules":["Accounts"],"group":"or","field_list":["name","id"],"populate_list":["form_SubpanelQuickCreate_Opportunities_account_name","account_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"required_list":["account_id"],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['form_SubpanelQuickCreate_Opportunities_assigned_user_name']={"form":"form_SubpanelQuickCreate_Opportunities","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};</script>{/literal}
