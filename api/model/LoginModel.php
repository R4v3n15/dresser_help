<?php

class LoginModel
{
    public static function login($username, $password){
        // fail if empty username and empty password in one line
        if (empty($username) OR empty($password)) {
            return ['success' => false, 'message' => 'Fatal Error: username and password are required'];
        }

        // checks if user exists
        $result = UserModel::getUserDataByUsername($username);

        // check if that user exists. We don't give back a cause in the feedback to avoid giving an attacker details.
        if (!$result) {
            return ['success' => false, 'message' => 'Error: username or password wrong'];
        }

        // stop the user's login if account has been soft deleted
        if ($result->password != $password) {
            return ['success' => false, 'message' => 'Error: username or password wrong'];
        }

        return ['success' => true, 'credentials' => $result];
    }

    public static function register($username, $password){
        // fail if empty username and empty password in one line
        if (empty($username) OR empty($password)) {
            return ['success' => false, 'message' => 'Fatal Error: username and password are required'];
        }

        // checks if user exists
        $result = UserModel::getUserDataByUsername($username);

        // check if that user exists. We don't give back a cause in the feedback to avoid giving an attacker details.
        if (!$result) {
            return ['success' => false, 'message' => 'Error: username or password wrong'];
        }

        // stop the user's login if account has been soft deleted
        if ($result->password != $password) {
            return ['success' => false, 'message' => 'Error: username or password wrong'];
        }

        return ['success' => true, 'credentials' => $result];
    }



    /**
     * Log out process: delete cookie, delete session (web)
     */
    public static function logout()
    {
        $userid = Session::get('userid');

        self::deleteCookie($userid);

        Session::destroy();
        Session::updateSessionId($user_id);
    }

}
