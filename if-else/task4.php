<?php

require_once 'readline.php';

$firstNumberA = readline ( 'Enter first number:' . PHP_EOL );
$secondNumberB = readline ( 'Enter second number:' . PHP_EOL );

if ($number1 > $number2) {
	echo "$number1 , $number2 " . PHP_EOL;
} else if ($number1 < $number2) {
	echo "$number2 , $number1 " . PHP_EOL;
} else if ($number1 == $number2) {
	echo "The numbers are equal" . PHP_EOL;
}
