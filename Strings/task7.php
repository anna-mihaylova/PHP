<?php

require_once 'readline.php';
$string = readline ('Enter text:' . PHP_EOL);
$string = mb_convert_encoding($string, "windows-1251", "utf-8");
$words = str_word_count($string, 2);
$num = count($words);
function maxLength($arr) {
	$max = 0;
	foreach ($arr as $key => $value) {
		$long = strlen($value);
		if ($max < $long) {
			$max = $long;
		}
	}
	return $max;
}
$maxLengthWord = maxLength($words);
echo $num, ' words. The longest is with ', $maxLengthWord, 
			'symbols.';
