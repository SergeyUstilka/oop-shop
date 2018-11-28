<?php
/**
 * Created by PhpStorm.
 * User: NoteBook
 * Date: 10.11.2018
 * Time: 20:00
 */

namespace app\core;


class Model
{
    protected static $tablename;
    protected static $fields = [];
    protected static $postOnPage;

    public function __construct($arr=[])
    {
        if($arr){
            $this->load($arr);
        }
    }

    public static function findById($id='1'){
        static::getTableName();
       $pdo = Db::getConnection();
       $sql = "SELECT * from `".static::$tablename."` WHERE id = ?";
       $stmt = $pdo->prepare($sql);
       $stmt->execute([$id]);
       $data = $stmt->fetch();
       if(!$data){
           return ['erro404'=> 'Данная статья отсутствует'];
           return $data;
       }else{
           return new static($data);
       }

    }
    public  static function findAll(){
        $pdo = Db::getConnection();
        static::getTableName();
        $query = "SELECT * FROM `" . static::getTablename() . "`";
        $smth = $pdo->prepare($query);
        $smth->execute();
        return $smth->fetchAll();
    }

    public static function getPosts($pageNumber=1,$postOnPage = 3,$resultAttr = '*'){
        $pdo = Db::getConnection();
        static::$postOnPage = $postOnPage;
        $beginPostNumber = ($pageNumber - 1)*$postOnPage;
        $sql = "SELECT ".$resultAttr."  FROM ".static::getTableName()." ORDER BY id DESC LIMIT ".$beginPostNumber.", ".$postOnPage.' ';
        Helper::debug($sql);
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public static function getPagination(){
        $countPages = ceil(count(static::findAll())/static::$postOnPage);
        return $countPages;
    }

    public static function selectByParams($attr){
        $pdo = Db::getConnection();
        $sql = "SELECT * FROM ".static::getTableName().' WHERE ';
        foreach ($attr as $key => $value) {
            $sql.=' '.$key.' = "'.$value.'" AND ';
        }
        $sql = substr($sql,0,-5);
        Helper::debug($sql);
        $stmt = $pdo->prepare($sql);
        $stmt->execute([]);
        $data = $stmt->fetchAll();
        return $data;
    }

    public static function getTableName(){
        if(!static::$tablename){
            static::$tablename = strtolower(array_pop(explode('\\', static::class)));
        }
        return static::$tablename;
    }
    protected function load($arr = []){
        if($arr){
            foreach ($arr as $key => $value){
                $this->$key = $value;
            }
        }
    }

    public function safe(){
        $pdo = Db::getConnection();
        $sql='';
        foreach ( static::$fields  as $value){
            $params[':'.$value]= $this->$value ;
        }
        if($this ->id){
            $sql = "UPDATE ".static::getTableName()." SET ";
            foreach ($params as $key=>$value){
                if($key !='id'){
                    $sql.= substr($key,1)."= $key, ";
                }
            }

            $sql = substr($sql,0, -2);
            $sql .= " WHERE id = ".$params[':id'];
            Helper::debug($sql);

        }else{
            $sql= "INSERT INTO ".static::getTablename()."(".implode(',',static::$fields).") 
            VALUES(".implode(',',array_keys($params)).")";
        }
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
    }

    public function delete(){
        $pdo = Db::getConnection();
        $sql = "DELETE FROM ".static::getTableName()." WHERE id =".$this->id;
        Helper::debug($sql);
        $stmt=$pdo->prepare($sql);
        $stmt->execute();
    }
}