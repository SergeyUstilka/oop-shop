<?php
/**
 * Created by PhpStorm.
 * User: NoteBook
 * Date: 08.12.2018
 * Time: 17:56
 */

namespace app\models;


use app\core\App;
use app\core\Model;

class User extends Model
{
    protected static $tablename = 'user';
    protected static $fields = ['name', 'login', 'password', 'type','email'];

    public static function isAdmin(){
        if(App::user()){
            return 1;
        }
    }

    public function setPassword($password){
        $this->password = md5($password);
    }

    public function validatePassword($password){
        return $this->password === md5($password);
    }
}