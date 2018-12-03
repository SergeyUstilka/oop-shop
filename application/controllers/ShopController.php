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
    public function main($data=[]){
        if(!$data['id']){
            $data['id'] =1;
        }

        $products = Product::getPosts($data['id'],3);
        $this->render('shop\\main', compact('products'));

    }

    public function product($data=[]){
        $product = Product::findById($data['id']);
        if(!$product->id){
            $this->erro404();
        }
        $this->render('shop\\product',compact('product'));
    }
}