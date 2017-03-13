<?php

$firstSide = 5;
$secondSide = 9;
define ( "MULTIPLE_BY_TWO", 2 );

$perimeterOfRectangle = MULTIPLE_BY_TWO * ($firstSide + $secondSide);

echo "The sides of the rectangle are: $firstSide и $secondSide" . PHP_EOL . " Oбиколката на правоъгълникът е: $perimeterOfRectangle";
