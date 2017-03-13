<?php

function getValue($array, $key, $default = 0) {
	return isset($array[$key]) ? $array[$key] : $default;
}
function getStringValue($array, $key, $default = "") {
	return isset($array[$key]) ? $array[$key] : $default;
}
function validateIntData($a){
	return (int)trim($a);
}

function validationAction($a, $start, $end){
	if($a > $start && $a < $end){
		return $a;
	}
	return $a = null;
}

function action($a, $b, $action){
	switch ($action){
		case 1:
			$result = $a + $b;
			break;
		case 2:
			$result = $a - $b;
			break;
		case 3:
			$result = $a * $b;
			break;
		case 4:
			$result = $a / $b;
			break;
		default:
			$result = 'Problem';
		}
		return $result;
	}
	
function getClass($array, $key, $class = 'error') {
	return empty($array[$key]) ? '' : $class;
}
	
function getErrors($array, $key){
    if (key_exists($key, $array)){
    	echo $array[$key];
    }
}


function validationUsername($a){
	$a = trim($a);
	return preg_match('/[^a-z�-�]/',$a);
}

function validationPassword($a){
	return preg_match("#[0-9]+#",$a);
}
function matchPassword($a, $b){
	if ($a === $b){
		return 1;
	} else {
	return 0;
	}
}

function validateString($a){
	return trim($a);
}
function validateStringToArray($a){
	$array = [];
	$array = explode(' ', $a);
		return $array;
}
function isNumeric($name){
	$name = (int)$name;
	if (is_numeric($name)){
		return true;
	}
	return false;
}
function isValidName($name) {
	$name = trim($name);
	if($name == ''){
		return false;
	} 
	return true;
}

function isValidDate($dateString) {
	if ($dateString == 0) {
		return false;
	}
	return true;
}
