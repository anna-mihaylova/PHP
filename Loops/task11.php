<?php

require_once 'readline.php';

$number = readline ( 'Enter number:' . PHP_EOL );

for ($i = 1; $i <= $number; $i++) {
	for ($j = $i; $j < $number; $j++)
		echo " ";
		for ($j = 1; $j <= $i; $j++)
			echo "*";
			for ($j = $i - 1; $j >= 1; $j--)
				echo "*";
			echo PHP_EOL;
}

