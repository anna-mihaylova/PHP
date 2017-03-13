<?php

require_once 'readline.php';
$firstString = readline ( 'Enter text:' . PHP_EOL );
$secondString = readline ( 'Enter text:' . PHP_EOL );
$firstString = mb_convert_encoding ( $firstString, "windows-1251", "utf-8" );
$secondString = mb_convert_encoding ( $secondString, "windows-1251", "utf-8" );
$temp;

for($i = 0; $i < 5; $i ++) {
	$temp = $firstString [$i];
	$firstString [$i] = $secondString [$i];
	$secondString [$i] = $temp;
}
if (strlen ( $firstString ) > strlen ( $secondString )) {
	echo strlen ( $firstString ), ' ';
	echo mb_convert_encoding ( $firstString, "utf-8", "windows-1251" );
} else {
	echo strlen ( $secondString ), ' ';
	echo mb_convert_encoding ( $secondString, "utf-8", "windows-1251" );
}
    

