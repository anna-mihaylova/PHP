<?php
$twoDimensionArray = [
		[1, 2, 3, 4, 5],
		[6, 7, 8, 9, 10],
		[11, 12, 13, 14, 15],
		[16, 17, 18, 19, 20],
		[21, 22, 23, 24, 25],
		[26, 27, 28, 29, 30]
];

$sum = 0;
$sumAverage = 0;
$count = 1;

for($row = 0; $row < count ( $twoDimensionArray ); $row ++) {
	
	for($col = 0; $col < count ( $twoDimensionArray [$row] ); $col ++) {
		
		$sum += $twoDimensionArray [$row] [$col];
		$count ++;
	}
}

$sumAverage = $sum / $count;
echo 'Sum is: ', $sum, '.', PHP_EOL;
echo 'Average is: ', $sumAverage, '.';