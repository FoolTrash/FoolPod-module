<?php

return array(
	
	'roles' => array(
		'user' => array(),
		'mod' => array(),
		'admin' => array(
			'container' => array('upload', 'upload_limitless'),
			'comment' => array('see_ip', 'passwordless_deletion', 'limitless_comment', 'reports', 'mod_capcode', 'admin_capcode', 'dev_capcode'),
			'media' => array('see_banned', 'see_hidden', 'limitless_media'),
			'users' => array('access', 'change_credentials', 'change_group')
		),
	),
);
