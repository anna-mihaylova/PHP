<?php

require_once 'readline.php';

$firstNumberA = readline ( 'Enter first number:' . PHP_EOL );
$secondNumberB = readline ( 'Enter second number:' . PHP_EOL );
$thirdNumbearC = readline ( 'Enter third number:' . PHP_EOL );

if (($thirdNumberC > $firstNumberA) && ($thirdNumberC < $secondNumberB)) {
	
	echo 'The third number is between first and second number.', PHP_EOL;
} else {
	
	echo 'The third number is not between first and second number.', PHP_EOL;
}

