<?php
include_once "Circle.php";
include_once "Rectangle.php";
include_once "Square.php";

$circle = new Circle("hinhtron",50);
$rectangle = new Rectangle(50,30);
$square = new Square(60,60);

echo $circle->resizeShape(2);
echo $rectangle->resizeShape(2);
echo $square->resizeShape(3);