<?php
/**
 * Created by PhpStorm.
 * User: NoteBook
 * Date: 29.11.2018
 * Time: 10:56
 */

namespace app\models;


use app\core\Helper;

class Cart
{
    public static function set($id, $countNumber= NULL){
        $cart = static::get();
        if(!$countNumber){
            $countNumber = 1;
        }
        if($cart[$id]){
            echo 'Был уже товар';
            $cart[$id]+=$countNumber;
        }else{
            echo 'Не  было еще товара';
            $cart[$id] = $countNumber;
        }
        $_SESSION['cart'] = $cart;
    }


    public static function get($id=null){
        if($id){
            return $_SESSION['cart']['id'];
        }
        return $_SESSION['cart'];
    }

    public static function deleteProduct($id){
        if($id){
            $cart = static::get();
            Helper::debug($cart);
            unset($cart[$id]);
        }
    }

}