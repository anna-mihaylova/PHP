<?php

require_once 'readline.php';

$firstNumberA = readline ( 'Enter first number:' . PHP_EOL );
$secondNumberB = readline ( 'Enter second number:' . PHP_EOL );
$thirdNumberC = readline ( 'Enter third number:' . PHP_EOL );

if ($firstNumberA < $secondNumberB) {
	
	$forthNumberD = $firstNumberA;
	$firstNumberA = $secondNumberB;
	$secondNumberB = $forthNumberD;
}
if ($secondNumberB < $thirdNumberC) {
	
	$forthNumberD = $secondNumberB;
	$secondNumberB = $thirdNumberC;
	$thirdNumberC = $forthNumberD;
}

if ($firstNumberA < $secondNumberB) {
	
	$forthNumberD = $firstNumberA;
	$firstNumberA = $secondNumberB;
	$secondNumberB = $forthNumberD;
}

echo "The numbers in descending order are : $firstNumberA, $secondNumberB, $thirdNumberC.";
