<?php
require "MovablePoint.php";

$movablePoint = new MovablePoint(1, 2, 3, 3);
$movablePoint->getXY();

$movablePoint->getSpeed();
echo $movablePoint->toString();
echo "<br>" . $movablePoint->move();