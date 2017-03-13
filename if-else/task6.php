<?php

require_once 'readline.php';

$a1 = readline ( 'Enter first number:' . PHP_EOL );
$a2 = readline ( 'Enter second number:' . PHP_EOL );
$a3 = readline ( 'Enter third number:' . PHP_EOL );

echo 'At first the numbers are.' . PHP_EOL . "The first number is : $a1" . PHP_EOL . "The second number is : $a2" . PHP_EOL . "The third number is : $a3" . PHP_EOL;

$a4 = $a1;
$a1 = $a2;
$a2 = $a3;
$a3 = $a4;

echo 'After exchanging numbers are.' . PHP_EOL . "The first number is : $a1" . PHP_EOL . "The second number is : $a2" . PHP_EOL . "The third number is : $a3" . PHP_EOL;
