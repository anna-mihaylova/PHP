<?php

require_once 'readline.php';

$text = readline('Enter text:' . PHP_EOL);
$text = mb_convert_encoding($text, "windows-1251", "utf-8");

function plusFive($str) {
	$newArray = [];
	for($i = 0; $i < strlen($str); $i ++) {
		$newArray[$i] = (ord($str [$i]) + 5);
	}
	for($i = 0; $i < strlen($str); $i ++) {
		$newArray [$i] = chr($newArray[$i]);
	}
	$str = implode( '', $newArray );
	return $str;
}
echo mb_convert_encoding(plusFive($text), "utf-8", "windows-1251" );