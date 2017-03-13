<?php

$array = [ 1, 2, 3, 4, 5, 6, 7 ];
$len = count ( $array );

echo 'Numbers of array are: ';

for($i = 0; $i < $len; $i ++) {
	
	echo $array [$i], ', ';
}

echo PHP_EOL;

// 1st element:
$temp = $array [0];
$array [0] = $array [1];
$array [1] = $temp;

// 2nd element:
$array [2] += $array [3];
$array [3] = $array [2] - $array [3];
$array [2] -= $array [3];

// 3rd element:
$array [4] *= $array [5];
$array [5] = $array [4] / $array [5];
$array [4] /= $array [5];

echo 'Numbers of shift array are: ';

for($i = 0; $i < $len; $i ++) {
	
	echo $array [$i], ', ';
}
