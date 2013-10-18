<?php
$module_name = 'NEPO_DEMO';
$viewdefs [$module_name] =
    array(
        'DetailView' =>
        array(
            'templateMeta' =>
            array(
                'form' =>
                array(
                    'buttons' =>
                    array(
                        0 => 'EDIT',
                        1 => 'DUPLICATE',
                        2 => 'DELETE',
                        3 => 'FIND_DUPLICATES',
                        4 =>
                        array(
                            'customCode' => '{if $fields.webservice_id.value > 5} <input title="{$MOD.LBL_SPECIAL_LABEL}" class="button" type="button" name="button" value="{$MOD.LBL_SPECIAL_LABEL}" onclick="specialCall(\'{$fields.id.value}\')">{/if}',
                        ),
                    ),
                ),
                'maxColumns' => '2',
                'widths' =>
                array(
                    0 =>
                    array(
                        'label' => '10',
                        'field' => '30',
                    ),
                    1 =>
                    array(
                        'label' => '10',
                        'field' => '30',
                    ),
                ),
                'includes' =>
                array(
                    0 => array(
                        'file' => 'cache/include/javascript/sugar_grp_yui_widgets.js',
                    ),
                    1 =>
                    array(
                        'file' => 'modules/NEPO_DEMO/javascript/nepo_demo.js',
                    ),
                ),
                'useTabs' => false,
                'tabDefs' =>
                array(
                    'DEFAULT' =>
                    array(
                        'newTab' => false,
                        'panelDefault' => 'expanded',
                    ),
                ),
            ),
            'panels' =>
            array(
                'default' =>
                array(
                    0 =>
                    array(
                        0 => 'name',
                        1 => 'assigned_user_name',
                    ),
                    1 =>
                    array(
                        0 =>
                        array(
                            'name' => 'webservice_id',
                            'label' => 'LBL_WEBSERVICE_ID',
                        ),
                        1 =>
                        array(
                            'name' => 'status',
                        ),
                    ),
                    2 =>
                    array(
                        0 =>
                        array(
                            'name' => 'date_entered',
                            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
                            'label' => 'LBL_DATE_ENTERED',
                        ),
                        1 =>
                        array(
                            'name' => 'date_modified',
                            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
                            'label' => 'LBL_DATE_MODIFIED',
                        ),
                    ),
                    3 =>
                    array(
                        0 => 'description',
                    ),
                ),
            ),
        ),
    );
?>
