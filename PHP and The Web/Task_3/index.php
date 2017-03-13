<?php
include '../action.php';
if (empty($_GET)){
	$temreture = '';
	$action = '';
	$error = [];
	$result = 0;
}
if($_POST){
	$temreture = getValue($_POST, 'temreture');
	$action = getValue($_POST, 'action');
	
	if (($temreture === 0) || (!is_numeric($temreture))){
		$error['temreture'] = "$temreture is not a vilid number";
	}
	if (($action == 0) && ((!$action == 1) || (!$action == 2))){
		$error['action'] = "$action is not a vilid action";
	} else {
		function temreture($a, $b) {
			$res = 0;
			if ($a == 1) {
				$res = floor(((5 / 9)*($b - 32))).'C';
			}
			if ($a == 2) {
				$res = floor((($b * 1.8) + 32)).'F';
			}
			return $res;
		}
		$result = temreture($action, $temreture);
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Task 3</title>
<link rel="stylesheet" type="text/css" href="/Home_Work_PHP/Style/reset.css">
<link rel="stylesheet" type="text/css" href="/Home_Work_PHP/Style/style.css">

</head>
<body>
	<form action="" method="post">
		<div>
			<label for="temreture">Temreture:</label>
			 <input type="text" name="temreture"/>
			 <p  class="<?= getClass($error,'temreture')?>"><?= getErrors($error, 'temreture')?> </p>
		</div>
		<div>
			<label for="action">Select C or F:</label>
			<select name="action">
				<option value="1">C</option>
				<option value="2">F</option>
			</select>
		</div>
		<div>
			<button type="submit">Send Me</button>
		</div>
		<div id="result">
			 <?php if ($_POST && empty($error)) echo "Result is $result."; ?>
		</div>
	</form>

</body>
</html>