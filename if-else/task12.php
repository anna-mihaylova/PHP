<?php

require_once 'readline.php';

$day = readline ( 'Enter day:' . PHP_EOL );
$mounth = readline ( 'Enter month:' . PHP_EOL );
$year = readline ( 'Enter year:' . PHP_EOL );

if ($mounth == 2) {
	
	if ((($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0)) {
		$dayInMount = 29;
		
	} else {
		$dayInMount = 28;
	}
	
} else if (($mounth == 4) || ($mounth == 6) || ($mounth == 9) || ($mounth == 11)) {
	$dayInMount = 30;
	
} else {
	$dayInMount = 31;
}

if ($day < $dayInMount) {
	$day ++;
	
} else {
	
	$day = 1;
	
	if ($mounth < 12) {
		$mounth ++;
		
	} else {
		
		$mounth = 1;
		$year ++;
	}
}
echo "The next date is $day.$mounth.$year";
	
