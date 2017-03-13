<?php
require_once 'readline.php';

$length = readline ( 'Enter length:' . PHP_EOL );
$symbol = readline ( 'Enter symbol:' . PHP_EOL );

for($i = 0; $i < $length; $i ++) {
	echo "*";
}
echo PHP_EOL;

for($j = 0; $j < $length - 2; $j ++) {
	echo "*";
	
	for($i = 0; $i < $length - 2; $i ++) {
		
		echo "$symbol";
	}
	echo "*" . PHP_EOL;
}
for($i = 0; $i < $length; $i ++) {
	
	echo "*";
}
