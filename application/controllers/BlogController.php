<?php
/**
 * Created by PhpStorm.
 * User: NoteBook
 * Date: 10.11.2018
 * Time: 22:17
 */

namespace app\controllers;


use app\core\BasicController;
use app\core\Helper;
use app\core\Model;
use app\models\Blog;

class BlogController extends BasicController
{
    public function index($data = []){
        if(!$data['id']){
            $data['id'] =1;
        }
        $pages = Blog::getPosts($data['id'],4);
        $this->render('blog\\main', compact('pages'));
    }
    public function page($data = []){
        $blogPage = Blog::findById($data['id']);
        $this->render('blog\\page', compact('blogPage'));
    }
}