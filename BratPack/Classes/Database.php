<?php

class Database {
    private static $user = 'root';
    private static $password = 'root';

    private static $dsn = 'mysql:host=localhost;dbname=daycare' ;
    private static $dbcon;

    private function __construct()
    {

    }

    public static function getDb()
    {
        if (!isset(self::$dbcon)){
            try{
                self::$dbcon = new PDO(self::$dsn, self::$user, self::$password);
            } catch (PDOException $e) {
                $msg = $e->getMessage();
                include ("errorMessage.php");
                exit();
            }
        }
        return self::$dbcon;
    }

}