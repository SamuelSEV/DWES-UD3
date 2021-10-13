<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17</title>
</head>
<body>
    <?php
        $nombre = "";
        $apellidos = "";
        $direccion = "";
        $estudios = "";
        $instituto = "";
        $texto = "";
        $red = "";
        $dia = "";
        $nVacio = "";
        $aVacio = "";
        $dVacio = "";
        $iVacio = "";
        $eVacio = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST["nombre"];
            $apellidos = $_POST["apellidos"];
            $direccion = $_POST["direccion"];
            $estudios = $_POST["instituto"];
            $dia = $_POST["dia"];
            $red = $_POST["red"];
            $checkbox = $_POST["checkbox"];

            if ($red = "") {
                $rVacio = "No ha seleccionado ninguno";
            }

            if(isset($_POST["checbox"])){
                foreach($_POST["checkbox"] as $valorCheckbox){
                    echo " ".$valorCheckbox;
                }
            }
            else {
                echo "Ninguno de los checkbox ha sido activado.";
            }

            if(isset($_POST["dia"])){
                foreach($_POST["dia"] as $valorSelectMultiple){
                    echo " ".$valorSelectMultiple;
                }
            }
            else {
                echo "Ninguna de las opciones de la lista han sido seleccionadas.";
            }



            if (!preg_match("/^IES/", $instituto)) {
                $errorinstituto = "El instituto debe comenzar por IES";
            }
            if (empty($nombre)) {
                $nVacio = "El nombre debe estar relleno <br>";
            }
            if (empty($apellido)) {
                $aVacio = "El apellido debe estar relleno <br>";
            }
            if (empty($direccion)) {
                $dVacio = "LA direccion debe estar rellena <br>";
            }
            if (empty($instituto)) {
                $iVacio = "El instituto debe estar relleno <br>";
            }
            if (empty($estudios)) {
                $eVacio = "Los estudios deben estar rellenos <br>";
            }

        }

    ?>
    <fieldset>
        <legend>Formulario de opciones</legend>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
            <p>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" value="">
                <span style="color:red"><?php echo $nVacio?> </span>
            </p>
            <p>
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" value="">
                <span style="color:red"><?php echo $aVacio?> </span>
            </p>
            <p>
                <label for="direccion">Direccion</label>
                <input type="text" name="direccion" value="">
                <span style="color:red"><?php echo $dVacio?> </span>
            </p>
            <p>
                <label for="red">Wifi</label>    
                <input type="radio" name="red" checked>
                <label for="red">Cable</label>    
                <input type="radio" name="red" checked>
                <label for="red">Fibra</label>    
                <input type="radio" name="red" checked>
            </p>
            <p>
                <label for="instituto">Instituto</label>
                <input type="text" name="instituto" value="">
                <span style="color:red"><?php echo $iVacio?> </span>
            </p>
            <p>
                <label for="estudios">Estudios elegidos</label>
                <input type="text" name="estudios" value="">
                <span style="color:red"><?php echo $eVacio?> </span>
            </p>
            <p>
            <select name="dia[]" multiple>
                <option value="lunes">Lunes</option>
                <option value="martes" selected>Martes</option>
                <option value="miercoles">Miercoles</option>
                <option value="jueves">Jueves</option>
                <option value="viernes">Viernes</option>
            </select>
            </p>
            <p>
                <input type="checkbox" name="checkbox[]" value="historia">
                <label for="historia">Historia</label>
                <input type="checkbox" name="checkbox[]" value="geografia">
                <label for="geografia">Geografia</label>
                <input type="checkbox" name="checkbox[]" value="lengua">
                <label for="lengua">Lengua</label>
                <input type="checkbox" name="checkbox[]" value="matematicas">
                <label for="matematicas">Matematicas</label>
            </p>
            <p>
                <textarea name="texto" id="" cols="30" rows="10" placeholder="Inserte texto"></textarea>
            </p>
            <p>
                <input type="submit" value="enviar">
                <input type="reset" value="borrar">
            </p>
        </form>
    </fieldset>
    
    
    <?php
        
    ?>
</body>
</html>