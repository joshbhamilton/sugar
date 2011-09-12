<?php /* Smarty version 2.6.11, created on 2011-09-01 14:19:05
         compiled from modules/Connectors/connectors/sources/ext/rest/insideview/InsideView.en_us.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getimagepath', 'modules/Connectors/connectors/sources/ext/rest/insideview/InsideView.en_us.tpl', 92, false),)), $this); ?>
<script type="text/javascript">
function allowInsideView() {
document.getElementById('insideViewFrame').src = '<?php echo $this->_tpl_vars['AJAX_URL']; ?>
';
document.getElementById('insideViewConfirm').style.display = 'none';
document.getElementById('insideViewFrame').style.display = 'block';
document.getElementById('insideViewDiv').style.height='430px';
YAHOO.util.Connect.asyncRequest('GET', 'index.php?module=Connectors&action=CallConnectorFunc&source_id=ext_rest_insideview&source_func=allowInsideView', {}, null);
}
    YAHOO.util.Event.onDOMReady(function(){
        markSubPanelLoaded('insideview');
        var insideViewSubPanel = document.getElementById("subpanel_insideview" );
        insideViewSubPanel.cookie_name="insideview_v";
        if(div_cookies['insideview_v']){
            if(div_cookies['insideview_v'] == 'none')
            {
                hideSubPanel('insideview');
                document.getElementById('hide_link_insideview').style.display='none';
                document.getElementById('show_link_insideview').style.display='';
            }
        }
        toggleGettingStartedButton();
    });

    function toggleGettingStartedButton(){
        var acceptBox  = document.getElementById( "insideview_accept_box" );
        var gettingStartedButton  = document.getElementById( "insideview_accept_button" );

        if( acceptBox.checked ){
            gettingStartedButton.disabled = '';
            gettingStartedButton.focus();
        }
        else {
            gettingStartedButton.disabled = "disabled";
        }
    }
</script>
<div id='insideViewDiv' style='width:100%' class="doNotPrint">
    <table width="100%" cellpadding="0" cellspacing="0" border="0" class="formHeader h3Row">
        <tbody>
            <tr>
                <td nowrap="" style="padding: 0px;">
                    <h3>
                        <span>
                            <a name="insideview"> </a>
                            <span id="show_link_insideview" style="display: none">
                                <a href="#" onclick="current_child_field = 'insideview';showSubPanel('insideview',null,null,'insideview');document.getElementById('show_link_insideview').style.display='none';document.getElementById('hide_link_insideview').style.display='';return false;"><img src="<?php echo $this->_tpl_vars['logo_collapsed']; ?>
" border="0"></a>
                            </span>
                            <span id="hide_link_insideview" style="display: ">
                                <a href="#" onclick="hideSubPanel('insideview');document.getElementById('hide_link_insideview').style.display='none';document.getElementById('show_link_insideview').style.display='';return false;"><img src="<?php echo $this->_tpl_vars['logo_expanded']; ?>
" border="0"></a>
                            </span>
                        </span>
                    </h3>
                </td>
                <td width="100%">
                    <img height="1" width="1" src="<?php echo smarty_function_sugar_getimagepath(array('file' => 'blank.gif'), $this);?>
" alt="">
                </td>
            </tr>
        </tbody>
    </table>
  <div id='subpanel_insideview' style='width:100%' <?php if (! $this->_tpl_vars['showInsideView']): ?>align="center"<?php endif; ?>>
      <div id='insideViewConfirm' class="detail view" style="padding: 20px; width: 700px; text-align: left; position: relative;<?php if ($this->_tpl_vars['showInsideView']): ?>display:none;<?php endif; ?>">
      
      <a href="#" onclick="hideSubPanel('insideview');document.getElementById('hide_link_insideview').style.display='none';document.getElementById('show_link_insideview').style.display='';return false;"><img src="<?php echo $this->_tpl_vars['close']; ?>
" border="0" style='position: absolute; top: -8px; right: -9px;'></a>
      
      
      <div style="font-size: 14px;">
      	<a href='http://www.insideview.com/SUGARCRM/' target='_blank' style='text-decoration: none; font-size: 14px;'><strong style='color: #d71e00;'>InsideView:</strong></a> <strong>Real-time Sales Intelligence.</strong>
      </div>
      
   
      
      
	<div style="float: left; padding-bottom: 10px; font-size: 13px; padding-right: 20px; padding-top: 10px;">
      


        Get relevant company information, contacts, news, and social media insights.<br> InsideView is a <strong>FREE</strong> service that automatically displays key sales intelligence<br/> directly in your Sugar Leads, Accounts, Contacts and Opportunities.

       
      </div>
      
      
         <div style="float: right; padding-bottom: 10px; width: 190px;"><a href='http://www.insideview.com/SUGARCRM/' target='_blank' style='text-decoration: none;'><img style="margin-right: 10px; border-radius: 6px 6px 6px 6px; -moz-border-radius: 6px 6px 6px 6px; -webkit-border-radius: 6px 6px 6px 6px;" src="<?php echo $this->_tpl_vars['video']; ?>
" align="left"/></a><a href='http://www.insideview.com/SUGARCRM/' target='_blank' style='text-decoration: none; position: relative; top: 15px;'>InsideView in<br>30 seconds.</a></div>
      
               <hr style="width: 775px; border-color: #eee; background-color: #eee;">
     <form>
     <input type="checkbox" class="checkbox" name="insideview_accept_box" id="insideview_accept_box" onClick='toggleGettingStartedButton();'/>&nbsp;I agree to InsideView's  <a href='http://www.insideview.com/cat-terms-use.html' target='_blank' style='text-decoration: none;'>terms of use</a> and <a href='http://www.insideview.com/cat-privacy.html' target='_blank' style='text-decoration: none;'>privacy policy</a>.
         <button name="insideview_accept_button" id="insideview_accept_button" onclick="allowInsideView(); return false;" class='button primary' style='height: 25px; float: right; border: 1px solid #821200; background-color: #eeeeee; background-image: none; text-shadow: 1px 1px #FFFFFF; color: #222; margin-bottom: 0px; background-image: -moz-linear-gradient(center top , #F9F9F9 0%, #F2F2F2 50%, #F1F1F1 50%, #DDDDDD 100%); background-image: -webkit-gradient( linear,left top,left bottom,color-stop(0, #f9f9f9),color-stop(.5, #F2F2F2),color-stop(.5, #F1F1F1),color-stop(1, #DDDDDD)); filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#f9f9f9", endColorstr="#DDDDDD");'>Get Started!</button>
          
     </form>
      <div class="clear"></div>
      
      </div>
      <iframe id='insideViewFrame' src='<?php echo $this->_tpl_vars['URL']; ?>
' scrolling="no" style='border:0px; width:100%;height:400px;overflow:hidden;<?php if (! $this->_tpl_vars['showInsideView']): ?>display:none;<?php else: ?>display:block;<?php endif; ?>'></iframe>
   </div>
</div>