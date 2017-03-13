<?php

require_once 'readline.php';

$number = readline ( 'Enter number:' . PHP_EOL );
$number ++;
$digits = 0;
while ( $digits < 10 ) {
	if ($number % 2 == 0 || $number % 3 == 0 || $number % 5 == 0) {
		$digits ++;
		echo "$digits:$number; ";
	}
	$number ++;
}