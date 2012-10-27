<?php

namespace Foolpod;

use Foolz\Autoupgrade\Container;

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

	public function action_download($id)
	{
		try
		{
			$container = Container::getById($id);
		}
		catch (\Foolz\Autoupgrade\ContainerNotFoundException $e)
		{
			throw new \HttpNotFoundException;
		}

		\Response::redirect(\Uri::base().$container->getDirectLink());
	}
}