<?php
require_once 'readline.php';

$firstNumberA = readline ( 'Enter first 2-digit number:' . PHP_EOL );
$secondNumberB = readline ( 'Enter second 2-digit number:' . PHP_EOL );

if (($firstNumberA >= 10 && $firstNumberA <= 99) && ($secondNumberB >= 10 && $secondNumberB <= 99)) {
	
	$thirdNumberC = $firstNumberA * $secondNumberB;
	
	echo "Product the digits $firstNumberA and $secondNumberB is $thirdNumberC." . PHP_EOL;
	
	$thirdDigit = floor ( $thirdNumberC % 10 );
	
	if ($thirdDigit % 2 == 0) {
		
		echo "The latest number is: $thirdDigit. It is even, respectively product the numbers $thirdNumberC is even." . PHP_EOL;
	
	} else {
		
		echo "The latest number is: $thirdDigit. It is odd, respectively product the numbers $thirdNumberC is odd." . PHP_EOL;
	}
	
} else {
	
	echo 'You have not entered the correct number.' . PHP_EOL;
}