<?php

$startTime = date ( '14:30:00' );

$trainSpeed = 60;

$distance = 110;

define ( "ONE_HOUR_IN_SECOND", 3600 );
$travelTime = ($distance / $trainSpeed) * ONE_HOUR_IN_SECOND;
$arriveTime = mktime ( 14, 30, 0, date ( 'n' ), date ( 'j' ), date ( 'Y' ) ) + $travelTime;
echo date ( 'H:i', $arriveTime );


