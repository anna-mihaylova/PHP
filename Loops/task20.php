<?php

for($i = 0; $i <= 9; $i ++) {
	for($j = 1; $j <= 10; $j ++) {
		if (($a = $j + $i) >= 10) {
			$e = substr ( "$a", - 1 );
			echo "$e";
		} else {
			echo $j + $i;
		}
	}
	echo "\n";
}