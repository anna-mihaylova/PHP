<?php
include '../action.php';
$firstName = getStringValue($_POST, 'firstName');
$surname = getStringValue($_POST, 'surname');
$birthdate = getValue($_POST, 'birthdate');
$error = [];
function validateForm(&$error, $firstName, $surname, $birthdate) {
	if (!isValidName($firstName)){
		$error['firstName'] = 'Enter first name';
	} 
	if (!isValidName($surname)){
		$error['surname'] = 'Enter surname';
	} 
	if (!isValidDate($birthdate)){
		$error['birthdate'] = 'Enter birthday';
	}
	return empty($error) ? true : false;
}
$result = false;
if ($_POST) {
	$result = validateForm($error, $firstName, $surname, $birthdate);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Task 6</title>
        <link rel="stylesheet" type="text/css" href="/Home_Work_PHP/Style/reset.css">
        <link rel="stylesheet" type="text/css" href="/Home_Work_PHP/Style/style.css">
    </head>
    <body>
    <div>
        <form action="index.php" method="post">
            <div>
                <label for="firstName">First name:</label>
                <input type="text" id="firstName" name="firstName" value="<?= htmlentities($firstName) ?>">
               <p class="<?= getClass($errors, 'firstName') ?>"> <?= getErrors($error, 'firstName')?> </p>
            </div>
            <div>
                <label for="surname">Surname:</label>
                <input type="text" id="surname" name="surname" value="<?= htmlentities($surname) ?>"> 
               <p  class="<?= getClass($errors, 'surname') ?>"> <?= getErrors($error, 'surname')?> </p>
            </div>
            <div>
                <label for="birthdate">Date of Birth:</label>
                <input type="date" id="birthdate" name="birthdate"  value="<?= htmlentities($birthdate) ?>">
                <p class="<?= getClass($errors, 'birthdate') ?>"> <?= getErrors($error, 'birthdate')?> </p>
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
            <?= ($_POST && $result) ? "<p>Registration successful.</p>" : '' ?>
        </form>
    </div>
    </body>
</html>
