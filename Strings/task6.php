<?php

require_once 'readline.php';
$string = readline('Enter text:' . PHP_EOL);
$string = mb_convert_case($string, MB_CASE_TITLE);
echo $string;
