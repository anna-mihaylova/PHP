<?php

require_once 'readline.php';

$hour = ( integer ) readline ( 'Enter hour:' . PHP_EOL );
$money = ( float ) readline ( 'Enter the amount of money:' . PHP_EOL );
$isHealty = ( boolean ) readline ( 'Enter if you are sick:' . PHP_EOL );

if ($isHealty == 1) {
	
	echo 'I am not going out.' . PHP_EOL;
	
	if ($money > 0) {
		
		echo 'I will buy medicines.' . PHP_EOL;
		
	} else {
		
		echo 'I will stay home and drink tea.' . PHP_EOL;
	}
	
} else {
	
	echo 'I will go to the movies with friends.' . PHP_EOL;
}

if ($money < 10 && $money > 0) {
	
	echo 'Ще отида на кафе.' . PHP_EOL;
}