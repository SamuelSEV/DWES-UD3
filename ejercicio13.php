<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>
<body>
    <?php
        $sueldo = 40000;
        $años = 3;
        $aumento = 0;
        if ($años > 10) {
            $aumento = ($sueldo * 10)/100;
            $sueldo = $sueldo + $aumento;
            echo "Trabajador lleva $años años, por lo tanto tiene un aumento de un 10% ($aumento), sumando $sueldo";
            $sueldo = 40000;
        }
        else if (($años <= 10) && ($años > 5)){
            $aumento = ($sueldo * 7)/100;
            $sueldo = $sueldo + $aumento;
            echo "Trabajador lleva $años años, por lo tanto tiene un aumento de un 7% ($aumento), sumando $sueldo";
            $sueldo = 40000;
        }
        else if (($años <= 5) && ($años > 3)){
            $aumento = ($sueldo * 5)/100;
            $sueldo = $sueldo + $aumento;
            echo "Trabajador lleva $años años, por lo tanto tiene un aumento de un 5% ($aumento), sumando $sueldo";
            $sueldo = 40000;
        }
        else if ($años <= 3){
            $aumento = ($sueldo * 3)/100;
            $sueldo = $sueldo + $aumento;
            echo "Trabajador lleva $años años, por lo tanto tiene un aumento de un 3% ($aumento), sumando $sueldo";
            $sueldo = 40000;
        }
    ?>
</body>
</html>