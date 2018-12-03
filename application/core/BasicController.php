<?php
/**
 * Created by PhpStorm.
 * User: NoteBook
 * Date: 10.11.2018
 * Time: 19:58
 */

namespace app\core;


class    BasicController
{
    public $layout = 'default';
    public  function  __construct()
    {
    }
    public function erro404(){
        header("HTTP/1.0 404 Not Found");
        $this->render('layout\\erro404');
    }
    public function render($view, $data = null){
        if($data){
              foreach ($data as $key => $value) {

                $$key = $value;
            }
        }
        $view=__DIR__.'/../views/'.$view.'.php';
        include __DIR__."/../views/layout/".$this->layout.'.php';
    }

    public function redirect($url){
//        header("HTTP/1.1 301 Moved Permanently");
//        header("Location: $url");
    }

}