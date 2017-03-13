<?php

require_once 'readline.php';
$text = readline('Enter text:' . PHP_EOL);
function numbersOfString($string) {
	preg_match_all ( '/(-?[\d]+)/', $string, $numbers );
	return $numbers [0];
}
$numbers = numbersOfString ($text);
$sum = 0;
foreach ($numbers as $value) {
	$sum += $value;
}
echo $sum;