<?php
$startHours = 4;
$startMinutes = 30;
$speed = 60;
$distance = 110;

$timeInMinutes = $distance / ($speed / 60);

$endTimeInMinutes = ($startHours * 60) + $startMinutes + $timeInMinutes;

$endHours = intval ( $endTimeInMinutes / 60 );
$endMinutes = $endTimeInMinutes % 60;

if ($endHours < 10) {
	$endHours = '0' . $endHours;
}

if ($endMinutes < 10) {
	$endMinutes = '0' . $endMinutes;
}

echo "$endHours:$endMinutes";
