<?php
    class Database {
        // Varibles to connect DB
        private static $factory;
        private $database;
        private $dbtype;
        private $host;
        private $user;
        private $password;
        private $dbname;
        private $port;
        private $charset;

        public function __construct() {
            // Initialize credentials
            $this->dbtype   = 'mysql';
            $this->host     = 'localhost';
            $this->dbname   = 'smartdre_ionic';
            $this->user     = 'root';
            $this->password = 'admin';
            $this->port     = '3306';
            $this->charset  = 'utf8mb4';
        }

        public static function getFactory() {
            if (!self::$factory) {
                self::$factory = new Database();
            }
            return self::$factory;
        }

        public function connect() {
            if (!$this->database) {
                try {
                    $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
                    $this->database = new PDO($this->dbtype . ':host=' . $this->host . ';dbname=' .$this->dbname . ';port=' . $this->port . ';charset=' . $this->charset,$this->user, $this->password, $options
                    );
                } catch (PDOException $e) {
                    echo 'Database connection can not be estabilished. Please try again later.' . '<br>';
                    echo 'Error code: ' . $e->getCode();
                    exit;
                }
            }
            return $this->database;
        }
    }
?>