<?php

$firstSide = 5;
$secondSide = 8;
$thirdSide = 4;
define ( "DIVIDED_BY_TWO", 2 );

$halfPerimeterOfTriangle = ($firstSide + $secondSide + $thirdSide) / DIVIDED_BY_TWO;

$areaOfTriangle = sqrt ( $halfPerimeterOfTriangle * ($halfPerimeterOfTriangle - $firstSide) * ($halfPerimeterOfTriangle - $secondSide) * ($halfPerimeterOfTriangle - $thirdSide) );

echo "The sides of the triangle are: $firstSide, $secondSide è $thirdSide" . PHP_EOL . 
	 "Area of triangle is: $areaOfTriangle";
