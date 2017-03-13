<?php

require_once 'readline.php';

$a1 = readline ( 'Enter nummber:' . PHP_EOL );
$sum = 0;

for($n = 1; $n <= $a1; $n ++) {
	$sum += $n;
}
echo "The sum of the numbers from 1 to $a1 is: $sum" . PHP_EOL;