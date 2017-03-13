<?php

require_once 'readline.php';

$number = readline ( 'Enter 3-digit number:' . PHP_EOL );

if ($number > 100 && $number <= 999) {
	
	$thirdDigit = floor ( $number % 10 );
	$number = floor ( $number / 10 );
	$secondNumber = $number % 10;
	$firstDigit = floor ( $number / 10 );
	
	if ($firstDigit == $secondNumber && $secondNumber == $thirdDigit) {
		echo "The number has equal digits $firstDigit = $secondNumber = $thirdDigit." . PHP_EOL;
		
	} else if ($firstDigit > $secondNumber && $secondNumber > $thirdDigit) {
		
		echo "The number has digits arranged in descending order $firstDigit > $secondNumber > $thirdDigit." . PHP_EOL;
	
	} else {
		
		echo "The number has digits arranged in ascending order $firstDigit < $secondNumber < $thirdDigit." . PHP_EOL;
	}
	
} else {
	
	echo 'You have not entered the correct data.' . PHP_EOL;
}

