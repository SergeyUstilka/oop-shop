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
use Dotenv\Dotenv;

require 'vendor/autoload.php';
$dotenv = new Dotenv(__DIR__);
$dotenv->load();
include 'application/config/db.php';

//$route = $_SERVER['REQUEST_URI'];
//switch ($route){
//    case '/':
//        $controller = new SiteController();
//        $controller->index();
//        break;
//    case '/about':
//        $controller = new SiteController();
//        $controller->about();
//        break;
//    case '/blog':
//        $controller = new BlogController();
//        $controller->index();
//        break;
//    case '/page':
//        $controller = new BlogController();
//        $controller->page();
//        break;
//
//    default:
//        $controller = new SiteController();
//        $controller ->erro404();
//}
\app\core\Db::getConnection();

echo '<br>';
App::run();


