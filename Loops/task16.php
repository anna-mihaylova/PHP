<?php
require_once 'readline.php';

$numberN = readline ( 'Enter a number from 10 to 5555:' . PHP_EOL );
$numberM = readline ( 'Enter a number from 10 to 5555:' . PHP_EOL );

$delitel = 50;
if (($numberN >= 10 && $numberN <= 5555) && ($numberM >= 10 && $numberM <= 5555)) {
	if ($numberN > $numberM) {
		$number = $numberN;
		$numberN = $numberM;
		$numberM = $number;
	} else {
		echo "The numbers from $numberM to $numberN, multiples of $delitel are:" . PHP_EOL;
		
		for($i = $numberM; $i > $numberN; $i --) {
			
			if ($i % $delitel == 0) {
				echo "$i, ";
			}
		}
	}
} else {
	echo 'You have not entered the correct data.' . PHP_EOL;
}

