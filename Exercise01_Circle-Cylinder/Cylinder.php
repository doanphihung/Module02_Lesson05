<?php
namespace exercise;

include_once "Circle.php";
use exercise\Circle;

class Cylinder extends Circle {
    public $height;

    public function __construct($radius, $color, $height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }
    public function volume()
    {
       return parent::area() * $this->height;
    }

    public function toString() {
        return "Cylinder ( Radius: {$this->radius}, Color: {$this->color}, Height: {$this->height})";
    }
}

