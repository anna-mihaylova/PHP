<?php

require_once 'readline.php';

$number = readline ( 'Enter number:' . PHP_EOL );

function isPrime($num) {
	$delitel = 2;
	if ($num < 4) {
		return 0;
	}
	if ($num % 2 == 0) {
		return $num;
	} else {
		return isPrime ( $delitel + 1, $num );
	}
}
if (isPrime ( $number ) != 0) {
	echo 'Number is not prime';
} else {
	echo 'Number is prime';
}