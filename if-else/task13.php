<?php

require_once 'readline.php';

$tempreture = readline ( 'Enter the temperature in degrees Celsius:' . PHP_EOL );

if ($tempreture >= - 100 && $tempreture <= 100) {
	
	if ($tempreture < - 20) {
		echo 'Ice-cold.' . PHP_EOL;
	}
	if ($tempreture <= 0 && $tempreture >= - 20) {
		echo 'cold.' . PHP_EOL;
	}
	if ($tempreture <= 15 && $tempreture > 0) {
		echo 'Coldly.' . PHP_EOL;
	}
	if ($tempreture <= 25 && $tempreture > 15) {
		echo 'Warm.' . PHP_EOL;
	}
	if ($tempreture > 25) {
		echo 'Hot.' . PHP_EOL;
	}
} else {
	
	echo 'You have not entered the correct data.' . PHP_EOL;
}