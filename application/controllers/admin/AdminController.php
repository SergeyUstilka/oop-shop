<?php
/**
 * Created by PhpStorm.
 * User: NoteBook
 * Date: 03.12.2018
 * Time: 14:54
 */

namespace app\controllers\admin;


use app\core\App;
use app\core\BasicController;
use app\core\Helper;
use app\models\User;

class AdminController extends BasicController
{
    public $layout = 'admin';

    public function __construct()
    {

        if(!User::isAdmin()){
            echo '11111111';
            die();
//            $this->redirect('/login');
        }
    }
}