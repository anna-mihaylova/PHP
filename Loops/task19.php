<?php

require_once 'readline.php';

$number = readline ( 'Enter number:'. PHP_EOL );
while ( $number != 1 ) {
	if ($number % 2 == 0) {
		$number = $number / 2;
		echo $number . "; ";
	} else {
		$number = 3 * $number + 1;
		echo $number . "; ";
	}
}