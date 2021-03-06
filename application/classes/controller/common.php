<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Common extends Controller_Template {

	public function before()
	{
		parent::before();


		// подключаем меню навигации
		$navigation = View::factory('navigation')
			->bind('brand', $brand)
			->bind('active', $active);
		$brand = "Привет";
		$active = '/';
		$this->template->navigation = $navigation;


		//подключаем футер
		$address = ORM::factory('page');
		$marketing = ORM::factory('page');
		$phones = ORM::factory('page');

		$address = $address->where('name', '=', 'contacts')->find()->description;

		$marketing = $marketing->where('name', '=', 'health')->find()->description;

		$phones = $phones->where('name', '=', 'phones')->find()->description;

		$footer = View::factory('footer')
			->bind('address', $address)
			->bind('marketing', $marketing)
			->bind('phones', $phones);
		$this->template->footer = $footer; 


		// компилируем бутстрап
		$bootstrap = Less::compile('bootstrap');

		
		//стили
		$this->template->styles = array($bootstrap, '/public/css/styles.css');
		
        $this->template->scripts = array(
        	'/public/js/jquery-1.8.2.min.js', 
        	//'//vk.com/js/api/openapi.js', 
        	'http://api-maps.yandex.ru/2.0-stable/?lang=ru-RU&coordorder=longlat&load=package.full&wizard=constructor&onload=fid_135219974509787097091', 
        	'/public/js/bootstrap-carousel.js', 
        	'/public/js/scripts.js'
        );
	}
}