<?php

namespace Foolpod;

use Foolz\Autoupgrade\Container,
	Foolz\Autoupgrade\ContainerType;

class Controller_Api_Pod extends \Controller_Rest
{
	protected $format = 'json';

	public function get_latest()
	{
		$type = \Input::get('type', null);
		$name = \Input::get('name', null);

		if ($type === null || $name === null)
		{
			return $this->response(['error' => 'Malformed request.'], 404);
		}

		try
		{
			$containers = Container::get($type, $name, 'latest');
		}
		catch (\Foolz\Autoupgrade\ContainerNotFoundException $e)
		{
			return $this->response(['error' => $e->getMessage()], 404);
		}

		return $this->response($containers, 200);
	}

	public function get_download()
	{
		try
		{
			$container = Container::getById(\Input::get('id', 0));
		}
		catch (\Foolz\Autoupgrade\ContainerNotFoundException $e)
		{
			return $this->response(['error' => $e->getMessage()], 404);
		}

		return $this->response(['direct_link' => \Uri::base().$container->getDirectLink()]);
	}

}