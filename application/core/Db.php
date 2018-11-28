<?php
/**
 * Created by PhpStorm.
 * User: NoteBook
 * Date: 22.11.2018
 * Time: 20:19
 */



namespace app\core;
use PDO;
use PDOException;
class Db
{
    private static $connection;
    public static function getConnection(){
        if(!self::$connection){
            try{
                $connection = new PDO('mysql:host=localhost;dbname=shop;','root', '', [
                    PDO::ATTR_ERRMODE=> PDO::ERRMODE_WARNING,
                    PDO::ATTR_DEFAULT_FETCH_MODE=> PDO::FETCH_ASSOC
                ]);
                self::$connection = $connection;
            }catch (PDOException $exception){
                echo $exception->getMessage();
            }
        }
        return self::$connection;
    }
}