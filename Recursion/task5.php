<?php
require_once 'readline.php';

$number = readline ( 'Enter number:' . PHP_EOL );
function reverseNumber($num, $reverseNumber) {
	if ($num == 0) {
		return $reverseNumber;
	}
	if ($num > 0) {
		$reverseNumber = floor ( ($reverseNumber * 10) + ($num % 10) );
	}
	return reverseNumber ( floor ( $num / 10 ), $reverseNumber );
}
$reverseNumber = reverseNumber ( $number, 0 );
if ($reverseNumber == $number) {
	echo "The number $reverseNumber is palindrome.";
} else {
	echo "The number $reverseNumber is not palindrome.";
}