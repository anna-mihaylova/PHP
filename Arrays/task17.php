<?php

require_once 'readline.php';

$n = 6;
$numbers = [$n];
$i = 0;

while ( $i != $n ) {
	
	$input = readline ( 'Enter a number:' . PHP_EOL );
	$numbers [$i] = $input;
	$i ++;
}

if (empty ( $numbers )) {
	
	echo 'The array is empty';
	die ();
	
} else {
	
	$isTrue = false;
	
	for($i = 0; $i < count ( $numbers ) - 1; $i ++) {
		
		if (isset ( $numbers [$i] ) && $i % 2 == 1) {
			
			if (($numbers [$i] > $numbers [$i - 1]) && ($numbers [$i] > $numbers [$i + 1])) {
				$isTrue = true;
				
			} else
				
				$isTrue = false;
		}
	}
	switch ($isTrue) {
		case 0 :
			echo 'The arrray is not.', PHP_EOL;
			break;
		case 1 :
			echo 'The array is.', PHP_EOL;
			break;
	}
}