<?php

require_once 'readline.php';

$array1 = [ ];
$sum = 0;
$count = 0;

do {
	$input = readline ( 'Enter a number:' . PHP_EOL );
	
	if ($input != 0) {
		
		$array1 [] = $input;
		$sum += $input;
		$count ++;
	}
} while ( $input != 0 );

if (empty ( $array1 )) {
	
	echo 'The array is empty';
	die ();
	
} else {
	
	$sumAverage = $sum / $count;
	$s = (($count / 2) - 3);
	$sumAverage += $s;
	$num = [ ];
	$j = 0;
	
	for($i = 0; $i < count ( $array1 ); $i ++) {
		
		if (floor ( $array1 [$i] ) > $sumAverage) {
			
			$num [$j] = $array1 [$i];
			$j ++;
		}
	}
	
	for($i = 0; $i < count ( $num ); $i ++) {
		
		echo $num [$i], ', ';
	}
}
