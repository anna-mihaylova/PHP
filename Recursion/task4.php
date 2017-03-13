<?php

require_once 'readline.php';

$firstNumber = readline ( 'Enter number:' . PHP_EOL );
$secondNumber = readline ( 'Enter number:' . PHP_EOL );

function triangle($num1, $num2, $i) {
	if ($num1 > $num2) {
		return 0;
	}
	if ($num1 <= $i) {
		echo $num1;
	}
	return triangle ( $num1 + 1, $num2, $i );
}

for($i = $firstNumber; $i <= $secondNumber; $i ++) {
	triangle ( $firstNumber, $secondNumber, $i );
	echo PHP_EOL;
}