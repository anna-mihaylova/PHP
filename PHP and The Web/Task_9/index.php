<?php
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Task 9</title>
        <link rel="stylesheet" type="text/css" href="/Home_Work_PHP/Style/reset.css">
        <link rel="stylesheet" type="text/css" href="/Home_Work_PHP/Style/style.css"> 
    </head>
    <body>
        <div>
            <form action="second.php" method="post">
                <div>
                    <label for="firstname">First name:</label>
                    <input type="text" id="firstname" name="firstname">
                </div>
                <div>
                    <label for="surname">Surname:</label>
                    <input type="text" id="surname" name="surname">
                </div>
                <div>
                    <label for="city">City:</label>
                    <input type="text" id="city" name="city">
                </div>
               <div>
                    <label for="adress">Adress:</label>
                    <input type="text" id="adress" name="adress">
                </div>
                <div>
                    <label for="company">Company:</label>
                    <input type="text" id="company" name="company">
                </div>
                <div>
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </body>
</html>