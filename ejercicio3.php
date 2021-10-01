<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
        $n = 10;

        switch ($n) {
            case 1:
                echo "LUNES";
                break;
            case 2:
                echo "MARTES";
                break;

            case 3:
                echo "MIERCOLES";
                break;
            case 4:
                echo "JUEVES";
                break;
            case 5:
                echo "VIERNES";
                break;
            case 6:
                echo "SABADO";
                break;
            case 7:
                echo "DOMINGO";
                break;
            default:
                echo "No hay dia de la semana que se corresponda conn $n";
                break;
        }
    ?>

</body>
</html>