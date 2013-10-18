<?php
 // created: 2013-10-17 16:29:50
$layout_defs["NEPO_DEMO"]["subpanel_setup"]['nepo_demo_leads'] = array (
  'order' => 100,
  'module' => 'Leads',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_NEPO_DEMO_LEADS_FROM_LEADS_TITLE',
  'get_subpanel_data' => 'nepo_demo_leads',
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
