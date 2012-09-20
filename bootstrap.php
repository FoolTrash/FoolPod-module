<?php

\Autoloader::add_classes(array(

));

$theme = \Theme::forge('foolpod');
$theme->set_module('foolpod');
$theme->set_theme(\Input::get('theme', \Cookie::get('theme')) ? : 'default');
$theme->set_layout('default');