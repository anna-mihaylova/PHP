<?php

require_once 'readline.php';

$a1 = readline ( 'Enter nummber:' . PHP_EOL );
$count = 3;
echo "First $a1 numbers, which are divided into 3 are:" . PHP_EOL;
while ( $count <= 3 * $a1 ) {
	if ($count % 3 == 0) {
		echo $count . ",";
	}
	$count ++;
}
