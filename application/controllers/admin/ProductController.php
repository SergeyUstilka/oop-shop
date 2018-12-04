<?php
/**
 * Created by PhpStorm.
 * User: NoteBook
 * Date: 03.12.2018
 * Time: 16:11
 */

namespace app\controllers\admin;


use app\core\Helper;
use app\models\Brand;
use app\models\Categories;
use app\models\Product;

class ProductController extends AdminController
{
    public function index(){
        $products = Product::getPosts('1', '10');
        $categories = Categories::findAll();
        $this->render('admin\\product\\index',compact('products','categories'));
    }

    public function create(){
        $categories = Categories::findAll();
        $brands = Brand::findAll();
        $this->render('admin\\product\\create', compact('categories','brands'));
    }

    public function edit($arr){
        $product = Product::findById($arr['id']);
        $categories = Categories::findAll();
        $brands = Brand::findAll();
        $this->render('admin\\product\\edit', compact('product','categories','brands'));
    }
    public function store($atr = []){
        \app\core\Helper::debug($_POST);
        \app\core\Helper::debug($_FILES);
        if(strlen($_FILES['image']['name'])>0){
            move_uploaded_file($_FILES['image']['tmp_name'], __DIR__.'/../../../upload/product/'.$_FILES['image']['name']);
        }
        if(isset($atr['id'])){
            $product= Product::findById($atr['id']);
        }else {
            $product = new Product();
        }
        if($_POST){
            $product->safe($_POST,$_FILES['image']);
        }else{
            $product->delete();
        }
    }
}