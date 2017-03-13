<?php
require_once 'readline.php';

$array1 = [ ];

do {
	$input = readline ( 'Enter a number:' . PHP_EOL );
	if ($input != 0) {
		
		$array1 [] = $input;
	}
} while ( $input != 0 );

$array2 = [ ];

do {
	
	$input1 = readline ( 'Enter a number second array:' . PHP_EOL );
	if ($input1 != 0) {
		
		$array2 [] = $input1;
	}
} while ( $input1 != 0 );

if (empty ( $array1 && $array2 )) {
	
	echo 'The array is empty';
	die ();
} else {
	
	$isArraysEqual = true;
	$isArraysLengthEqual = true;
	
	if (count ( $array1 ) != count ( $array2 )) {
		
		$isArraysLengthEqual = false;
	} else {
		
		for($i = 0; $i < count ( $array1 ); $i ++) {
			
			if ($array1 [$i] != $array2 [$i]) {
				$isArraysEqual = false;
			}
		}
	}
	switch ($isArraysEqual + $isArraysLengthEqual) {
		case 1 :
			echo 'Arrays are not equals.', PHP_EOL;
			break;
		case 2 :
			echo 'Arrays are equals.', PHP_EOL;
			break;
	}
	switch ($isArraysLengthEqual) {
		case 0 :
			echo 'Arrays lengths are not equals.', PHP_EOL;
			break;
		case 1 :
			echo 'Arrays lengths are equals.', PHP_EOL;
			break;
	}
}