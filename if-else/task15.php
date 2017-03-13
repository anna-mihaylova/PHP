<?php

require_once 'readline.php';

$number = readline ( 'Enter an integer ranging from 1 to 24:' . PHP_EOL );

if ($number >= 0 && $number <= 24) {
	
	if ($number > 4 && $number <= 9) {
		echo 'Good morning.' . PHP_EOL;
	} else if ($number > 9 && $number <= 18) {
		echo 'Good afternoon.' . PHP_EOL;
	} else {
		echo 'Good evening.';
	}
} else {
	echo 'You have not entered the correct data.' . PHP_EOL;
}