<?php

class DB {
    private $host = 'localhost';
    private $db = 'space_ship';
    private $user = 'root';
    private $pass = 'Carlphp2019';
    private $charset = 'utf8';
    public $pdo;

    public function __construct(){
        $dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";

        try {   
            $this->pdo = new PDO($dsn, $this->user, $this->pass);
       } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(),(int)$e->getCode());
       }
    }
}

?>