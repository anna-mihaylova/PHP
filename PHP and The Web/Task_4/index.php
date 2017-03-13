<?php
include '../action.php';
if (empty($_GET)){
	$number = '';
	$array = [];
	$error = [];
	$result = 0;
}
if($_POST){
	$number = getValue($_POST, 'number');
	$number = validateString($number);
	$array = validateStringToArray($number);
	if (count ( $array ) == 10) {
		for($i = 0; $i < count ( $array ); $i ++) {
			if (! is_numeric ( $array [$i] )) {
				$error ['number'] = 'Is not a number';
			}
		}
	} else {
		$error ['number'] = 'Numbers are not ten';
	}
	if (!$error){
		$a = sort($array);
		$min = $array[0];
		$max = $array[9];
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Task 4</title>
<link rel="stylesheet" type="text/css" href="/Home_Work_PHP/Style/reset.css">
<link rel="stylesheet" type="text/css" href="/Home_Work_PHP/Style/style.css">

</head>
<body>
	<form action="" method="post">
		<div>
			<label for="number">Ten numbers divided with space:</label>
			 <input type="text" name="number"/>
			 <p  class="<?= getClass($error,'number')?>"><?= getErrors($error, 'number')?> </p>
		</div>
		<div>
			<button type="submit">Send Me</button>
		</div>
		<div id="result">
			 <?php if ($_POST && empty($error)) echo "Min element is $min, Max element is $max."; ?>
		</div>
	</form>

</body>
</html>