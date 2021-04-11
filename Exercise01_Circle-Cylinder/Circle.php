<?php

namespace exercise;

class Circle {
    public $radius;
    public $color;

    public function __construct($radius, $color)
    {
     $this->radius = $radius;
     $this->color = $color;
    }
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }
    public function getRadius()
    {
        return $this->radius;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function area()
    {
        return pi() * pow($this->radius, 2);
    }
    public function toString() {
        return "Circle ( Radius: {$this->radius}, Color: {$this->color})";
    }
}
