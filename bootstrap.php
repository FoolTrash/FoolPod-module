<?php

\Autoloader::add_classes([
	'Foolz\Foolpod\Model\Container' =>  __DIR__.'/classes/Foolz/Foolpod/Model/Container.php',
	'Foolz\Foolpod\Model\ContainerType' =>  __DIR__.'/classes/Foolz/Foolpod/Model/ContainerType.php'
]);

$theme = \Theme::forge('foolpod');
$theme->set_module('foolpod');
$theme->set_theme(\Input::get('theme', \Cookie::get('theme')) ? : 'default');
$theme->set_layout('default');