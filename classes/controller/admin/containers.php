<?php

namespace Foolpod;

use Foolz\Autoupgrade\Container,
	Foolz\Autoupgrade\ContainerType;

class Controller_Admin_Containers extends \Controller_Admin
{
	public function before()
	{
		parent::before();

		if ( ! \Auth::has_access('container.create_type'))
		{
			\Response::redirect('admin');
		}

		$this->_views['controller_title'] = __('Containers');
	}

	public function action_add_new_container()
	{
		$this->_views['method_title'] = __('Add new container');
		$this->_views['main_content_view'] = \View::forge('foolpod::admin/add_container');

		if (\Input::post())
		{
			$container = Container::forgeFromUpload();
			$container->insert();
		}

		return \Response::forge(\View::forge('admin/default', $this->_views));
	}

	public function action_container_types()
	{
		$this->_views['method_title'] = __('Manage Container Types');
		$this->_views['main_content_view'] = \View::forge('foolpod::admin/container_types', array('types' => ContainerType::getAll()));

		return \Response::forge(\View::forge('admin/default', $this->_views));
	}

	public function action_container_type($slug)
	{
		$data['form'] = ContainerType::structure();

		if (\Input::post() && ! \Security::check_token())
		{
			\Notices::set('warning', __('The security token wasn\'t found. Try resubmitting.'));
		}
		else if (\Input::post())
		{
			$result = \Validation::form_validate($data['form']);
			if (isset($result['error']))
			{
				\Notices::set('warning', $result['error']);
			}
			else
			{
				// it's actually fully checked, we just have to throw it in DB
				ContainerType::save($result['success']);
				\Notices::set('success', __('Container type information updated.'));
			}
		}

		try
		{
			$data['object'] = ContainerType::getBySlug($slug);
		}
		catch (\Foolz\Autoupgrade\ContainerTypeNotFoundException $e)
		{
			throw new \HttpNotFoundException;
		}

		$this->_views["method_title"] = __('Creating a new container type');
		$this->_views["main_content_view"] = \View::forge('admin/form_creator', $data);

		return \Response::forge(\View::forge('admin/default', $this->_views));
	}

	public function action_add_new_container_type()
	{
		$data['form'] = ContainerType::structure();

		if (\Input::post() && ! \Security::check_token())
		{
			\Notices::set('warning', __('The security token wasn\'t found. Try resubmitting.'));
		}
		else if (\Input::post())
		{
			$result = \Validation::form_validate($data['form']);
			if (isset($result['error']))
			{
				\Notices::set('warning', $result['error']);
			}
			else
			{
				// it's actually fully checked, we just have to throw it in DB
				ContainerType::save($result['success']);
				\Notices::set_flash('success', __('New board created!'));
				\Response::redirect('admin/containers/container_type/'.$result['success']['slug']);
			}
		}

		$this->_views["method_title"] = __('Creating a new container type');
		$this->_views["main_content_view"] = \View::forge('admin/form_creator', $data);

		return \Response::forge(\View::forge('admin/default', $this->_views));
	}
}