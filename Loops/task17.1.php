<?php
require_once 'readline.php';

$width = readline ( 'Enter width' . PHP_EOL );
$height = readline ( 'Enter height' . PHP_EOL );

for($i = 0; $i < $height; $i ++) {
	
	for($j = 0; $j < $width; $j ++) {
		if ($i == 0 || $i == $height - 1 || $j == 0 || $j == $width - 1) {
			echo '*';
		} else {
			echo ' ';
		}
	}
	
	echo PHP_EOL;
}
