<?php

require_once 'readline.php';

$sum = readline ( 'Enter number:' . PHP_EOL );
echo  "Three-digit numbers that have a sum equal to $sum are:". PHP_EOL;
for($n = 100; $n < 1000; $n ++) {
	$leftDigit = floor($n / 100);
	$middleDigit = floor($n / 10);
	$middleDigit = floor($middleDigit % 10);
	$rightDigit = floor($n % 10);
	if ($sum == $leftDigit + $middleDigit + $rightDigit) {
		echo $leftDigit . $middleDigit . $rightDigit . PHP_EOL;
	}
}