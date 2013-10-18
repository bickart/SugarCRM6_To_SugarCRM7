<?php
/**
 * Copyright 2013 NEPO Systems, LLC
 *
 * Twitter: @bickart
 * Date: October 17, 2013
 *
 */

$manifest = array(
    'acceptable_sugar_versions' =>
    array(
        'exact_matches' =>
        array(),
        'regex_matches' =>
        array(
            0 => '6.3.[01]?',
            1 => '6.4.[01]?',
            2 => '6.5.[01]?',
            3 => '6.6.[01]?',
            4 => '6.7.[01]?',
            5 => '6.8.[01]?',
            6 => '6.9.[01]?',
            7 => '7.0.[01]?',
        ),
    ),
    'acceptable_sugar_flavors' =>
    array(
        'CE', 'PRO', 'ENT', 'CORP', 'ULT'
    ),
    'readme' => '',
    'key' => '',
    'author' => 'jeff @ neposystems dot com',
    'description' => 'Example SugarCRM 6 Module converted to SugarCRM 7',
    'icon' => '',
    'name' => 'Simple Example',
    'published_date' => 'Oct 18, 2013 5:00:00 PM EST',
    'type' => 'module',
    'version' => '0.0.1',
    'remove_tables' => 'true',
    'is_uninstallable' => 'true',
);

$installdefs = array(
    'id' => 'SugarCRM7_DEMO',
    'copy' => array(
        0 => array(
            'from' => '<basepath>/SugarModules/NEPO_DEMO',
            'to' => 'modules/NEPO_DEMO',
        ),
        1 => array(
            'from' => '<basepath>/custom/Extension/application',
            'to' => 'custom/Extension/application',
        ),
        2 => array(
            'from' => '<basepath>/custom/Extension/modules/Administration',
            'to' => 'custom/Extension/modules/Administration',
        ),
        3 => array(
            'from' => '<basepath>/custom/Extension/modules/Leads',
            'to' => 'custom/Extension/modules/Leads',
        ),
        4 => array(
            'from' => '<basepath>/custom/Extension/modules/Contacts',
            'to' => 'custom/Extension/modules/Contacts',
        ),
        5 => array(
            'from' => '<basepath>/custom/Extension/modules/NEPO_DEMO',
            'to' => 'custom/Extension/modules/NEPO_DEMO',
        ),
    ),
    'language' =>
    array(
        0 => array(
            'from' => '<basepath>/custom/Extension/application/Ext/Language/en_us.DEMO.php',
            'to_module' => 'application',
            'language' => 'en_us',
        ),
    ),
    'beans' => array(
        0 =>
        array(
            'module' => 'NEPO_DEMO',
            'class' => 'NEPO_DEMO',
            'path' => 'modules/NEPO_DEMO/NEPO_DEMO.php',
            'tab' => true,
        ),
    ),
    'language' => array(
        array(
            'from' => '<basepath>/files/Language/Accounts/en_us.lang.php',
            'to_module' => 'Accounts',
            'language' => 'en_us'
        ),
    ),

    'relationships' => array(
        array(
            'module' => 'Leads',
            'meta_data' => '<basepath>/custom/metadata/nepo_demo_leadsMetaData.php',
            'module_vardefs' => '<basepath>/custom/Extension/modules/Leads/Ext/Vardefs/nepo_demo_contacts_Leads.php',
            'module_layoutdefs' => '<basepath>/custom/Extension/modules/Leads/Ext/Layoutdefs/nepo_demo_contacts_Leads.php'
        ),
        array(
            'module' => 'Contacts',
            'meta_data' => '<basepath>/custom/metadata/nepo_demo_contactsMetaData.php',
            'module_vardefs' => '<basepath>/custom/Extension/modules/Contacts/Ext/Vardefs/nepo_demo_contacts_Contacts.php',
            'module_layoutdefs' => '<basepath>/custom/Extension/modules/Contacts/Ext/Layoutdefs/nepo_demo_contacts_Contacts.php'
        ),
    ),

);
