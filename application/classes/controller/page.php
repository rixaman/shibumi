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

		$items = ORM::factory('item')->find_all(); 

		$content = View::factory('catalog')
			->bind('items', $items);
		$this->template->content = $content; 
	}

	public function action_health()
	{
		$this->template->title = "О пользе";
		$this->template->navigation->active = 'health';

		$this->template->content = View::factory('health');		
	}

	public function action_about()
	{
		$page = ORM::factory('page');
		$page->where('name', '=', 'about')->find();
		$title = $page->title;
		$description = $page->description;

		$this->template->title = $title;
		$this->template->navigation->active = 'about';

		$content = View::factory('about')
			->bind('description', $description);
		$this->template->content = $content; 
	}

	public function action_contacts()
	{
		$this->template->title = "Контакты";
		$this->template->navigation->active = 'contacts';

		$this->template->content = View::factory('contacts');	
	}
} // End Welcome
