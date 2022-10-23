<?php

class db
{
    public static $servername = "localhost";
    public static $username = "root";
    public static $password = "";
    public static $dbname = "project1";


    public function __construct()
    {
        /**
         * connect o database
         */
        try {
            $conn = new PDO("mysql:host=" . self::$servername . " ;dbname=" . self::$dbname, self::$username, self::$password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }


}

