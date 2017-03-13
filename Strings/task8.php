<?php

require_once 'readline.php';
$string = readline('Enter text:' . PHP_EOL);
$string = mb_convert_encoding($string, "windows-1251", "utf-8");
function isPalindrome($str) {
	$revString = strrev($str);
	return strcmp($str, $revString);
}
if (isPalindrome($string) == 0) {
	echo mb_convert_encoding($string, "utf-8", "windows-1251") . 'is palindrom.';
} else {
	echo mb_convert_encoding($string, "utf-8", "windows-1251") . 'is not a palindrome.';
}

