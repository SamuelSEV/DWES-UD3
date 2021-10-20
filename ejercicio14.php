<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
</head>

<body>
    <?php
        $Meses = [];
        $Meses[] = "Enero";
        $Meses[] = "Febrero";
        $Meses[] = "Marzo";

        var_dump($Meses);
        echo "<br>";
        echo "El array contiene: ".count($Meses);
        echo "<br>";

        $Meses[] = 7;
        $Meses[] = "Abril";
        $Meses[] = true;
        $Meses[] = "Junio";

        var_dump($Meses);
        echo "<br>";
        echo "El array contiene: ". count($Meses);
        echo "<br>";

        unset($Meses[3]);

        var_dump($Meses);
        echo "<br>";

        $Meses[5] = "Mayo";
        $Meses[] = "Julio";
        $Meses[] = "Agosto";
        $Meses[] = "Septiembre";
        $Meses[] = "Octubre";
        $Meses[] = "Novimebre";
        $Meses[] = "Diciembre";

        var_dump($Meses);
        echo "<br>";
    ?>
</body>
</html>