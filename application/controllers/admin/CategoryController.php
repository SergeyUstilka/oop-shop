<?php
/**
 * Created by PhpStorm.
 * User: NoteBook
 * Date: 03.12.2018
 * Time: 15:02
 */

namespace app\controllers\admin;


use app\models\Categories;

class CategoryController extends AdminController
{
    public function index(){
        $categories = Categories::findAll();
        $this->render('admin\\category', compact('categories'));
    }
}