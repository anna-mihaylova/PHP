<?php

require_once 'readline.php';

$number = readline ( 'Enter number:' . PHP_EOL );
$factoriel =1;
do {
	$factoriel *= $number--;	
} while ($number>0);

echo "Factorial is:$factoriel";
