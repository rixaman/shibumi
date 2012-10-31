<?php defined('SYSPATH') or die('No direct access allowed.');
class Controller_Admin_Item extends Controller_Common{
	public function action_index()
	{
		$this->template->title = "Item";
		$this->template->content = "test";
		$this->template->navigation->active = 'item';
	}
	public function action_create()
	{
		$this->template->navigation->active = 'item';

		if($this->request->method() == 'POST')
		{
			$item = ORM::factory('item')
				->values($this->request->post());
			$item->image = '/public/img/stuff/a1.jpg';
			// $personal->first_name = $this->request->post('first_name');
			// $personal->birthday = $this->request->post('birthday');
			// $personal->description = $this->request->post('description');
			$item->save();
		}

		$this->template->title = "Добавим нямку";

		$content = View::factory('admin/item_create')
			->bind('post', $post)
			->bind('errors', $errors);

		$this->template->content = $content;
	}
}