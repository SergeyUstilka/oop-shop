<?php
/**
 * Created by PhpStorm.
 * User: NoteBook
 * Date: 03.12.2018
 * Time: 15:44
 */

namespace app\controllers;


use app\core\BasicController;

class LoginController extends BasicController
{
    public function login(){
        $this->render('site\\login');
    }
}