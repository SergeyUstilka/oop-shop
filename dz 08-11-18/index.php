
<?php

include 'Figure.php';
include "Circle.php";
include 'Triangle.php';

$kvadrat = new Figure('квадрат', 15);
$kvadrat->getSquare();

$krug = new Circle('круг', 10);
$krug->getSquare();

$treugolnik = new  Triangle('треугольник',10, 15,30);
$treugolnik->getSquare();
$treugolnik->setNoteToResultTxt();



