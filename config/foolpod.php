<?php

return array(

	/**
	 * FoolFuuka base variables
	 */
	'main' => array(

		/**
		 * Version for autoupgrades
		 */
		'version' => '0.0.1',

		/**
		 * Display name for the module
		 */
		'name' => 'FoolPod',

		/**
		 * The two letter identifier
		 */
		'identifier' => 'fp',

		/**
		 * The name that can be used in classes names
		 */
		'class_name' => 'Foolpod',

		/**
		 *  URL to download a newer version
		 */
		'git_tags_url' => 'https://api.github.com/repos/foolrulez/foolfuuka/tags',

		/**
		 * URL to fetch the changelog
		 */
		'git_changelog_url' => 'https://raw.github.com/foolrulez/FoOlFuuka/master/CHANGELOG.md',

		/**
		 * Minimal PHP requirement
		 */
		'min_php_version' => '5.4.0'
	),


	/**
	 * Locations of the data out of the module folder
	 */
	'directories' => array(
		'themes' => DOCROOT.'foolpod/themes/',
		'plugins' => DOCROOT.'foolpod/plugins/'
	),


	/**
	 * Preferences for when there's no default specified
	 */
	'preferences' => array(

		'gen' => array(
			'website_title' => 'FoolPod',
			'index_title' => 'FoolPod',
		),
	)

);
