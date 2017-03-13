<?php
require_once 'readline.php';

$number = readline ( 'Enter the 3-digit number that does not contain the digit 0:' . PHP_EOL );

$number = floor ( $number % 1000 );
$firstDigit = floor ( $number / 100 );
$secondNumber = floor ( $number / 10 );
$secondNumber = floor ( $secondNumber % 10 );
$thirdDigit = $number % 10;

if (($firstDigit != 0) && ($secondNumber != 0) && ($thirdDigit != 0)) {
	
	if (($number % $firstDigit == 0) && ($number % $secondNumber == 0) && ($number % $thirdDigit == 0)) {
		
		echo "The number $number divisible by the numbers: $firstDigit, $secondNumber, $thirdDigit" . PHP_EOL;
	} else {
		
		echo "The number $number is not divisible by the numbers: $firstDigit, $secondNumber, $thirdDigit" . PHP_EOL;
	}
} else {
	
	echo 'You have not entered the correct data.' . PHP_EOL;
}