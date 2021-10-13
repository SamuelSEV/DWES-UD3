<?php
    $nombre = strip_tags($nombre);
    $nombre = stripslashes($nombre);
    $nombre = htmlspecialchars($nombre);

    $apellidos = strip_tags($apellidos);
    $apellidos = stripslashes($apellidos);
    $apellidos = htmlspecialchars($apellidos);

    $direccion = strip_tags($direccion);
    $direccion = stripslashes($direccion);
    $direccion = htmlspecialchars($direccion);

    $estudios = strip_tags($estudios);
    $estudios = stripslashes($estudios);
    $estudios = htmlspecialchars($estudios);

    $texto = strip_tags($texto);
    $texto = stripslashes($texto);
    $texto = htmlspecialchars($texto);
?>