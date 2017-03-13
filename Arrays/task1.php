<?php

require_once 'readline.php';

$numbers = [ ];

do {
	$input = readline ( 'Enter a number:' . PHP_EOL );
	
	if ($input != 0) {
		
		$numbers [] = $input;
	}
} while ( $input != 0 );

if (empty ( $numbers )) {
	
	echo 'The array is empty';
	die ();
	
} else {
	
	$minElement;
	echo 'Array is :';
	
	for($i = 0; $i < count ( $numbers ); $i ++) {
		
		echo $numbers [$i], ', ';
		
		if ((! isset ( $minElement ) || $numbers [$i] < $minElement) && $numbers [$i] % 3 == 0) {
			
			$minElement = $numbers [$i];
		}
	}
	echo PHP_EOL;
}
echo 'Min number is: ', $minElement, '.';