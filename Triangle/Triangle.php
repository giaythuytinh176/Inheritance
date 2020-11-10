<?php

class Triangle
{
    public function __construct($side1, $side2, $side3)
    {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;

        if ($this->side1 + $this->side2 > $this->side3 && $this->side1 + $this->side3 > $this->side2 && $this->side3 + $this->side2 > $this->side1) {
            echo "Day la 1 tam giac.<br>";

        } else {
            echo "Day ko phai 1 tam giac.<br>";
            die();
        }
    }

    /**
     * @return mixed
     */
    public function getSide1()
    {
        return $this->side1;
    }

    /**
     * @return mixed
     */
    public function getSide2()
    {
        return $this->side2;
    }

    /**
     * @return mixed
     */
    public function getSide3()
    {
        return $this->side3;
    }

    /**
     * @param mixed $side1
     */
    public function setSide1($side1)
    {
        $this->side1 = $side1;
    }

    /**
     * @param mixed $side2
     */
    public function setSide2($side2)
    {
        $this->side2 = $side2;
    }

    /**
     * @param mixed $side3
     */
    public function setSide3($side3)
    {
        $this->side3 = $side3;
    }

    public function getArea()
    {
        $S = 1 / 4 * sqrt(($this->side1 + $this->side2 + $this->side3) * ($this->side1 + $this->side2 - $this->side3) * ($this->side1 + $this->side3 - $this->side2) * ($this->side2 + $this->side3 - $this->side1));
        return $S;
    }

    public function getPerimeter()
    {
        $p = 1 / 2 * ($this->side1 + $this->side2 + $this->side3);
        return $p;
    }

    public function toString()
    {
        return "a=$this->side1,b=$this->side2,c=$this->side3";
    }


}

