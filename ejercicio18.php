<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 18</title>
</head>
<body>
    <?php
        $poblacion = "";
        $cp = "";
        $provincia = "";
        $texto = "";
        $provinciaVacio = "";
        $errorPoblacion = "";
        $errorCp = "";
        $poblacionVacio = "";
        $cpVacio = "";
        $imagen;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $poblacion = $_POST["poblacion"];
            $cp = $_POST["cp"];
            $provincia = $_POST["provincia"];
            $texto = $_POST["texto"];
            $imagen = $_POST["imagen"];
            $texto = strip_tags($texto);
            $texto = stripslashes($texto);
            $texto = htmlspecialchars($texto);

            if (!isset($_POST["provincia"])) {
                
                $provinciaVacio = "No ha seleccionado ninguno";
            }

            if (empty($poblacion)) {
                $poblacionVacio = "La poblacion debe estar relleno <br>";
            }
            if (empty($cp)) {
                $cpVacio = "El codigo postal debe estar relleno <br>";
            }

            if (!preg_match("/^[a-zA-Z\s]+$/", $poblacion)) {
                $errorPoblacion = "Debe contener solo texto";
            }
            if (!preg_match("/^[0-9]+$/", $cp)) {
                $errorCp = "Debe contener solo numeros";
            }
        }
    ?>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <p>
            <label for="poblacion">Poblacion</label>
            <input type="text" name="poblacion" value="<?php echo $poblacion?>">
            <span style="color:red"><?php echo $poblacionVacio, $errorPoblacion?> </span>
        </p>
        <p>
            <label for="cp">Codigo postal</label>
            <input type="text" name="cp" value="<?php echo $cp?>">
            <span style="color:red"><?php echo $cpVacio, $errorCp?> </span>
        </p>
        <p>
            <label for="provincia">Sevilla</label>    
            <input type="radio" name="provincia" value="provincia" >
            <label for="provincia">Huelva</label>    
            <input type="radio" name="provincia" value="provincia">
            <label for="provincia">Cadiz</label>    
            <input type="radio" name="provincia" value="provincia">
            <label for="provincia">Malaga</label>    
            <input type="radio" name="provincia" value="provincia" >
            <label for="provincia">Cordoba</label>    
            <input type="radio" name="provincia" value="provincia">
            <label for="provincia">Jaen</label>    
            <input type="radio" name="provincia" value="provincia">
            <label for="provincia">Almeria</label>    
            <input type="radio" name="provincia" value="provincia">
            <label for="provincia">Granada</label>    
            <input type="radio" name="provincia" value="provincia">
            <span style="color:red"><?php echo $provinciaVacio?> </span>
        </p>
        <p>
        <textarea name="texto" id="" cols="30" rows="10" placeholder="Inserte texto" value="<?php echo $texto?>"></textarea>
        </p>
        <p>
            <input type="image" src="" alt="" name="imagen">
        </p>
        <p>
            <input type="submit" value="enviar">
            <input type="reset" >
        </p>
    </form>
</body>
</html>