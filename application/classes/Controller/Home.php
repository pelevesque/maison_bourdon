<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller {

	public function action_index()
	{
		$URL_base = URL::base(TRUE, TRUE);

		$this->response->body(View::factory('home')
			->bind('lang', Request::$lang)
			->bind('URL_base', $URL_base)
		);
	}

} // End Home
