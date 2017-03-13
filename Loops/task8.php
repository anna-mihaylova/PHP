<?php

require_once 'readline.php';

$number = readline('Enter 1-digit number' . PHP_EOL);
$start = $number - 1;

for ($i = 0; $i < $number; $i++) {

	$output = '';
	for ($j = 0; $j < $number; $j++) {
		$output .= $start;
	}

	echo $output, PHP_EOL;
	$start += 2;
}

