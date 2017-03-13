<?php

require_once 'readline.php';

$firstNumberA = readline ( 'Enter first number:' . PHP_EOL );
$secondNumberB = readline ( 'Enter second number:' . PHP_EOL );

if ($firstNumberA > $secondNumberB) {
	$thirdNumberC = $firstNumberA;
	$firstNumberA = $secondNumberB;
	$secondNumberB = $thirdNumberC;
}

echo "$firstNumberA and $secondNumberB";
