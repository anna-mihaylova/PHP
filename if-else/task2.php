<?php

require_once 'readline.php';

$firstNumberA = ( integer ) readline ( 'Въведете едно цяло число:' . PHP_EOL );
$secondNumberB = ( integer ) readline ( 'Въведете второ цяло число:' . PHP_EOL );

$theSum = $firstNumberA + $secondNumberB;
$theDifference = $firstNumberA - $secondNumberB;
$theProduct = $firstNumberA * $secondNumberB;
$theQuotient = $firstNumberA / $secondNumberB;
$theRemainderOfDivision = $firstNumberA % $secondNumberB;

echo "The numbers are $firstNumberA and $secondNumberB the sum is: $theSum" . PHP_EOL . 
     "The difference of numbers $firstNumberA and $secondNumberB is: $theDifference" . PHP_EOL . 
     "The product of numbers $firstNumberA and $secondNumberB is: $theProduct" . PHP_EOL . 
     "The rest of the division of numbers $firstNumberA and $secondNumberB is: $theProduct" . PHP_EOL . 
     "The result of integer division of numbers $firstNumberA and $secondNumberB is: $theProduct" . PHP_EOL;

