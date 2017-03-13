<?php

require_once 'readline.php';

$number = readline ('Enter number:' . PHP_EOL);
$n = 2;
$maxN = sqrt ($number);
$m = true;

while ($m && ($n <= $maxN)) {
	if ($number % $n == 0) {
		$m = false;
	}
	$n ++;
}
if ($m == 1) {
	
	echo "The number $number is prime.";
	
} else {
	
	echo "Числото $number is not prime.";
}