<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <?php
        foreach ($_SERVER as $vServidor) {
            echo $vServidor . "<br>";
        }

        foreach ($_SERVER as $clave => $valor) {
            echo $clave . " ---> " . $valor . "<br>" ;
        }
    ?>
</body>
</html>