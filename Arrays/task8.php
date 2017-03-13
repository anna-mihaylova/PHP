<?php

require_once 'readline.php';

$length = readline ( 'Enter a length:' . PHP_EOL );
$array = [];
$i = 0;

while ($i != $length) {
	
	$input = readline ( 'Enter a number:' . PHP_EOL );
	$array[$i] = $input;
	$i++;
}

if (empty ($array)) {
	
	echo 'The array is empty';
	die ();
} else {
	
    $currentSequence = 0;
	$maxSequence = 0;
	$value = 0;
	
	echo 'Max sequences in array is: ';
	
	for($i = 0; $i < count($array); $i ++) {
		
		if (isset($array[$i]) && isset($array[$i + 1]) && ($array[$i] == $array[$i + 1])) {
			
			$currentSequence ++;
		} else {
			
			if ($currentSequence > $maxSequence) {
				
				$maxSequence = $currentSequence;
				$value = $array[$i];
			}
			
			$currentSequence = 1;
		}
		
	} for($i = 0; $i < $maxSequence; $i ++) {
		
		echo $value, ' ';
	}
}
