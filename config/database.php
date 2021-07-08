<?php 
    class Database {

      private $host = "localhost";
      private $db   = "phpmyadmin";
      private $user = "root";
      private $pass = "";
      private $port = "3310";
      private $charset = "utf8mb4";

    private $options = [
        \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        \PDO::ATTR_EMULATE_PREPARES   => false,
    ];

        public $conn;

        public function getConnection(){

        $this->con = null;

            $dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset;port=$this->port";
                try {
                    $this->con = new \PDO($dsn, $this->user, $this->pass, $this->options);
                } catch (\PDOException $e) {
                    throw new \PDOException($e->getMessage(), (int)$e->getCode());
                }
            return $this->con;
        }
    }  

?>