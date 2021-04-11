<?php
include "Point.php";

class MovablePoint extends Point
{
    public $xSpeed = 0;
    public $ySpeed = 0;
    public $XYspeed = [];

    public function __construct(float $x, float $y, float $xSpeed, float $ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function getXspeed()
    {
        return $this->xSpeed;
    }

    public function getYspeed()
    {
        return $this->ySpeed;
    }

    public function setXspeed(float $xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }

    public function setYspeed(float $ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }

    public function setSpeed(float $xSpeed, float $ySpeed)
    {
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function getSpeed()
    {
        array_push($this->XYspeed, $this->xSpeed, $this->ySpeed);
        return $this->XYspeed;
    }

    public function toString()
    {
        return implode(",", $this->XY) . " Speed= " . implode(",", $this->XYspeed);
    }

    public function move()
    {
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;
        return "Point at positon X:{$this->x}, Y: {$this->y}";
    }
}
