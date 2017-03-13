<?php

require_once 'readline.php';

$firstNumber = readline ( 'Enter number:' . PHP_EOL );
$secondNumber = readline ( 'Enter number:' . PHP_EOL );

function product($num1, $num2) {
	if ($num1 <= 0 || $num2 <= 0) {
		return 0;
	}
	if ($num2 < 2) {
		return $num1;
	} else {
		return ($num1 + product ( $num1, $num2 - 1 ));
	}
}
echo product ( $firstNumber, $secondNumber );