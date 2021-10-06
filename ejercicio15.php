<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15</title>
</head>

<body>
    <table border="1">
        <?php
            $matriz = [];
            $matriz[] = array("Nombre" => "Grafica", "precio" => 1500, "stock" => 25, "identificador" => "2568");
            $matriz[] = array("Nombre" => "Procesador Intel i9", "precio" => 19000, "stock" => 16, "identificador" => "5689");
            $matriz[] = array("Nombre" => "Memoria Ram GSKILL 16GB", "precio" => 100, "stock" => 268, "identificador" => "8954");

            var_dump($matriz);
            echo "<br>";
            echo "<tr><th>Nombre</th> <th>precio</th> <th>stock</th> <th>identificador</th></tr>";
            foreach ($matriz as $key => $value) {
                echo "<tr>";
                echo "<td>$matriz[$key]['Nombre']</td>";  
                echo "<td>$matriz[$key]['precio']</td>";
                echo "<td>$matriz[$key]['stock']</td>";
                echo "<td>$matriz[$key]['identificador']</td>";
                echo "</tr>";
            }

        ?>
    </table>
</body>

</html>