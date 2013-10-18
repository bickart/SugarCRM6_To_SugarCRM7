<?php
$admin_option_defs = array();
$admin_option_defs['Administration']['demo'] = array(
    'NEPO_DEMO',
    'LBL_DEMO_TITLE',
    'LBL_DEMO_DESC',
    './index.php?module=NEPO_DEMO&action=schema'
);

$admin_group_header[] = array(
    'LBL_NEPO_CONFIG_TITLE',
    '',
    false,
    $admin_option_defs
);
?>
