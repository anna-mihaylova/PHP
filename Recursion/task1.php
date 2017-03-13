<?php

require_once 'readline.php';

$number = readline ( 'Enter number:' . PHP_EOL );
function fibonachi($num) {
	
	if ($num == 0) {
		return 0;
	}
	if ($num <= 2) {
		return 1;
		
	} else {
		
		return fibonachi ( $num - 1 ) + fibonachi ( $num - 2 );
	}
}
echo fibonachi ( $number );

