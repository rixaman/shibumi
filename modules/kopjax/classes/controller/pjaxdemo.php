<?php
class Controller_PjaxDemo extends Controller {

	private $view;
	private $content;

	public function before() {

	}

	public function action_index() {
		$this->content = View::factory('pjax/home');
	}

	public function action_page2() {
		$this->content = View::factory('pjax/page2');
	}

	public function action_page3() {
		$this->content = View::factory('pjax/page3');
	}

	public function after() {
		if (!$this->request->is_ajax()) {
			$this->view = View::factory('pjax/template');
		} else {
			$this->view = View::factory('pjax/content');
		}
		$this->view->set('content', $this->content);
		$this->response->body($this->view);
	}

}