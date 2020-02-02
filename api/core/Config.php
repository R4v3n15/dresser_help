<?php

class Config
{
    public static $config;
    public static $params;

    public static function get($key){
        if (!self::$config) {

            $config_file = '../api/config/config.php';

            if (!file_exists($config_file)) {
                return false;
            }

            self::$config = require $config_file;
        }

        return self::$config[$key];
    }
}
