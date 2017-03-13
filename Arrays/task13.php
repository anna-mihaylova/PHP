<?php

require_once 'readline.php';

$array1 = [ ];
$input = readline ( 'Enter a number:' . PHP_EOL );
define ( 'BROINA_SISTEMA', 2 );
$number;
$i = 1;
$number;

while ( $input > BROINA_SISTEMA - 1 ) {
	
	$number = $input % BROINA_SISTEMA;
	$array1 [$i] = $number;
	$input /= BROINA_SISTEMA;
	$input = ( int ) $input;
	$i ++;
}

$array1 [$i] = $number;

for($i = count ( $array1 ); $i > 0; $i --) {
	
	echo $array1 [$i];
}
