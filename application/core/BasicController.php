<?php
/**
 * Created by PhpStorm.
 * User: NoteBook
 * Date: 10.11.2018
 * Time: 19:58
 */

namespace app\core;


class BasicController
{
    public $layout = 'default';
    public  function  __construct()
    {
    }
    public function erro404(){
        header("HTTP/1.0 404 Not Found");
        echo '404';
    }
    public function render($view, $data = null){
        $view=__DIR__.'/../views/'.$view.'.php';
        echo "<h1>$view</h1>";
        include __DIR__."/../views/layout/".$this->layout.'.php';
    }

}