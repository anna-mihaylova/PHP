<?php

require_once 'readline.php';
$n = readline ( 'Enter an integer from 10 to 200:' . PHP_EOL );
echo "All multiples of 7, from $n to 10:" . PHP_EOL;

if ($n >= 10 && $n <= 200) {
	for($i = $n; $i > 0; $i --) {
		if ($i % 7 == 0) {
			echo "$i, ";
		}
	}
} else {
	echo 'You have not entered the correct data.' . PHP_EOL;
}
