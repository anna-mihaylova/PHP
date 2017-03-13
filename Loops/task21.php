<?php

require_once 'readline.php';

$number = readline ( 'Enter :' . PHP_EOL );

if ($number >= 1 && $number <= 51) {
	
$colour = floor ($number % 4);
$colour = $colour - 1;
$power = floor ($number / 4);

for($i = $power; $i < 13; $i ++) {
	for($j = $colour; $j < 4; $j ++) {
		switch ($i) {
			case 0 :
				echo "2 ";
				break;
			case 1 :
				echo "3 ";
				break;
			case 2 :
				echo "4 ";
				break;
			case 3 :
				echo "5 ";
				break;
			case 4 :
				echo "6 ";
				break;
			case 5 :
				echo "7 ";
				break;
			case 6 :
				echo "8 ";
				break;
			case 7 :
				echo "9 ";
				break;
			case 8 :
				echo "10 ";
				break;
			case 9 :
				echo "J ";
				break;
			case 10 :
				echo "D ";
				break;
			case 11 :
				echo "K ";
				break;
			case 12 :
				echo "A ";
				break;
		}
		switch ($j) {
			case 0 :
				echo "спатия, ";
				break;
			case 1 :
				echo "каро, ";
				break;
			case 2 :
				echo "купа, ";
				break;
			case 3 :
				echo "пика, ";
				break;
		}
	}$colour = 0;
}} else {
	echo "Некоректно въведени данни.";
}


