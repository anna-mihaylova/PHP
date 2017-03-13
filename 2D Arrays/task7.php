<?php

$twoDimensionArray = [
		[11, 12, 13, 14, 15, 16],
		[21, 22, 23, 24, 25, 26],
		[31, 32, 33, 34, 35, 36],
		[41, 42, 43, 44, 45, 46],
		[51, 52, 53, 54, 55, 56],
		[61, 62, 63, 64, 65, 66],
];
$r = 6;
$c = 6;
$sum = 0;
$sumAll = 0;
$x;
$y;

for($col = 0; $col < $r * $c; $col ++) {
	
	$x = floor ( $col / $r );
	$y = $col % $r;
	if (floor ( ($x + $y) % 2 == 0 )) {
		
		echo $twoDimensionArray [$x] [$y], ' ';
		$sum += $twoDimensionArray [$x] [$y];
		$sumAll += $twoDimensionArray [$x] [$y];
	}
	if ($y == $c - 1) {
		
		echo 'The sum of the numbers in the row is: ', $sum, PHP_EOL;
		$sum = 0;
	}
}
echo 'The sum of the numbers in the array is: ', $sumAll . PHP_EOL;