<?php
$twoDimensionArray = [
		[1, 4, 6, 3],
		[5, 9, 7, 2],
		[4, 8, 1, 9],
		[2, 3, 4, 5],
];

//first diagonal
for($i = 0; $i < count ( $twoDimensionArray ); $i ++) {
	
	for($j = 0; $j < count ( $twoDimensionArray ); $j ++) {
		
		if ($i == $j) {
			
			echo $twoDimensionArray [$i] [$j], ' ';
		}
	}
}
echo PHP_EOL;

// second diagonal
$lastIndex = count ( $twoDimensionArray ) - 1;

for($i = 0, $j = $lastIndex; $i < count ( $twoDimensionArray ); $i ++, $j --) {
	
	$index = $lastIndex - $i;
	echo $twoDimensionArray [$i] [$index], ' ';
}

