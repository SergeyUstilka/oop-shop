<?php
/**
 * Created by PhpStorm.
 * User: NoteBook
 * Date: 10.11.2018
 * Time: 20:06
 */

use app\controllers\BlogController;
use app\controllers\SiteController;
use app\core\App;
use app\core\BasicController;
use app\core\Db;
use app\core\Helper;
use app\core\Model;
use app\models\Categories;
use Dotenv\Dotenv;

session_start();
require 'vendor/autoload.php';
$dotenv = new Dotenv(__DIR__);
$dotenv->load();

//Helper::debug(App::user());
//unset($_SESSION['user']);
//Helper::debug(App::user());

App::run();


