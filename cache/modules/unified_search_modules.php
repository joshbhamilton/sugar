<?php
// created: 2011-09-01 15:12:50
$unified_search_modules = array (
  'Accounts' => 
  array (
    'fields' => 
    array (
      'name' => 
      array (
        'query_type' => 'default',
      ),
      'phone' => 
      array (
        'query_type' => 'default',
        'db_field' => 
        array (
          0 => 'phone_office',
        ),
        'vname' => 'LBL_ANY_PHONE',
      ),
      'email' => 
      array (
        'query_type' => 'default',
        'operator' => 'subquery',
        'subquery' => 'SELECT eabr.bean_id FROM email_addr_bean_rel eabr JOIN email_addresses ea ON (ea.id = eabr.email_address_id) WHERE eabr.deleted=0 AND ea.email_address LIKE',
        'db_field' => 
        array (
          0 => 'id',
        ),
        'vname' => 'LBL_ANY_EMAIL',
      ),
    ),
    'default' => true,
  ),
  'Bugs' => 
  array (
    'fields' => 
    array (
      'name' => 
      array (
        'query_type' => 'default',
      ),
      'bug_number' => 
      array (
        'query_type' => 'default',
        'operator' => 'in',
      ),
    ),
    'default' => false,
  ),
  'Calls' => 
  array (
    'fields' => 
    array (
      'name' => 
      array (
        'query_type' => 'default',
      ),
    ),
    'default' => true,
  ),
  'Campaigns' => 
  array (
    'fields' => 
    array (
      'name' => 
      array (
        'query_type' => 'default',
      ),
    ),
    'default' => false,
  ),
  'Cases' => 
  array (
    'fields' => 
    array (
      'name' => 
      array (
        'query_type' => 'default',
      ),
      'case_number' => 
      array (
        'query_type' => 'default',
        'operator' => 'in',
      ),
      'account_name' => 
      array (
        'query_type' => 'default',
        'db_field' => 
        array (
          0 => 'accounts.name',
        ),
      ),
    ),
    'default' => true,
  ),
  'Contacts' => 
  array (
    'fields' => 
    array (
      'first_name' => 
      array (
        'query_type' => 'default',
      ),
      'last_name' => 
      array (
        'query_type' => 'default',
      ),
      'phone' => 
      array (
        'query_type' => 'default',
        'db_field' => 
        array (
          0 => 'phone_mobile',
          1 => 'phone_work',
          2 => 'phone_other',
          3 => 'phone_fax',
          4 => 'assistant_phone',
        ),
      ),
      'assistant' => 
      array (
        'query_type' => 'default',
      ),
      'email' => 
      array (
        'query_type' => 'default',
        'operator' => 'subquery',
        'subquery' => 'SELECT eabr.bean_id FROM email_addr_bean_rel eabr JOIN email_addresses ea ON (ea.id = eabr.email_address_id) WHERE eabr.deleted=0 AND ea.email_address LIKE',
        'db_field' => 
        array (
          0 => 'id',
        ),
      ),
      'account_name' => 
      array (
        'query_type' => 'default',
        'db_field' => 
        array (
          0 => 'accounts.name',
        ),
      ),
    ),
    'default' => true,
  ),
  'Documents' => 
  array (
    'fields' => 
    array (
      'document_name' => 
      array (
        'query_type' => 'default',
      ),
    ),
    'default' => true,
  ),
  'Leads' => 
  array (
    'fields' => 
    array (
      'first_name' => 
      array (
        'query_type' => 'default',
      ),
      'last_name' => 
      array (
        'query_type' => 'default',
      ),
      'phone' => 
      array (
        'query_type' => 'default',
        'db_field' => 
        array (
          0 => 'phone_mobile',
          1 => 'phone_work',
          2 => 'phone_other',
          3 => 'phone_fax',
          4 => 'phone_home',
        ),
      ),
      'assistant' => 
      array (
        'query_type' => 'default',
      ),
      'account_name' => 
      array (
        'query_type' => 'default',
        'db_field' => 
        array (
          0 => 'leads.account_name',
        ),
      ),
      'email' => 
      array (
        'query_type' => 'default',
        'operator' => 'subquery',
        'subquery' => 'SELECT eabr.bean_id FROM email_addr_bean_rel eabr JOIN email_addresses ea ON (ea.id = eabr.email_address_id) WHERE eabr.deleted=0 AND ea.email_address LIKE',
        'db_field' => 
        array (
          0 => 'id',
        ),
      ),
    ),
    'default' => true,
  ),
  'Meetings' => 
  array (
    'fields' => 
    array (
      'name' => 
      array (
        'query_type' => 'default',
      ),
    ),
    'default' => true,
  ),
  'Notes' => 
  array (
    'fields' => 
    array (
      'name' => 
      array (
        'query_type' => 'default',
      ),
    ),
    'default' => true,
  ),
  'Opportunities' => 
  array (
    'fields' => 
    array (
      'name' => 
      array (
        'query_type' => 'default',
      ),
      'account_name' => 
      array (
        'query_type' => 'default',
        'db_field' => 
        array (
          0 => 'accounts.name',
        ),
      ),
    ),
    'default' => true,
  ),
  'Project' => 
  array (
    'fields' => 
    array (
      'name' => 
      array (
        'query_type' => 'default',
      ),
    ),
    'default' => false,
  ),
  'ProjectTask' => 
  array (
    'fields' => 
    array (
      'name' => 
      array (
        'query_type' => 'default',
      ),
    ),
    'default' => false,
  ),
  'ProspectLists' => 
  array (
    'fields' => 
    array (
      'name' => 
      array (
        'query_type' => 'default',
      ),
    ),
    'default' => false,
  ),
  'Prospects' => 
  array (
    'fields' => 
    array (
      'first_name' => 
      array (
        'query_type' => 'default',
      ),
      'last_name' => 
      array (
        'query_type' => 'default',
      ),
      'phone' => 
      array (
        'query_type' => 'default',
        'db_field' => 
        array (
          0 => 'phone_mobile',
          1 => 'phone_work',
          2 => 'phone_other',
          3 => 'phone_fax',
          4 => 'phone_home',
        ),
      ),
      'assistant' => 
      array (
        'query_type' => 'default',
      ),
    ),
    'default' => false,
  ),
  'Tasks' => 
  array (
    'fields' => 
    array (
      'name' => 
      array (
        'query_type' => 'default',
      ),
    ),
    'default' => false,
  ),
);
?>
