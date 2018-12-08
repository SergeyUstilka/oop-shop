<?php
/**
 * Created by PhpStorm.
 * User: NoteBook
 * Date: 03.12.2018
 * Time: 15:44
 */

namespace app\controllers;


use app\core\BasicController;
use app\core\Helper;
use app\models\User;

class LoginController extends BasicController
{
    public function login(){

        $this->render('login\\login');
    }

    public function postlogin(){
        Helper::debug($_POST);
        $user = User::findBy('email',$_POST['email']);
        if($user){
            $user = $user[0];
            if($user->validatePassword($_POST['password'])){
                echo 'validated';
                $_SESSION['user'] = $user;
            }else{
                echo 'no-validated';
            }
        }

        Helper::debug($user);

        die();
    }

    public function registration(){
        $user = new User($_POST);
        Helper::debug($_POST['email']);
        if(count(User::findBy('email',$_POST['email'])) == 0){
            $user->setPassword($_POST['password']);
            $user->safe();
            echo 'пользователь успешно зарегистрирован';
        }else{
            echo 'уже есть такая запись';
        }
    }

    public function logout(){
        $_SESSION['user'] = null;
        $this->redirect('/login');
    }
}