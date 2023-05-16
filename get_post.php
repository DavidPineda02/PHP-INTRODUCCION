<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form</title>
    </head>
    <body>
        <form action="get_post.php" method="post">
            <label for="">User</label>
            <input type="text" name="user" placeholder="Usuario">
            <label for="">Password</label>
            <input type="password" name="password" placeholder="Contraseña">
            <input type="submit" value="Enviar">
        </form>
        <style>

        </style>
    </body>
</html>

<?php
    if($_POST){
        echo "{$_POST["user"]} <br>";
        echo "{$_POST["password"]} <br>";
    }
?>