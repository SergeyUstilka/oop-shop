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

    public function __construct($arr = [])
    {
        if ($arr) {
            $this->load($arr);
        }
    }

    public static function findById($id = '1')
    {
        static::getTableName();
        $pdo = Db::getConnection();
        $sql = "SELECT * from `" . static::$tablename . "` WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
        $data = $stmt->fetch();
        return new static($data);
    }

    public static function findBy($param, $value){
        static::getTableName();
        $pdo = Db::getConnection();
        $sql = "SELECT * from `" . static::$tablename . "` WHERE ".$param." = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$value]);
        $data = $stmt->fetchAll();
        $res = [];
        foreach ($data as $exempliar){
            $res[] = new static($exempliar);
         }
         return $res;
    }

    public static function findAll()
    {
        $pdo = Db::getConnection();
        static::getTableName();
        $query = "SELECT * FROM `" . static::getTablename() . "`";
        $smth = $pdo->prepare($query);
        $smth->execute();
        return $smth->fetchAll();
    }

    public static function getPosts($pageNumber = 1, $postOnPage = 3, $atr = null, $resultAttr = '*')
    {
        $pdo = Db::getConnection();
        static::$postOnPage = $postOnPage;
        $beginPostNumber = ($pageNumber - 1) * $postOnPage;
        $sql = "SELECT " . $resultAttr . "  FROM " . static::getTableName();
        if ($atr) {
            $sql .= ' WHERE ';
            foreach ($atr as $key => $value) {
                $sql .= $key . $value . ' AND ';
            }
            Helper::debug($sql);
            $sql = substr($sql, 0, -5);
        }
        $sql .= " ORDER BY id DESC LIMIT " . $beginPostNumber . ", " . $postOnPage . ' ';
        Helper::debug($sql);
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public static function getPagination()
    {
        $countPages = ceil(count(static::findAll()) / static::$postOnPage);
        return $countPages;
    }


    public static function getTableName()
    {
        if (!static::$tablename) {
            static::$tablename = strtolower(array_pop(explode('\\', static::class)));
        }
        return static::$tablename;
    }

    protected function load($arr = [])
    {
        if ($arr) {
            foreach ($arr as $key => $value) {
                $this->$key = $value;
            }
        }
    }

    public function uploadPhoto($image, $folder = 'product'){
        $filename = md5($image['name'].''.microtime()).'.'.explode('.',$image['name'])[1];
        $this->img = $filename;
        move_uploaded_file($image['tmp_name'], __DIR__.'/../../public/'.$folder.'/'.$filename);
    }

    public function safe($arr = [])
    {
        $pdo = Db::getConnection();
        if($arr){
            $this->load($arr);
        }
        $sql = '';
        foreach ( static::$fields  as $value){
            if($value!= 'id'){
                $params[':'.$value]= $this->$value ;

            }
        }
        if($this->id){
            $sql = "UPDATE ".static ::getTablename()." SET ";
            foreach ($params as $key=>$value){
                if($key!=':id'){
                    $sql.=substr($key, '1')."=$key, ";
                }
            }
            $sql = substr($sql, 0 ,-2);
            $sql .= ' WHERE id=:id';
        }else{
            $sql= "INSERT INTO ".static::getTablename()."(".implode(',',static::$fields).") 
            VALUES(".implode(',',array_keys($params)).")";
            Helper::debug($sql);
        }
        $stmt= $pdo->prepare($sql);
        $stmt->execute($params);
    }

    public function delete()
    {
        $pdo = Db::getConnection();
        $sql = "DELETE FROM " . static::getTableName() . " WHERE id =" . $this->id;
        Helper::debug($sql);
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        foreach (static::$fields as $atrrib){
            $this->$atrrib = null;
        }
    }

}