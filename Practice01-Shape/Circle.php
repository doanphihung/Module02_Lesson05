<?php
include_once "Shape.php";

class Circle extends Shape
{
    public $radius;

    public function __construct($name, $radius)
    {
        Shape::__construct($name);
        $this->radius = $radius;
    }

    public function area()
    {
        return pi() * pow($this->radius, 2);
    }

    public function perimeter()
    {
        return 2 * pi() * $this->radius;
    }

}
