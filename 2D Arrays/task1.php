<?php

$twoDimensionArray = [
		[48, 72, 13, 14, 15],
		[21, 22, 53, 24, 75],
		[31, 57, 33, 34, 35],
		[41, 95, 43, 44, 45],
		[59, 52, 53, 54, 55],
		[61, 69, 63, 64, 65]
];

$maxElement;
$minElement;

for($row = 0; $row < count ( $twoDimensionArray ); $row ++) {
	
	for($col = 0; $col < count ( $twoDimensionArray [$row] ); $col ++) {
		
		if (! isset ( $maxElement ) || $maxElement < $twoDimensionArray [$row] [$col]) {
			
			$maxElement = $twoDimensionArray [$row] [$col];
		}
		if (! isset ( $minElement ) || $minElement > $twoDimensionArray [$row] [$col]) {
			
			$minElement = $twoDimensionArray [$row] [$col];
		}
	}
}

echo 'Min element is: ', $minElement, '.' . PHP_EOL;
echo 'Max element is: ', $maxElement, '.';
