<?php
 // created: 2020-03-03 16:07:41
$layout_defs["Notes"]["subpanel_setup"]['accounts_notes_1'] = array (
  'order' => 100,
  'module' => 'Accounts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_NOTES_1_FROM_ACCOUNTS_TITLE',
  'get_subpanel_data' => 'accounts_notes_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
