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
		$page = ORM::factory('page');
		$page->where('name', '=', 'health')->find();
		$title = $page->title;
		$description = $page->description;

		$this->template->title = $title;
		$this->template->navigation->active = $page->name;

		$content = View::factory('page')
			->bind('description', $description);
		$this->template->content = $content; 		
	}

	public function action_about()
	{
		$page = ORM::factory('page');
		$page->where('name', '=', 'about')->find();
		$title = $page->title;
		$description = $page->description;

		$this->template->title = $title;
		$this->template->navigation->active = $page->name;

		$content = View::factory('page')
			->bind('description', $description);
		$this->template->content = $content; 
	}

	public function action_contacts()
	{
		//отдельный вид страницы, контакты

		$this->template->title = 'Контакты';
		$this->template->navigation->active = 'contacts';

		$content = View::factory('contacts');
		$this->template->content = $content; 	
	}
} // End Welcome
