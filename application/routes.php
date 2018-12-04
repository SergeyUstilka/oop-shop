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

    ///Admin -- Category
    '#^/admin/category$#'=>'admin\\CategoryController@index',
    '#^/admin/category/edit/(?P<id>\d+)$#'=>'admin\\CategoryController@edit',
    '#^/admin/category/create$#'=>'admin\\CategoryController@create',
    '#^/admin/category/store/(?P<id>\d+)*$#'=>'admin\\CategoryController@store',
    '#^/admin/category/store$#'=>'admin\\CategoryController@store',

    ///Admin -- Product
    '#^/admin/product$#'=>'admin\\ProductController@index',
    '#^/admin/product/edit/(?P<id>\d+)$#'=>'admin\\ProductController@edit',
    '#^/admin/product/create$#'=>'admin\\ProductController@create',
    '#^/admin/product/store/(?P<id>\d+)*$#'=>'admin\\ProductController@store',
    '#^/admin/product/store$#'=>'admin\\ProductController@store',


    // Главная страница и 404
    '#^/$#' => 'SiteController@index',
    '#\w+#'=> 'SiteController@notFound'

];