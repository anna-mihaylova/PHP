<?php

$radiusOfCircle = 2;
define("SQUARE_ROOT", 2);
define('PI', 3.14285714286);

$areaOfCircle = PI * ($radiusOfCircle ** SQUARE_ROOT);


echo "Radius of circle is : $radiusOfCircle " . PHP_EOL . 
     "Area of circle is: $areaOfCircle";
