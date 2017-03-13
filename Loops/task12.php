<?php

echo "The numbers from 100 to 1000, in which no repeating digits:" . PHP_EOL;

for($n = 100; $n < 1000; $n ++) {
	$leftNumber = floor ( $n / 100 );
	$rightNumber = floor ( $n % 10 );
	$middleNumber = floor ( $n / 10 );
	$middleNumber = floor ( $middleNumber % 10 );
	if (($leftNumber != $middleNumber) && ($leftNumber !== $rightNumber) && ($middleNumber !== $rightNumber)) {
		$number = ($leftNumber . $middleNumber . $rightNumber);
		echo $number . PHP_EOL;
	}
}