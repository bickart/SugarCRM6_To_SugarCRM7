<?php

$dependencies['NEPO_DEMO']['readonly'] = array(
	'hooks' => array("edit"),
	'trigger' => 'true',
	'triggerFields' => true,
	'onload' => true,
	'actions' => array(
		array(
			'name' => 'ReadOnly',
			'params' => array(
				'target' => 'webservice_id',
				'value' => 'true',
			),
		),
         )
);
