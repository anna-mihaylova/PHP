<?php

require_once 'readline.php';
$getFirstWord = '';
$getWords = '';
$getSecondWord = '';
do {
	$string = readline ( "Enter as :" );
} while ( $string != 0 );
$length = mb_strlen ( $string );
for($i = 0; $i < $length; $i ++) {
	if ($string [$i] == " ") {
		$getFirstWord = mb_substr ( $string, 0, $i - 5, 'UTF-8' );
		$getC = mb_substr ( $getFirstWord, 0, 1, 'UTF-8' );
		$upercaseC = mb_strtoupper ( mb_substr ( $getFirstWord, 0, 1 ) );
		$firstString = str_replace ( $getC, $upercaseC, $getFirstWord );
		$getSecondWord = mb_substr ( $string, $i - 4, $i - 5 );
		$getQ = mb_substr ( $getSecondWord, 0, 1, 'UTF-8' );
		$upercaseQ = mb_strtoupper ( mb_substr ( $getSecondWord, 0, 1 ) );
		$secondString = str_replace ( $getQ, $upercaseQ, $getSecondWord );
		$getThirthWord = mb_substr ( $string, $i + 2, $length - 1, 'UTF-8' );
		$getZ = mb_substr ( $getThirthWord, 0, 1, 'UTF-8' );
		$upercaseZ = mb_strtoupper ( mb_substr ( $getThirthWord, 0, 1 ) );
		$thirthString = str_replace ( $getZ, $upercaseZ, $getThirthWord );
	}
}
echo "$firstString $secondString $thirthString";