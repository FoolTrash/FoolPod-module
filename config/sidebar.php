<?php

return array(

	'sidebar' => array(

		'containers' => array(
			"name" => __("Containers"),
			"level" => "admin",
			"default" => "manage",
			"content" => array(
				"containers" => array("level" => "admin", "name" => __("Containers"), "icon" => 'icon-th-list'),
				"add_new_container" => array("level" => "admin", "name" => __("New container"), "icon" => 'icon-th-list'),
				"container_types" => array("level" => "admin", "name" => __("Container types"), "icon" => 'icon-th-list'),
				"add_new_container_type" => array("level" => "admin", "name" => __("New container type"), "icon" => 'icon-th-list'),
			)
		),

	)
);