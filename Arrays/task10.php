<?php

require_once 'readline.php';

define ( 'LENGTH', 7 );

$array1 = [ ];
$i = 0;
$sum = 0;

echo 'Enter 7 numbers', PHP_EOL;

while ( $i != LENGTH ) {
	
	$input = ( int ) readline ( 'Enter number' . PHP_EOL );
	$array1 [$i] = $input;
	$sum += $input;
	$i ++;
}

$sumAverage = $sum / LENGTH;

if (empty ( $array1 )) {
	
	echo 'Array is empty';
	die ();
	
} else {
	
	$num = 0;
	$min;
	
	for($i = 0; $i < count ( $array1 ); $i ++) {
		
		if (! isset ( $min ) || $min > abs ( $array1 [$i] - $sumAverage )) {
			
			$min = abs ( $array1 [$i] - $sumAverage );
			$num = $i;
		}
	}
	
	echo 'Avarege sum is: ', $sumAverage, '.' . PHP_EOL;
	echo 'Element whith close value is: ', $array1 [$num], '.';
}