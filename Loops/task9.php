<?php

require_once 'readline.php';

$firstNumber = readline ( 'Enter first number:' . PHP_EOL );
$secondNumber = readline ( 'Enter second number:' . PHP_EOL );

$sum = 0;
$count = 0;

for($i = $firstNumber; $i <= $secondNumber; $i ++) {
	
	$count = $i ** 2;
	if ($count % 3 == 0) {
		
		echo ' Skip 3,';
	} else {
		
		$sum = $sum + $count;
		echo " $count,";
	}
	if ($sum > 200) {
	
		break;
	}
}
