<?php

require_once 'readline.php';
$string1 = readline ( 'Enter text:' . PHP_EOL );
$string2 = readline ( 'Enter text:' . PHP_EOL );
function convertCaseToLower($str) {
	return $str = mb_convert_case ( $str, MB_CASE_LOWER );
}
function convertCaseToUpper($str) {
	return $str = mb_convert_case ( $str, MB_CASE_UPPER );
}
echo convertCaseToLower ( $string1 ), ', ', convertCaseToUpper ( $string1 ), PHP_EOL, convertCaseToLower ( $string2 ), ', ', convertCaseToUpper ( $string2 );
