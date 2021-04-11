<?php
include_once "3D.php";

$obj_twoD = new TwoD(2.5, 4);
$obj_twoD->getXY();
echo $obj_twoD->toString() . "<br>";

$obj_threeD = new ThreeD(3, 4, 5.5);
$obj_threeD->getXYZ();
echo $obj_threeD->toString();