<?php

require_once 'readline.php';

$number = readline ( 'Enter 4-digit number:' . PHP_EOL );

if ($number >= 1000 && $number <= 9999) {
	
	$leftTwoDigits = floor ( $number / 100 );
	$secondDigits = floor ( $leftTwoDigits % 10 );
	$leftThreeDigits = floor ( $number / 10 );
	$secondNumber = floor ( $secondDigits * 10 + ($leftThreeDigits % 10) );
	$lastDigit = floor ( $number % 10 );
	$firstNumber = floor ( ($number / 1000) );
	$firstNumber = floor ( $firstNumber * 10 + $lastDigit );
	
	echo "The number is: $number." . PHP_EOL . "The number formed by the first and the last digit is: $firstNumber." . PHP_EOL . 
		"The number formed by the third and fourth digit is: $secondNumber." . PHP_EOL;
	
	if ($firstNumber == $secondNumber) {
		
		echo 'The two numbers are equal.' . PHP_EOL;
		
	} else if ($firstNumber > $secondNumber) {
		
		echo "The first number $firstNumber it is greater than the second number $secondNumber." . PHP_EOL;
	
	} else {
		
		echo "The second number $secondNumber it is greater than the first number $firstNumber." . PHP_EOL;
	}
	
} else {
	
	echo 'You have not entered the correct number.' . PHP_EOL;
}