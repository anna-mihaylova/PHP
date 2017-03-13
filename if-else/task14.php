<?php

require_once 'readline.php';

$x1 = readline ( 'Enter the coordinates x the first position:' . PHP_EOL );
$y1 = readline ( 'Enter the coordinates y the first position:' . PHP_EOL );
$x2 = readline ( 'Enter the coordinates x the second position:' . PHP_EOL );
$y2 = readline ( 'Enter the coordinates y the second position:' . PHP_EOL );

if (($x1 >= 1 && $x1 <= 8) && ($y1 >= 1 && $y1 <= 8) && ($x2 >= 1 && $x2 <= 8) && ($y2 >= 1 && $y2 <= 8)) {
	
	if (($x1 + $y1) % 2 == ($x2 + $y2) % 2) {
		echo 'The positions have the same color.' . PHP_EOL;
	} else {
		echo 'Positions have different color.' . PHP_EOL;
	}
} else {
	echo 'You have not entered the correct data.' . PHP_EOL;
}