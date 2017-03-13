<?php

require_once 'readline.php';

$firstString = readline ( 'Enter text:' . PHP_EOL );
$secondString = readline ( 'Enter text:' . PHP_EOL );
$firstLen = mb_strlen ( $firstString );
$secondLen = mb_strlen ( $secondString );
$firstString = mb_convert_encoding ( $firstString, "windows-1251", "utf-8" );
$secondString = mb_convert_encoding ( $secondString, "windows-1251", "utf-8" );
$index = 1;
$b = 0;

if ($firstLen == $secondLen) {
	$len = $firstLen;
} else {
	$len = $firstLen > $secondLen ? $firstLen : $secondLen;
}
for($i = 0; $i < $len; $i ++) {
	if ($firstString [$i] !== $secondString [$i]) {
		echo mb_convert_encoding ( $index + $i . ' ' . $firstString [$i] . ' - ' . $secondString [$i], "utf-8", "windows-1251" );
		echo PHP_EOL;
		$b ++;
	}
}
if ($b == 0) {
	echo 'The same';
}