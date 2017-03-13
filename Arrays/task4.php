<?php

require_once 'readline.php';

$isMirrorArray = [ ];

do {
	$input = readline ( 'Enter a number:' . PHP_EOL );
	if ($input != 0) {
		$isMirrorArray [] = $input;
	}
	
} while ( $input != 0 );

if (empty ( $isMirrorArray )) {
	
	echo 'The array is empty.';
	die ();
} else {
	
	echo 'The array is: ';
	$len = count ( $isMirrorArray );
	$isMirror = true;
	
	for($i = 0; $i < $len; $i ++) {
		
		echo $isMirrorArray [$i], ', ';
	}
	
	for($i = 0; $i < $len / 2; $i ++) {
		
		if ($isMirrorArray [$i] != $isMirrorArray [$len - $i - 1]) {
			
			$isMirror = false;
			break;
		}
	}
	
	echo PHP_EOL;
	
	if ($isMirror) {
		
		echo 'The array is mirror.';
	} else {
		
		echo 'The array is not mirror.';
	}
}
