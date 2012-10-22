<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Page extends Controller_Common {

	public function action_index()
	{
        $this->template->title = "Chandra";
        $this->template->navigation->active = '/';
        $this->template->content = View::factory('main');
	}

	public function action_catalog()
	{
        $this->template->title = "Меню";
		$this->template->navigation->active = 'catalog';
		$this->template->content = View::factory('catalog');
	}

	public function action_health()
	{
		$this->template->title = "О пользе";
		$this->template->navigation->active = 'health';
		$this->template->content = View::factory('health');		
	}

	public function action_about()
	{
		$this->template->title = "О нас";
		$this->template->navigation->active = 'about';
		$this->template->content = View::factory('about');
	}

	public function action_contacts()
	{
		$this->template->title = "Контакты";
		$this->template->navigation->active = 'contacts';
		$this->template->content = View::factory('contacts');	
	}
} // End Welcome
