<?php

require_once 'readline.php';

$array1 = [ ];

do {
	$input = readline ( 'Enter a number:' . PHP_EOL );
	
	if ($input != 0) {
		
		$array1 [] = $input;
	}
	
} while ( $input != 0 );

if (empty ( $array1 )) {
	
	echo 'The array is empty';
	die ();
	
} else {
	
	$array2 = [ ];
	$len = count ( $array1 );
	
	echo 'The array is : ';
	
	for($index = 0; $index < $len; $index ++) {
		
		echo $array1 [$index], ', ';
		$array2 [$index] = $array1 [$index];
	}
	
	$i = 0;
	
	for($index = ($len - 1); $index >= 0; $index --) {
		
		$array3 [$i] = $array1 [$index];
		$i ++;
	}
	
	for($index = 0; $index < $len; $index ++) {
		
		$array2 [$len + $index] = $array3 [$index];
	}
}

echo PHP_EOL;
echo 'The new array is : ';

for($index = 0; $index < count ( $array2 ); $index ++) {
	
	echo $array2 [$index], ', ';
}
