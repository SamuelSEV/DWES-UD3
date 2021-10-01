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
        $v1 = 10;
        $v2=2;
        $v3 = 3;

        if ($v1 > $v2 && $v1 > $v3) {
            echo $v1;
        }
        else if ( $v2 < $v1 && $v2 > $v3) {
            echo $v2;
        }
        else {
            echo $v3;
        }
    ?>
</body>
</html>