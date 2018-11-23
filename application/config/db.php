<?php
/**
 * Created by PhpStorm.
 * User: NoteBook
 * Date: 15.11.2018
 * Time: 16:33
 */




$host = getenv('SERVER');
$db   = getenv('DATABASE');
$user = getenv('USER');
$pass = getenv('PASSWORD');
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $opt);

