<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <?php
        $i=1;
        $nTabla = 32;

        do {
            echo "$nTabla x $i = " . $nTabla*$i."<br/>";
            $i++;
        } while ($i <= 10);
    
    ?>
</body>
</html>