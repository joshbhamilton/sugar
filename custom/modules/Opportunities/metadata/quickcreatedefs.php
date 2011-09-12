<?php
$viewdefs ['Opportunities'] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'javascript' => '{$PROBABILITY_SCRIPT}',
      'useTabs' => false,
    ),
    'panels' => 
    array (
      'DEFAULT' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'account_name',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'currency_id',
          ),
          1 => 
          array (
            'name' => 'opportunity_type',
          ),
        ),
        2 => 
        array (
          0 => 'amount',
          1 => 'date_closed',
        ),
        3 => 
        array (
          0 => 'next_step',
          1 => 'sales_stage',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'applicationname_c',
            'label' => 'LBL_APPLICATIONNAME',
          ),
          1 => 
          array (
            'name' => 'amount_usdollar',
            'comment' => 'Formatted amount of the opportunity',
            'label' => 'LBL_AMOUNT_USDOLLAR',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 'probability',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
          ),
        ),
      ),
    ),
  ),
);
?>
