<?php

require_once 'readline.php';

$a1 = readline ( 'Enter first number:' . PHP_EOL );
$a2 = readline ( 'Enter second number:' . PHP_EOL );

if ($a1 > $a2) {
	$a3 = $a1;
	$a1 = $a2;
	$a2 = $a3;
}
$count = $a1;

while ( $count <= $a2 ) {
	
	echo $count . PHP_EOL;
	$count ++;
}
