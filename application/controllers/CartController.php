<?php
/**
 * Created by PhpStorm.
 * User: NoteBook
 * Date: 30.11.2018
 * Time: 20:14
 */

namespace app\controllers;


use app\core\BasicController;
use app\core\Helper;
use app\models\Cart;

class CartController extends BasicController
{
    public static function add(){
        if($_POST){

            Cart::set($_POST['id'],$_POST['count']);
        }else{
            echo 'erro 404';
        }
    }

    public static function  set(){}

}