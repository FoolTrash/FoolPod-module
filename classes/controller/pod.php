<?php

namespace Foolpod;

class Controller_Pod extends \Controller_Common
{
	/**
	 * Holds the currently set up theme object
	 * 
	 * @var \Theme 
	 */
	protected $_theme = null;
	
	
	public function before()
	{
		parent::before();

		$this->_theme = \Theme::instance('foolpod');
	}
	
	
	public function action_index()
	{
		return \Response::forge($this->_theme->build('index'));
	}
	
}