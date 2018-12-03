<?php
/**
 * Created by PhpStorm.
 * User: NoteBook
 * Date: 22.11.2018
 * Time: 10:50
 */
return [

    //Фасад сайта
    '#^/blog/article/(?P<id>\d+)$#'=> 'BlogController@page',
    '#^/shop/product/(?P<id>\d+)$#'=> 'ShopController@product',
    '#^/cart/add$#'=>'CartController@add',
    '#^/blog/(?P<id>\d+)*$#'=> 'BlogController@index',
    '#^/shop/(?P<id>\d+)*$#'=>'ShopController@main',
    '#^/login$#'=> 'LoginController@login',

    ///Admin
    '#^/admin/category$#'=>'admin\\CategoryController@index',

    // Главная страница и 404
    '#^/$#' => 'SiteController@index',
    '#\w+#'=> 'SiteController@notFound'

];