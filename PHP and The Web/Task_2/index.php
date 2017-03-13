<?php
include '../action.php';
if (empty($_GET)){
	$username = '';
	$password = '';
	$repeatPassword = '';
	$error = [];
	$crypted = '';
}
if($_POST){
	$username = getValue($_POST, 'username');
	$password = getValue($_POST, 'password');
	$repeatPassword = getValue($_POST, 'repeatPassword');
	
//	if (($username == 0) || (!validationUsername($username))){
//		$error['username'] = "Not a valid username";
//	}
	if (($password == 0) || (!validationPassword($password))){
		$error['password'] = "Not a valid password";
	}
	if (($repeatPassword == 0) || (!validationPassword($repeatPassword))){
		$error['repeatPassword'] = "Not a valid password";
	}
	if(!$error){
		if (matchPassword($password, $repeatPassword)){
		$crypted = password_hash($password, PASSWORD_DEFAULT);
		} else {
			$crypted = "Passwords were not match!";
		}
	}
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Task 2</title>
<link rel="stylesheet" type="text/css" href="/Home_Work_PHP/Style/reset.css">
<link rel="stylesheet" type="text/css" href="/Home_Work_PHP/Style/style.css">
</head>
<body>
		<form action=" " method="post">
		<div>
			<label for="username">Username:</label>
			<input type="text" name="username" value="<?= $username?>" />
			<p class="<?= getClass($error, 'username')?>"><?= getErrors($error, 'username')?></p>
		</div>
		<div>
			<label for="password">Password:</label>
			<input type="password" name="password" value="<?= $password?>" />
			<p class="<?= getClass($error, 'password')?>"><?= getErrors($error, 'password')?></p>
		</div>
		<div>
			<label for="repeatPassword">Repeat Password:</label>
			<input type="password" name="repeatPassword" value="<?= $repeatPassword?>" />
			<p class="<?= getClass($error, 'repeatPassword')?>"><?= getErrors($error, 'repeatPassword')?></p>
		</div>
		<div>
			<button type="submit">Send Me</button>
		</div>
		<div id="resultTask2">
			 <?php if ($_POST && empty($error)) echo "Username is $username. Password is $password. $crypted";?>
		</div>
	</form>

</body>
</html>