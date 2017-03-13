<?php

$twoDimensionArray = [
		[1, 2, 3, 4],
		[5, 6, 7, 8],
		[9, 10, 11, 12],
		[13, 14, 15, 16],
];

for($i = 0; $i < count ( $twoDimensionArray ); $i ++) {
	
	for($j = 0; $j < count ( $twoDimensionArray [$i] ); $j ++) {
		
		echo $twoDimensionArray [count ( $twoDimensionArray ) - $j - 1] [$i], ' ';
	}
	echo PHP_EOL;
}