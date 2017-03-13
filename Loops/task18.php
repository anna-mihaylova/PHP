<?php
require_once 'readline.php';

$a = readline ( 'Enter an integer from 1 to 9:' . PHP_EOL );
$b = readline ( 'Enter an integer from 1 to 9:' . PHP_EOL );

if (($a >= 1 && $a <= 9) && ($b >= 1 && $b <= 9)) {
	echo "Multiplication table with a maximum first multiplier: $a and second maximum multiplier: $b." . PHP_EOL;
	for($i = 1; $i <= $a; $i ++) {
		for($j = 1; $j <= $b; $j ++) {
			
			$result = $i * $j;
			echo "$i * $j = $result" . PHP_EOL;
		}
	}
} else {
	echo "Incorrect entries.";
}
