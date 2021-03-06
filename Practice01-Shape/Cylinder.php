<?php
include_once __DIR__ . "/Circle.php";

class Cylinder extends Circle
{
    public $height;

    public function __construct($name, $radius, $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }

    public function area()
    {
        return parent::area() * 2 + parent::perimeter() * $this->height;
    }
    public function volume()
    {
        return parent::area() * $this->height;
    }
}
