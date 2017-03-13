<?php

$a = 1;
$count = 1;

while ( $a <= 9 ) {
	
	$b = 1;
	echo "$count-ви ред: ";
	
	while ( $b <= 9 ) {
		
		if ($b < $a) {
			echo "";
		} else {
			echo "$a*$b; ";
		}
		$b ++;
	}
	$count ++;
	echo PHP_EOL;
	$a ++;
}
