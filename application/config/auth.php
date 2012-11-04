<?php defined('SYSPATH') or die('No direct access allowed.');

return array(

	'driver'       => 'file',
	'hash_method'  => 'sha256',
	'hash_key'     => ('1, 2, 3, 5, 8, 13'),
	'lifetime'     => 1209600,
	'session_type' => Session::$default,
	'session_key'  => 'auth_user',

	// Username/password combinations for the Auth File driver
	'users' => array(
		'Ermolaev' => '9c1faab8caee8cbcb69506fb4c894c06770808d713249595ac79cba97317c747',
	),

);
