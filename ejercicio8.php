<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Elevadon a</th>
            <th>Resultado</th>
        </tr>
    <?php
        $n = 2;
        $lim = 6;
        
        for ($i=0; $i <= $lim ; $i++) { 
                   
            echo "<tr>";
                if ($i == 4) {
                    continue;
                }
                else if ($i == 6) {
                    break;
                }
                echo "<td>$i</td>";
                printf("<td>%d</td>", pow($n,$i));
                
            echo "</tr>";
        }            
    ?>
    </table>
    
</body>
</html>