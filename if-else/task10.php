<?php

require_once 'readline.php';

$volume = readline ( 'Enter the volume:' . PHP_EOL );
$firstVolume = 2;
$secondVolume = 3;
$number1 = 0;
$number2 = 0;

$volumeFirstPlusSecond = floor ( $firstVolume + $secondVolume );
$number = floor ( $volume / $volumeFirstPlusSecond );
$res = floor ( $volume % $volumeFirstPlusSecond );

if ($res == 1) {
	$number2 += 2;
	$number --;
}
if ($res == 2) {
	$number1 ++;
}
if ($res == 3) {
	$number2 ++;
}
if ($res == 4) {
	$number1 += 2;
}
echo "Bucket of 2 liters is filled $number times." . PHP_EOL . "Bucket of 2 liters is filled $number times." . PHP_EOL;

if ($number1)
	echo "Additionally bucket of 2 liters is filled $number1 times." . PHP_EOL;
if ($number2)
	echo "Additionally bucket of 3 liters is filled $number2 times." . PHP_EOL;
	 	
