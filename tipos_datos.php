<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            /* 1. String. Serie de caracteres */
            $customer = "Falcao";
            echo "The customer {$customer} bought <br>";

            $favorite_food = "Panzerotti y Pizza";
            echo "a {$favorite_food} <br>";

            /* 2. Integer. Es un numero */
            $price = 5000;
            echo "that cost {$price}";

            // 3. Floating point number - floats - doubles - reals numbers 
            $goal_rate_per_game = 4.5;
            echo "<br> and now he is celebrating his goal rate per futbol game of {$goal_rate_per_game}";

            /* 4. Boolean. Tiene 2 valores (true) o (false) */
            $state = true;
            echo "<br> Is Falcao a champion? That is {$state}";

            /* 5. Aceder Tipos de Datos  */
            $type_data = gettype($price);
            $type_datas = gettype($state);
            $type_datass = gettype($goal_rate_per_game);

            echo "<br> Tipo de dato es: {$type_data}";
            echo "<br> Tipo de dato es: {$type_datas}";
            echo "<br> Tipo de dato es: {$type_datass}"; 
        ?>
    </body>
</html>