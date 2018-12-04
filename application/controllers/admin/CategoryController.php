<?php
/**
 * Created by PhpStorm.
 * User: NoteBook
 * Date: 03.12.2018
 * Time: 15:02
 */

namespace app\controllers\admin;


use app\core\Helper;
use app\core\Model;
use app\models\Categories;

class CategoryController extends AdminController
{
    public function index(){
        $categories = Categories::findAll();
        $this->render('admin\\category\\index', compact('categories'));
    }

    public function edit($atr){
        $category = Categories::findById($atr['id']);
        if(!$category) $this->erro404();
        $this->render('admin\\category\\edit',compact('category'));
    }

    public function store($atr=[]){
        if(isset($atr['id'])){
            $category= Categories::findById($atr['id']);
        }else {
            $category = new Categories();
        }
       if($_POST){
           $category->safe($_POST);
       }else{
           $category->delete();
       }
        // $category->load()
    }
    public function create(){
        $this->render('admin\\category\create');
    }
}