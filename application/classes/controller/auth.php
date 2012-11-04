<?php defined('SYSPATH') or die('No direct script access.');

// класс авторизации
class Controller_Auth extends Controller_Common {

    public function action_index()
    {

    // авторизация пользователя
        $auth = Auth::instance();

    // если авторизован, то указываем на это
        if($auth->logged_in())
        {
            Request::initial()->redirect('admin');
        }
        else
        {
            // когда нажимаем кнопку войти, то передаём данные формы логин пароль серверу на проверку
            if(isset($_POST['btnlogin']))
            {
                $login = Arr::get($_POST, 'login', '');
                $password = Arr::get($_POST, 'password', '');
                if($auth->login($login, $password))
                {
                    $error = false;
                    Request::initial()->redirect('admin');
                }        
                else 
                {
                    $error = true;
                }
            }
        }

        // наполнение контента
        $this->template->title = "Авторизация";
        $content = View::factory('auth')
            ->bind('error', $error);
        $this->template->content = $content;
    }

    // хэшируем при желании новый пароль, дабы подставить хэш в конфиг
    public function action_hpass()
    {
        $auth = Auth::instance();
        $this->template->content = $auth->hash_password('newpass');
    }

    // разлогиниваемся
    public function action_logout()
    {
        $auth = Auth::instance();
        $auth->logout();
    }
}