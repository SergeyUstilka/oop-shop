<?php
/**
 * Created by PhpStorm.
 * User: NoteBook
 * Date: 10.11.2018
 * Time: 21:59
 */

namespace app\controllers;


use app\core\BasicController;

class SiteController extends BasicController
{
    public function __construct()
    {
    }
    public  function index(){
        $this->render('site/main');
    }
    public function about(){
        $this->render('site/about');
    }
    public function notFound(){
        $this->render('layout\\erro404');
    }

}