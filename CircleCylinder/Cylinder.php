<?php


class Cylinder extends Circle
{
    public function __construct($radius, $color, $height)
    {
        parent::__construct($radius, $color);
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

    public function toString()
    {
        return parent::toString() . ",height=$this->height";
    }
}