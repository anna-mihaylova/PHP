<?php

$twoDimensionArray = [
		[11, 12, 13, 14, 15, 16],
		[21, 22, 23, 24, 25, 26],
		[31, 32, 33, 34, 35, 36],
		[41, 42, 43, 44, 45, 46],
		[51, 52, 53, 54, 55, 56],
		[61, 62, 63, 64, 65, 66],
];

$sumAll = 0;

for($row = 1; $row < count ( $twoDimensionArray ); $row += 2) {
	
	$sum = 0;
	for($col = 0; $col < count ( $twoDimensionArray [$row] ); $col ++) {
		
		$sum += $twoDimensionArray [$row] [$col];
		$sumAll += $twoDimensionArray [$row] [$col];
	}
	echo 'The sum of the numbers in the row is: ', $sum, PHP_EOL;
}
echo 'The sum of the numbers in the array is: ', $sumAll . PHP_EOL;