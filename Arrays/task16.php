<?php

$array = [-1.12, -2.43, 3.1, 4.2, 0, 6.4, - 7.5, 8.6, 9.1, -4];
define ( 'LIMIT', - 0.231 );
define ( 'PLUS', 41.25 );
$array1 = [ ];
$sum = 0;
$num = 0;
$sumAvarage = 0;

echo 'Numbers of first array are: ';

for($i = 0; $i < count ( $array ); $i ++) {
	
	echo $array [$i], ', ';
	
	if ($array [$i] < LIMIT) {
		
		$array1 [$i] = pow ( $i, 2 ) + PLUS;
		
	} else {
		
		$array1 [$i] = $array [$i] * $i;
	}
}

echo PHP_EOL;
echo 'Numbers of new array are: ';

for($i = 0; $i < count ( $array1 ); $i ++) {
	
	echo $array1 [$i], ', ';
	
	if ($array1 [$i] != 0) {
		
		$num ++;
		$sum += $array1 [$i];
		$sumAvarage = $sum / $num;
	}
}

echo PHP_EOL;
echo 'Avarege sum is: ' . $sumAvarage, '.';