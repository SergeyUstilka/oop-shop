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
use app\models\Photos;
use app\models\Product;
use app\models\ProductPhoto;

class ProductController extends AdminController
{
    public function index(){
        $products = Product::getPosts('1', '10');
        $categories = Categories::findAll();
        $this->render('admin\\product\\index',compact('products','categories'));
    }

    public function create(){
        $product = new Product();
        $categories = Categories::findAll();
        $brands = Brand::findAll();
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $product->uploadPhoto($_FILES['image']);
            $product->safe($_POST);
        }
        $this->render('admin\\product\\create', compact('categories','brands'));
    }

    public function edit($arr){
        $product = Product::findById($arr['id']);
        $categories = Categories::findAll();
        $brands = Brand::findAll();
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $product->uploadPhoto($_FILES['image']);
            $product->safe($_POST);
        }
        $this->render('admin\\product\\edit', compact('product','categories','brands'));
    }
    public function store($atr = []){
        if(strlen($_FILES['image']['name'])>0){

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

    public function photos($arr){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $files = $_FILES['image'];
            for($i=0; $i<count($files['name']); $i++){
                $upFile = new ProductPhoto();
                $upFile->uploadPhotos($files['name'][$i],$files['tmp_name'][$i], $arr['id']);
                $upFile->safe();
            }
        }
        $photos = ProductPhoto::findBy('product_id',$arr['id']);

        $this->render('admin\\product\\photos',compact('product','photos'));
    }
}