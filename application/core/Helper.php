<?php
/**
 * Created by PhpStorm.
 * User: NoteBook
 * Date: 10.11.2018
 * Time: 22:03
 */

namespace app\core;


class Helper
{
    public static function debug($arr){
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
    }
}