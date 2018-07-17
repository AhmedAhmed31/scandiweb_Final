<?php

class database
{
    public $link;
    public $error;

    private static $connection;

public  function __construct($db)
{
    $this->db=$db;
}

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

   /*
   */
    public function getProducts($query)
    {
        $query = $this->db->query($query);
        $query->execute();
        return $query->fetchAll();
    }
    public function getProducttype($query)
    {
        $query = $this->db->query($query);
        $query->execute();
        return $query->fetchAll();
    }
    public function InsertNewProduct($query){


    $this->db->query($query);

    }
    }
