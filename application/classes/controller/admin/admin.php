<?php defined('SYSPATH') or die('No direct access allowed.');
class Controller_Admin_Admin extends Controller_Common{

	public function before()
	{
		// подмена меню на админское
		parent::before();
			$navigation = View::factory('admin/navigation')
			->bind('brand', $brand)
			->bind('active', $active);
		$brand = "Админка";
		$this->template->navigation = $navigation;

		// авторизация
		$session = Session::instance();
		$session->set('auth_redirect', $_SERVER['REQUEST_URI']);
		
		$auth = Auth::instance();
		if($auth->logged_in() == 0)  Request::initial()->redirect('auth');
	}
	public function action_index()
	{
		$this->template->title = "Админка";

		$content = View::factory('admin/admin');
		$this->template->content = $content;
		$this->template->navigation->active = 'admin';
	}
}