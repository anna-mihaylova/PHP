<?php

require_once 'readline.php';

$num = readline ('Enter a length:' . PHP_EOL);
$array = [];
$i = 0;

while ($i != $num) {
	
	$input = readline ('Enter a number:' . PHP_EOL);
	$array[$i] = $input;
	$i++;
}

if (empty ($array)) {
	
	echo 'The array is empty';
	die ();
} else {
	
	$newArray = [];
	$j = 0;
	
	for($i = count($array) - 1; $i >= 0; $i --) {
		
		$newArray[$j] = $array[$i];
		$j ++;
	}
}

echo 'The new array is : ';

for($j = 0; $j < count($newArray); $j ++) {
	
	echo $newArray[$j], ', ';
}