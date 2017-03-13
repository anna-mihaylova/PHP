<?php

require_once 'readline.php';

$numbers = [ ];
$input = readline ( 'Enter a number:' . PHP_EOL );
$numbers [0] = $input;
$numbers [1] = $input;

for($i = 1; $i < 9; $i ++) {
	
	$numbers [$i + 1] = $numbers [$i - 1] + $numbers [$i];
}

echo 'The array is : ';

for($index = 0; $index < count ( $numbers ); $index ++) {
	
	echo $numbers [$index], ', ';
}
