<?php
include '../action.php';
if (empty($_GET)){
	$firstNumber = 0;
	$secondNumber = 0;
	$error = [];
}
if($_POST){
	$firstNumber = getValue($_POST, 'firstNumber');
	$secondNumber = getValue($_POST, 'secondNumber');
	$action = getValue($_POST,'action');
	if ($firstNumber == 0){
		$error['firstNumber']= "Number $firstNumber is not a vilid number";
	}
	if ($secondNumber == 0){
		$error['secondNumber'] = "Number $secondNumber is not a vilid number";
	}
	if(!$error){
		$firstNumber = validateIntData($firstNumber);
		$secondNumber = validateIntData($secondNumber);
		$action = validationAction($action, 0, 5);
		$result = action($firstNumber, $secondNumber, $action);
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Task 1</title>
<link rel="stylesheet" type="text/css" href="/Home_Work_PHP/Style/reset.css">
<link rel="stylesheet" type="text/css" href="/Home_Work_PHP/Style/style.css">
</head>
<body>
	<form action="" method="post">
		<div>
			<label for="FirstNumber">First Number</label>
			<input type="text" name="firstNumber" value="<?= $firstNumber?>" />
			<p  class="<?= getClass($error,'firstNumber')?>"><?= getErrors($error, 'firstNumber')?> </p>
		</div>
		<div>
			<label for="SecondNumber">Second Number</label>
			<input type="text" name="secondNumber" value="<?= $secondNumber?>" />
			<p class="<?= getClass($error, 'secondNumber')?>"><?= getErrors($error, 'secondNumber')?></p>
		</div>
		<div>
			<label for="action">Select action:</label>
			<select name="action" >
				<option value="1">+</option>
				<option value="2">-</option>
				<option value="3">*</option>
				<option value="4">/</option>
			</select>
		</div>
		<div>
			<button type="submit">Send Me</button>
		</div>
		<div id="result">
			 <?php if ($_POST && empty($error)) echo "Result is $result. First number is $firstNumber. Second number is $secondNumber."; ?>
		</div>
	</form>
	
</body>

</html>
