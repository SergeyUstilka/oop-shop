<?php
/**
 * Created by PhpStorm.
 * User: NoteBook
 * Date: 10.11.2018
 * Time: 22:17
 */

namespace app\controllers;


use app\core\BasicController;

class BlogController extends BasicController
{
    public function index(){
        echo 'blog';
        $this->render('blog/main');
    }
    public function page(){
        echo 'page';
    }
}