<?php

include_once('Circle.php');

class Cylinder extends Circle
{
    public function __construct($name, $radius, $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }

    public function calculateArea()
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }               // 2pi R^2 + 2pi R h

    public function calculateVolume()
    {
        return parent::calculateArea() * $this->height;
    }               // pi R^2 h
}