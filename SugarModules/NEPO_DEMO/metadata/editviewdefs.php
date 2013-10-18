<?php
$module_name = 'NEPO_DEMO';
$viewdefs [$module_name] =
    array(
        'EditView' =>
        array(
            'templateMeta' =>
            array(
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
                            'displayParams' =>
                            array(
                                'field' =>
                                array(
                                    'onchange' => 'specialCall();',
                                ),
                            ),
                        ),
                    ),
                    2 =>
                    array(
                        0 => 'description',
                    ),
                ),
            ),
        ),
    );
?>
