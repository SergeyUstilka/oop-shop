<?php
/**
 * Created by PhpStorm.
 * User: NoteBook
 * Date: 27.11.2018
 * Time: 20:28
 */

namespace app\controllers;


use app\core\BasicController;
use app\core\Helper;
use app\models\Product;

class ShopController extends BasicController
{
    public function main(){
        $products = Product::findAll();
        $this->render('shop\\main',compact('products'));

    }

    public function product(){}
}