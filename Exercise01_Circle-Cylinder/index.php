<?php
include_once "Cylinder.php";

use exercise\Circle;
use exercise\Cylinder;

$circle = new Circle(10, "black");
echo $circle->toString() . "<br>";

$cylinder = new Cylinder(5, "red", 10);
echo $cylinder->toString() . "<br>";
echo $cylinder->volume() . "<br>";

$cylinder->setRadius(15);
echo $cylinder->volume();

