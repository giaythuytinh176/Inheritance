<?php

include_once "Triangle.php";

$tamgiac = new Triangle(11,22,15);

echo "Dien tich tam giac la:" . $tamgiac->getArea() . "<br>";
echo "Chu vi tam giac la:" . $tamgiac->getPerimeter() . "<br>";

print("<pre>" . print_r($tamgiac, true) . "</pre>");


