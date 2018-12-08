<?php
/**
 * Created by PhpStorm.
 * User: NoteBook
 * Date: 07.12.2018
 * Time: 18:22
 */

namespace app\models;


use app\core\Helper;
use app\core\Model;

class ProductPhoto extends Model
{
    protected static $tablename= 'images';
    protected static $fields = ['id','image_name','product_id'];

    public function uploadPhotos($imageName, $imageTmp, $prod_id, $folder = 'product'){
        $filename = md5(microtime()).'.'.explode('.',$imageName)[1];
        move_uploaded_file($imageTmp, __DIR__.'/../../public/'.$folder.'/'.$filename);
        $this->image_name = $filename;
        $this->product_id = $prod_id;
    }

    public function getProduct($id){
        return $product = Product::findBy($this->product_id);
    }
}