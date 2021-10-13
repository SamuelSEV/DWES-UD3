<?php
    $usuario = $_POST["usuario"];
    $contrasenya = $_POST["contrasenya"];
    $usuario = strip_tags($usuario);
    $usuario = stripslashes($usuario);
    $usuario = htmlspecialchars($usuario);
    
    if (preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/", $usuario)) {
        echo "El usuario $usuario tiene la contraseña $contrasenya";
    }
    else {
        echo "El campo usuario tenga que tener al menos 8 caracteres con un número y una mayúscula al menos.
        ";
    }
    if (preg_match("/[A-Z][a-z]{15}[0-9]/", $contrasenya)) {
        echo "El usuario $usuario tiene la contraseña $contrasenya";
    }
    else {
        echo "El campo contraseña empiece por mayúscula termine por número y tenga 15 letras minúsculas en medio.";
    }
    if (empty($usuario)) {
        echo "El usuario debe estar relleno <br>";
    }
    if (empty($contrasenya)){
        echo "La contraseña debe estar rellena <br>";
    }
    
?>