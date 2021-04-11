<?php

class TwoD
{
    public $x = 0;
    public $y = 0;
    public $xy = [];

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function setX(float $x)
    {
        $this->$x;
    }

    public function setY(float $y)
    {
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

    public function setXY(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getXY()
    {
        array_push($this->xy, $this->x, $this->y);
        return $this->xy;

    }

    public function toString()
    {
        return implode(",", $this->xy);

    }
}




