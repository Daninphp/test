<?php
namespace Db;

class Connection
{
    public $conn;
    private static $instance;

    const USERNAME = "root";
    const PASSWORD = "";
    const DB_NAME = "test";
    const HOST = "localhost";

    private function __construct()
    {
        $this->conn = new \PDO('mysql:host='. static::HOST .';dbname='. static::DB_NAME .'', static::USERNAME , static::PASSWORD);
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self;
        }
        return self::$instance;
    }

}