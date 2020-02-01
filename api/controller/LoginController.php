<?php

class LoginController {

	public function login(){
		Helpers::renderJSON(LoginModel::login(Request::post('username'), Request::post('password')));
	}

	public function signup(){
		$query = $this->connect()->query('SELECT * FROM pelicula');
		return $query;
	}
}

?>