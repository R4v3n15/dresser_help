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
}                