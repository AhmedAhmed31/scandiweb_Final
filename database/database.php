<?php

class database
{
    private static $connection;

    private function __construct(){}

    private static function connect()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "scandiweb";

        try {
            self::$connection = new PDO("mysql:host=".$servername.";dbname=".$dbname ,$username,$password);
            self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public static function getInstance(){
        if(self::$connection != null) return self::$connection;
        self::connect();
        return self::$connection;
    }
}