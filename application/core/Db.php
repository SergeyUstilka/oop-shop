<?php
/**
 * Created by PhpStorm.
 * User: NoteBook
 * Date: 22.11.2018
 * Time: 20:19
 */

namespace app\core;


use PDO;

class Db
{
    private  static $connection;
    public static function  getConnection(){
        if(self::$connection){
            echo 'есть соединение';
            Helper::debug(self::$connection);
        }
        else{
        echo 'нет соединения';
        try{
                $connection = new PDO("mysql:host=localhost; dbname=shop;",'root','',
                    [PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING]);
                self::$connection = $connection;
            }catch (PDOException $exception){
                echo $exception -> getMessage();
            }
            Helper::debug($connection);
        }
    }
}