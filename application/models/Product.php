<?php
/**
 * Created by PhpStorm.
 * User: NoteBook
 * Date: 28.11.2018
 * Time: 15:07
 */

namespace app\models;


use app\core\Model;

class Product extends Model
{
    protected static $tablename;
    protected static $fields = ['id','name','price','description','category_id','brand_id','img'];
}