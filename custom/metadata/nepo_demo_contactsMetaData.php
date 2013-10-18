<?php
// created: 2013-10-17 16:29:50
$dictionary["nepo_demo_contacts"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'nepo_demo_contacts' => 
    array (
      'lhs_module' => 'NEPO_DEMO',
      'lhs_table' => 'nepo_demo',
      'lhs_key' => 'id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'nepo_demo_contacts_c',
      'join_key_lhs' => 'nepo_demo_contactsnepo_demo_ida',
      'join_key_rhs' => 'nepo_demo_contactscontacts_idb',
    ),
  ),
  'table' => 'nepo_demo_contacts_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'nepo_demo_contactsnepo_demo_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'nepo_demo_contactscontacts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'nepo_demo_contactsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'nepo_demo_contacts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'nepo_demo_contactsnepo_demo_ida',
        1 => 'nepo_demo_contactscontacts_idb',
      ),
    ),
  ),
);