<?php

class UserModel
{
    public static function getUserDataByUsername($username) {
        $database = Database::getFactory()->connect();

        $sql   = "SELECT * FROM users WHERE (username = :username OR email = :username) LIMIT 1";
        $query = $database->prepare($sql);
        $query->execute(array(':username' => $username));

        // return one row (we only have one result or nothing)
        return $query->fetch();
    }

    public static function getUserByEmail($email){
        $database = Database::getFactory()->connect();

        $sql    = "SELECT * FROM users WHERE email = :email LIMIT 1";
        $query  = $database->prepare($sql);
        $query->execute(array(':email' => $email));

        return $query->fetch();
    }


    public static function usernameAlreadyExist($username){
        $database = Database::getFactory()->connect();

        $query = $database->prepare("SELECT id FROM users WHERE username = :username LIMIT 1;");
        $query->execute(array(':username' => $username));
        if ($query->rowCount() == 0) {
            return false;
        }
        return true;
    }


    public static function emailAlreadyExist($email){
        $database = Database::getFactory()->connect();

        $query = $database->prepare("SELECT id FROM users WHERE email = :email LIMIT 1");
        $query->execute(array(':email' => $email));
        if ($query->rowCount() == 0) {
            return false;
        }
        return true;
    }


    public static function saveNewUserName($user_id, $new_username) {
        $database = Database::getFactory()->connect();

        $query = $database->prepare("UPDATE users SET username = :username WHERE id = :user_id LIMIT 1");
        $query->execute(array(':username' => $new_username, ':user_id' => $user_id));
        if ($query->rowCount() == 1) {
            return true;
        }
        return false;
    }

    public static function saveNewEmailAddress($user_id, $new_email) {
        $database = Database::getFactory()->connect();

        $query = $database->prepare("UPDATE users SET email = :email WHERE id = :user_id LIMIT 1");
        $query->execute(array(':email' => $new_email, ':user_id' => $user_id));
        $count = $query->rowCount();
        if ($count == 1) {
            return true;
        }
        return false;
    }


    public static function getUserIdByUsername($username){
        $database = Database::getFactory()->connect();

        $sql = "SELECT id FROM users WHERE username = :username LIMIT 1";
        $query = $database->prepare($sql);

        $query->execute(array(':username' => $username));

        // return one row (we only have one result or nothing)
        return $query->fetch()->id;
    }

    public static function registerNewUser($username, $password, $repassword, $name, $email) {

        // stop registration flow if registrationInputValidation() returns false (= anything breaks the input check rules)
        if (!self::validateName($name)) {
            return ['success' => false, 'message' => 'Please enter a valid name'];
        }

        if (!self::validateUsername($username)) {
            return ['success' => false, 'message' => 'Please enter a valid username'];
        }

        if (!self::validateEmail($email)) {
            return ['success' => false, 'message' => 'Please enter a valid email address'];
        }

        // Validate Password
        if (empty($password) OR empty($repassword)) { 
            return ['success' => false, 'message' => 'Please enter a valid password']; 
        }

        if ($password !== $repassword) { 
            return ['success' => false, 'message' => 'Your password does not match']; 
        }

        if (strlen($password) < 5) {
            return ['success' => false, 'message' => 'Your password is too short. minimun 5 characters']; 
        }

        // check if username already exists
        if (self::usernameAlreadyExist($username)) {
            return ['success' => false, 'message' => 'Username is already taken'];
        }

        // check if email already exists
        if (self::emailAlreadyExist($email)) {
            return ['success' => false, 'message' => 'Email address is already taken'];
        }

        if (!self::createNewUser($username, $name, $email, $password)) {
            return ['success' => false, 'message' => 'Woops! something went wrong, please try again.'];
        }

        $user = self::getUserByEmail($email);
        
        return ['success' => true, 'credentials' => $user];
    }

    public static function validateName($real_name){
        if (empty($real_name)) { return false; }

        // if (!preg_match('/^[a-zA-Z]{3,50}$/', $real_name)) { return false; }

        return true;
    }

    public static function validateUsername($username){
        if (empty($username)) { return false; }

        if (!preg_match('/^[a-zA-Z0-9]{3,50}$/', $username)) { return false; }

        return true;
    }

    public static function validateEmail($user_email) {
        if (empty($user_email)) { return false; }

        // validate the email with PHP's internal filter
        if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) { return false; }

        return true;
    }

    public static function createNewUser($username, $name, $email, $password) {
        $database = Database::getFactory()->connect();

        // write new users data into database
        $sql = "INSERT INTO users (username, password, name, email)
                    VALUES (:username, :password, :name, :email)";

        $query = $database->prepare($sql);
        $query->execute(array(':username' => $username, 
                              ':password' => $password,
                              ':name' => $name,
                              ':email' => $email));

        return $query->rowCount() === 1;
    }
}                