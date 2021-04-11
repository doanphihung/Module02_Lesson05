<?php
include_once "Shape.php";

class Rectangle extends Shape
{
    public $width;
    public $height;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function area()
    {
        return $this->height * $this->width;
    }

    public function perimeter()
    {
        return 2 * ($this->width + $this->height);
    }
}
