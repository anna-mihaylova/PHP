<?php

$numbers = [ ];

for($i = 0; $i < 10; $i ++) {
	
	$numbers [$i] = $i * 3;
}
echo 'Array is: ';

for($i = 0; $i < count ( $numbers ); $i ++) {
	
	echo $numbers [$i], ', ';
}
