<?php

require_once 'readline.php';

$num = readline ( 'Enter a length:' . PHP_EOL );
$array = [];
$i = 0;

while ($i != $num) {
	
	$input = readline ( 'Enter a number:' . PHP_EOL );
	$array[$i] = $input;
	$i++;
} 
if (empty ($array)) {
	
	echo 'The array is empty';
	die ();
 } else {
 	
	$len = count ($array);
	$newArray = [$len];
	
	for($i = 1; $i < $len - 1; $i ++) {
		
		$newArray[$i] = $array[$i + 1] + $array[$i - 1];
	}
	
	$newArray[0] = $array[0] + 1;
	$newArray[count($newArray)] = $array[$len - 2];
}

echo 'The new array is : ', PHP_EOL;

for($i = 0; $i < count($newArray); $i ++) {
	
	echo $newArray [$i], ', ';
}
 
	

