<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Common extends Controller_Template {

	public function before()
	{
		parent::before();
		$this->template->navigation = View::factory('navigation');
			$this->template->navigation->brand = "Привет";
		$this->template->footer = View::factory('footer');
	}
} // End Welcome
