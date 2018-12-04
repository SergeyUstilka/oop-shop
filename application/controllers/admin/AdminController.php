<?php
/**
 * Created by PhpStorm.
 * User: NoteBook
 * Date: 03.12.2018
 * Time: 14:54
 */

namespace app\controllers\admin;


use app\core\BasicController;
use app\core\Helper;

class AdminController extends BasicController
{
    public $layout = 'admin';

    public function __construct()
    {
        $_SESSION['is_admin']=1;
        if(!$_SESSION['is_admin']){
            $this->redirect('/login');
        }
    }
}