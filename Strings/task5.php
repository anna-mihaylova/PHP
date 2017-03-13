<?php

require_once 'readline.php';
$firstString = readline ( 'Enter text:' . PHP_EOL );
$secondString = readline ( 'Enter text:' . PHP_EOL );
$firstString = mb_convert_encoding ( $firstString, "windows-1251", "utf-8" );
$secondString = mb_convert_encoding ( $secondString, "windows-1251", "utf-8" );
$firstLen = mb_strlen ( $firstString, "utf-8" );
$secondLen = mb_strlen ( $secondString, "utf-8" );
$a = 0;
$b = 0;
$c = 0;
for($i = 0; $i < $firstLen; $i ++) {
	for($j = 0; $j < $secondLen; $j ++) {
		if ($firstString [$i] == $secondString [$j]) {
			$a = $i;
			$b = $j;
			$c = 1;
			break;
		}
	}
}
if ($c == 0) {
	echo 'Do not have';
} else {
	for($i = 0; $i < strlen ( $firstString ); $i ++) {
		if (mb_convert_encoding ( $i, "windows-1251", "utf-8" ) !== mb_convert_encoding ( $a, "windows-1251", "utf-8" )) {
			for($j = 0; $j < $b; $j ++) {
				echo ' ';
			}
			echo mb_convert_encoding ( $firstString [$i], "utf-8", "windows-1251" ) . PHP_EOL;
		} else {
			for($j = 0; $j < strlen ( $secondString ); $j ++) {
				echo mb_convert_encoding ( $secondString [$j], "utf-8", "windows-1251" );
			}
			echo PHP_EOL;
		}
	}
}