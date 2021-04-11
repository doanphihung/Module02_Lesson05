<?php
//include_once "Rectangle.php";
include_once "Cylinder.php";
include_once "Square.php";
//include_once "Circle.php";

$circle1 = new Circle("circle1", 5);
echo $circle1->area() . "<br>";

$rectangle = new Rectangle("Rectangle01", 10, 10);
echo $rectangle->perimeter() . "<br>";

$square = new Square("square", 15);
echo $square->area() . "<br>";

$cylinder = new Cylinder("tru 1", 30, 15);
echo $cylinder->volume();
