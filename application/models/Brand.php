<?php
/**
 * Created by PhpStorm.
 * User: NoteBook
 * Date: 04.12.2018
 * Time: 18:58
 */

namespace app\models;


use app\core\Model;

class Brand extends Model
{
    protected static $tablename;
    protected static $fields = ['id','name','logo'];
}