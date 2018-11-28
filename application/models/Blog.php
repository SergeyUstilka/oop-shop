<?php
/**
 * Created by PhpStorm.
 * User: NoteBook
 * Date: 25.11.2018
 * Time: 14:23
 */

namespace app\models;


use app\core\Model;

class Blog extends Model
{
    protected static $tablename;
    protected static $fields = ['id','name','content','img','autor'];

    public function getShortText(){
        return substr($this->content,0,50);
    }
}