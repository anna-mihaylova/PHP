<?php

$firstNumber = 2;
$secondNumber = 3;

echo 'At first the numbers are' . PHP_EOL . "First number is : $firstNumber" . PHP_EOL . 
	 "Second number is : $secondNumber" . PHP_EOL;

$firstNumber = $firstNumber ^ $secondNumber;
$secondNumber = $firstNumber ^ $secondNumber;
$firstNumber = $firstNumber ^ $secondNumber;

echo 'After changing the numbers are' . PHP_EOL . "First number is : $firstNumber" . PHP_EOL . 
	 "Second number is : $secondNumber" . PHP_EOL;
