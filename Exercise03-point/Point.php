<?php

class Point
{
    public $x = 0;
    public $y = 0;
    public $XY = [];

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function setX(float $x)
    {
        $this->x = $x;
    }

    public function setY(float $y)
    {
        $this->y = $y;
    }

    public function setXY(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getXY()
    {
        array_push($this->XY, $this->x, $this->y);
        return $this->XY;
    }

    public function toString()
    {
        return implode(",", $this->XY);
    }
}


