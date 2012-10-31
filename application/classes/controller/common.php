<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Common extends Controller_Template {

	public function before()
	{
		parent::before();
		$navigation = View::factory('navigation')
			->bind('brand', $brand)
			->bind('active', $active);
		$brand = "Привет";
		$active = '/';

		$this->template->navigation = $navigation;

		$this->template->footer = View::factory('footer');

		$bootstrap = Less::compile('bootstrap');
		//стили и скрипты
		$this->template->styles = array($bootstrap, '/public/css/styles.css');
        $this->template->scripts = array('/public/js/jquery-1.8.2.min.js', '/public/js/scripts.js');
	}
}