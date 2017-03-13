<?php

require_once 'readline.php';
define('VALUE', 5);
define('LENGTH', 7);

$array1 = [];
$i = 0;

while ($i != LENGTH) {
	
	$input = (int)readline  ('Enter number' . PHP_EOL);
		$array1[$i] = $input;
		$i++;
} 
if (empty ($array1)) {
	
	echo 'Array is empty';
	die ();
	
} else {
	
	echo 'The numbers that are multiples of ',VALUE,' and are greater than ',VALUE,' are: ';
	
	for ($i = 0; $i < count($array1); $i++) {
		
		if ($array1[$i] %VALUE == 0 && $array1[$i] > VALUE ){
			
			echo $array1[$i], '; ';
		}
	}
}
