<?php
/**
 * Created by PhpStorm.
 * User: NoteBook
 * Date: 22.11.2018
 * Time: 10:50
 */
return [
    '#^/blog/article/(?P<id>\d+)$#'=> 'BlogController@page',
    '#^/blog/(?P<id>\d+)*$#'=> 'BlogController@index',
    '#^/$#' => 'SiteController@index',
    '#\w+#'=> 'SiteController@notFound'

];