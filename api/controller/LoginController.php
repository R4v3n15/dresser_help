<?php

class LoginController {

	public function login(){
		Helpers::renderJSON(LoginModel::login(Request::post('username'), Request::post('password')));
	}

	public function signup(){
		$username   = strip_tags(Request::post('username'));
        $name       = strip_tags(Request::post('name'));
        $email      = strip_tags(Request::post('email'));
        $password   = strip_tags(Request::post('password'));
		$repassword = strip_tags(Request::post('repassword'));
		
		Helpers::renderJSON(UserModel::registerNewUser($username, $password, $repassword, $name, $email));
	}
}

?>