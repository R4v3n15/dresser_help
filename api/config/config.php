<?php
/** Configuration for: Error reporting */
error_reporting(E_ALL);
ini_set("display_errors", 1);

/** Configuration for cookie security */
ini_set('session.cookie_httponly', 1);

/** Returns the full configuration. */
return array(
    /** Configuration for: Base URL */
    'URL' => 'http://' . $_SERVER['HTTP_HOST'] . str_replace('api', '', dirname($_SERVER['SCRIPT_NAME'])),

    /** Configuration for: Folders */
    'PATH_CONTROLLER' => realpath(dirname(__FILE__).'/../../') . '/api/controller/',


    /** Configuration for: Default controller and action */
    'DEFAULT_CONTROLLER' => 'login',
    'DEFAULT_ACTION'     => 'index',

	
    'DB_TYPE' => 'mysql',
    'DB_HOST' => 'localhost',
    'DB_NAME' => 'control',
    'DB_NAMEX' => 'cescolar',
    'DB_USER' => 'root',
    'DB_PASS' => 'admin',
    'DB_PORT' => '3306',
    'DB_CHARSET' => 'utf8',

    

    /** Configuration for: Cookies */
    'COOKIE_RUNTIME'  => 1209600,
    'COOKIE_PATH'     => '/',
    'COOKIE_DOMAIN'   => "",
    'COOKIE_SECURE'   => false,
    'COOKIE_HTTP'     => true,
    'SESSION_RUNTIME' => 604800,

    /** Configuration for: Encryption Keys */
    'ENCRYPTION_KEY' => '6#xgÊìf^25cL1f$08&$#%#',
    'HMAC_SALT'      => '8qk9c4L6d#15tM8z7n0%#54&',

    /** Configuration for: Email server credentials */
    'EMAIL_USED_MAILER'     => 'phpmailer',
    'EMAIL_USE_SMTP'        => false,
    'EMAIL_SMTP_HOST'       => 'yourhost',
    'EMAIL_SMTP_AUTH'       => true,
    'EMAIL_SMTP_USERNAME'   => 'yourusername',
    'EMAIL_SMTP_PASSWORD'   => 'yourpassword',
    'EMAIL_SMTP_PORT'       => 465,
    'EMAIL_SMTP_ENCRYPTION' => 'ssl',
);
