<?php

define ( 'LIMIT', 2.99 );

$array = [7.1, 8.5, 0.2, 3.7, 0.99, 1.4, - 3.5, -110, 212, 341, 1.2];
$len = count ( $array );
$array2 = [];

echo 'Numbers of first array are: ';

for($i = 0, $j = 0; $i < $len; $i ++, $j ++) {
	
	echo $array [$i], ', ';
	
	if ($array [$i] >= - LIMIT && $array [$i] <= LIMIT) {
		
		$array2 [$j] = $array [$i];
	}
}

echo PHP_EOL;
$len2 = count ( $array2 );
echo 'Numbers of new array are: ';

foreach ( $array2 as $value ) {
	
	echo $value, ', ';
}
