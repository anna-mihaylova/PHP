<?php

$twoDimensionArray = [
		[1, 2, 3, 4],
		[5, 6, 7, 8],
		[9, 10, 11, 12],
		[13, 14, 15, 16],
];

$sumRow;
$sumCol = 0;
$maxSumRow;
$maxSumCol;

for($i = 0; $i < count ( $twoDimensionArray ); $i ++) {
	
	$sumRow = 0;
	for($j = 0; $j < count ( $twoDimensionArray [$i] ); $j ++) {
		
		$sumRow += $twoDimensionArray [$i] [$j];
	}
	if (! isset ( $maxSumRow ) || $sumRow > $maxSumRow) {
		
		$maxSumRow = $sumRow;
	}
}
for($i = 0; $i < count ( $twoDimensionArray ); $i ++) {
	
	$sumCol = 0;
	for($j = 0; $j < count ( $twoDimensionArray [$i] ); $j ++) {
		
		$sumCol += $twoDimensionArray [$j] [$i];
	}
	if (! isset ( $maxSumCol ) || $sumCol > $maxSumCol) {
		
		$maxSumCol = $sumCol;
	}
}

echo 'The max row sum is: ', $maxSumRow . PHP_EOL;
echo 'The max col sum is: ', $maxSumCol . PHP_EOL;

if ($sumCol == $sumRow) {
	
	echo 'The max row sum and the max col sum are equal.';
	
} else if ($sumRow > $sumCol) {
	
	echo 'The max row sum is bigger than the max col sum.';
	
} else {
	
	echo 'The max col sum is bigger than the max row sum.';
}

