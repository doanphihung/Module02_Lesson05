<?php

class Shape
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

     protected function show()
    {
        return "I am a shapeMy name is {$this->name}";
    }
}
