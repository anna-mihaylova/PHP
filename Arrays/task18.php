<?php

$length = 10;
$array1 = [18, 19, 32, 1, 3, 4, 5, 6, 7, 8];
$array2 = [1, 2, 3, 4, 5, 16, 17, 18, 27, 11];
$array3 = [];
$count = 0;

for($index = 0; $index < count ( $array1 ); $index ++) {
	
	$maxNumber = 0;
	if ($array1 [$index] > $array2 [$index]) {
		
		$maxNumber = $array1 [$index];
	} else {
		
		$maxNumber = $array2 [$index];
	}
	
	$array3 [$count] = $maxNumber;
	$count ++;
}

echo 'First array: ';

for($index = 0; $index < $length; $index ++) {
	
	echo $array1 [$index], ', ';
}

echo PHP_EOL;
echo 'Second array: ';

for($index = 0; $index < $length; $index ++) {
	
	echo $array2 [$index], ', ';
}

echo PHP_EOL;
echo 'Third array: ';

for($index = 0; $index < $length; $index ++) {
	
	echo $array3 [$index], ', ';
}

