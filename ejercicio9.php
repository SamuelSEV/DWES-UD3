<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <?php
        $fNaci = "28-03-1956";
        $añoActual = date("Y-m-d");
        $edad = date_diff(date_create($fNaci), date_create($año_actual));
        
        if (($edad->y) >= 18 && ($edad->y < 65)){
            echo "Puedes pasar";
        }
        elseif (($edad->y) < 18) {
            echo "No puedes pasar";
        }
        else if (($edad->y) >= 65) {
            echo "Demasiado mayor para entrar";
        }
    ?>
</body>
</html>