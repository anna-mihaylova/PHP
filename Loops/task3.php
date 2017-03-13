<?php

$counter = - 10;

echo "The odd numbers from -10 to 10 are:" . PHP_EOL;

while ( $counter <= 10 ) {
	
	if ($counter % 2 !== 0)
		echo $counter . PHP_EOL;
	$counter ++;
}