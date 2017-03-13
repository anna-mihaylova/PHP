<?php

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Task 5</title>
        <link rel="stylesheet" type="text/css" href="/Home_Work_PHP/Style/reset.css">
        <link rel="stylesheet" type="text/css" href="/Home_Work_PHP/Style/style.css">
    </head>
    <body>
    <div>
        <form action="index.php?&getParameter1=1&getParameter2=2" method="post">
            <div>
                <label for="firstname">First name:</label>
                <input type="text" id="firstname" name="firstname">
            </div>
            <div>
                <label for="surname">Surname:</label>
                <input type="text" id="surname" name="surname">
            </div>
            <div>
                <label for="years">Years:</label>
                <input type="number" id="years" name="years">
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
			<div id="result">
			 <?php foreach($_REQUEST as $k => $v) {
  					echo 'Parameter: '.$k.'. Type of parameter: '.gettype($v).' '.'Value: '.$v;
   					echo '<br>';
			 		}
			?>
		</div>
        </form>
    </div>
    </body>
</html>
