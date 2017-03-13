<?php

require_once 'readline.php';

$number = readline ( 'Enter number:' . PHP_EOL );
$reverseNumber = 0;
$digits = $number;

do {
	$reverseNumber = floor($reverseNumber*10 + $digits%10);
	$digits = floor($digits/10);
	
} while ($digits>0);

	if ($reverseNumber==$number){
		
	echo "The number $number is palindrome.";
} else {
	
	echo"The number $number it is not a palindrome.";
}