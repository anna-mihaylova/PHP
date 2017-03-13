<?php
require_once 'readline.php';

$n = readline ( 'Enter number:' . PHP_EOL );
$sum = 0;
for($i = 0; $i < $n + 1; $i ++) {
	$sum = $sum + $i;
}
echo "Sum is $sum.";