<?php

require_once 'readline.php';
$firstString = readline ( 'Enter text:' . PHP_EOL );
$secondString = readline ( 'Enter text:' . PHP_EOL );
$firstLen = mb_strlen ( $firstString );
$secondLen = mb_strlen ( $secondString );
$firstString = mb_convert_encoding ( $firstString, "windows-1251", "utf-8" );
$secondString = mb_convert_encoding ( $secondString, "windows-1251", "utf-8" );
function sumAscii($str, $len) {
	$i = 0;
	$sum = 0;
	while ( $i != $len ) {
		$sum += ord ( $str [$i] );
		$i ++;
	}
	return $sum;
}
$firstSum = sumAscii ( $firstString, $firstLen );
$secondSum = sumAscii ( $secondString, $secondLen );
if ($firstSum == $secondSum) {
	echo 'Both string are with equal length.';
} else {
	$max = $firstSum > $secondSum ? $firstString : $secondString;
	echo mb_convert_encoding ( $max, "utf-8", "windows-1251" );
}
