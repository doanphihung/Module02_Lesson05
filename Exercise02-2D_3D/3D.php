<?php
include_once "2D.php";

class ThreeD extends TwoD
{
    public $z = 0;

    public function __construct(float $x, float $y, float $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }

    public function getZ()
    {
        return $this->z;
    }

    public function setZ($z)
    {
        $this->z = $z;
    }

    public function setXYZ(float $x, float $y, float $z)
    {
        parent::setXY($x, $y);
        $this->z = $z;
    }

    public function getXYZ()
    {
        array_push($this->xy, $this->x, $this->y, $this->z);
        return $this->xy;
    }
}
