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
        $rVacio = "";
        $diaVacio = "";
        $checkVacio = "";
        $errorinstituto = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            include 'funcionseguro.php';
            $nombre = $_POST["nombre"];
            $apellidos = $_POST["apellidos"];
            $direccion = $_POST["direccion"];
            $estudios = $_POST["estudios"];
            $instituto = $_POST["instituto"];
            $dia = $_POST["dia"];
            $red = $_POST["red"];
            $checkbox = $_POST["checkbox"];
            $texto = $_POST["texto"];

            if (!isset($_POST["red"])) {
                //echo $red;
                $rVacio = "No ha seleccionado ninguno";
            }

            if(!isset($_POST["checkbox"])){
                $checkVacio = "Ninguno de los checkbox ha sido activado.";
                //foreach($_POST["checkbox"] as $valorCheckbox){
                    //echo " ".$valorCheckbox;
                //}
            }

            if(!isset($_POST["dia"])){
                $diaVacio = "Ninguna de las opciones de la lista han sido seleccionadas.";
                //foreach($_POST["dia"] as $valorSelectMultiple){
                    //echo " ".$valorSelectMultiple;
                //}
            }

            if (!preg_match("/^IES/", $instituto)) {
                $errorinstituto = "El instituto debe comenzar por IES";
            }
            if (empty($nombre)) {
                $nVacio = "El nombre debe estar relleno <br>";
            }
            if (empty($apellidos)) {
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
                <input type="text" name="nombre" value="<?php echo $nombre?>">
                <span style="color:red"><?php echo $nVacio?> </span>
            </p>
            <p>
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" value="<?php echo $apellidos?>">
                <span style="color:red"><?php echo $aVacio?> </span>
            </p>
            <p>
                <label for="direccion">Direccion</label>
                <input type="text" name="direccion" value="<?php echo $direccion?>">
                <span style="color:red"><?php echo $dVacio?> </span>
            </p>
            <p>
                <label for="red">Wifi</label>    
                <input type="radio" name="red" value="wifi" >
                <label for="red">Cable</label>    
                <input type="radio" name="red" value="cable">
                <label for="red">Fibra</label>    
                <input type="radio" name="red" value="fibra">
                <span style="color:red"><?php echo $rVacio?> </span>
            </p>
            

            <p>
                <label for="instituto">Instituto</label>
                <input type="text" name="instituto" value="<?php echo $instituto?>">
                <span style="color:red"><?php echo $iVacio, $errorinstituto?> </span>
            </p>
            <p>
                <label for="estudios">Estudios elegidos</label>
                <input type="text" name="estudios" value="<?php echo $estudios?>">
                <span style="color:red"><?php echo $eVacio?> </span>
            </p>
            <p>
            <select name="dia[]" multiple>
                <option value="lunes">Lunes</option>
                <option value="martes" selected>Martes</option>
                <option value="miercoles">Miercoles</option>
                <option value="jueves">Jueves</option>
                <option value="viernes">Viernes</option>
                <span style="color:red"><?php echo $diaVacio?> </span>
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
                <span style="color:red"><?php echo $checkVacio?> </span>
            </p>
            
            <p>
                <textarea name="texto" id="" cols="30" rows="10" placeholder="Inserte texto" value="<?php echo $texto?>"></textarea>
            </p>
            <p>
                <input type="submit" value="enviar">
                <input type="reset" >
            </p>
        </form>
    </fieldset>
</body>
</html>