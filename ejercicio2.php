<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejecicio 2</title>
</head>
<body>
    <?php
        $v1 = 50;
        $v2=20;
        $v3 = 11;

        if ($v1 > $v2 && $v1 > $v3) {
            echo "La variable mayor es: " . $v1;;
        }
        else if ( $v2 > $v1 && $v2 > $v3) {
            echo "La variable mayor es: " . $v2;;
        }
        else if  ( $v3 > $v1 && $v3 > $v2){
            echo "La variable mayor es: " . $v3;
        }
    ?>
</body>
</html>