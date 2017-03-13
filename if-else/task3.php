<?php

$firstNumber = 2;
$secondNumber = 3;

echo 'At first the numbers are' . PHP_EOL . "First number is : $firstNumber" . PHP_EOL . 
     "Second number is: $secondNumber" . PHP_EOL;

$thirdNumber = $firstNumber;
$firstNumber = $secondNumber;
$secondNumber = $thirdNumber;

echo 'After changing the numbers are' . PHP_EOL . 
     "First number is : $firstNumber" . PHP_EOL . 
     "Second number is : $secondNumber" . PHP_EOL;
