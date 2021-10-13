<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
<?php
    $usuario = "";
    $contrasenya = "";
    $errorUsuario = "";
    $errorPass = "";
    $uVacio = "";
    $cVacia = ""; 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $_POST["usuario"];
        $contrasenya = $_POST["contrasenya"];

        $usuario = strip_tags($usuario);
        $usuario = stripslashes($usuario);
        $usuario = htmlspecialchars($usuario);
            
        if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/", $usuario)) {
            $errorUsuario = "El usuario $usuario no cumple los requisitos, debe tener al menos 8 caracteres con un número y una mayúscula al menos. <br>";
        }
 
        if (!preg_match("/[A-Z][a-z]{15}[0-9]/", $contrasenya)) {
            
            $errorPass = "La contraseña $contrasenya no cumple los requisitos, debe empezar por mayúscula terminar por número y tenga 15 letras minúsculas en medio. <br>";
        
        }

        if (empty($usuario)) {
            $uVacio = "El usuario debe estar relleno <br>";
        }
        if (empty($contrasenya)){
            $cVacia = "La contraseña debe estar rellena <br>";
        }
    }
?>
    <h1>Formulario Actividad Aula</h1>
    <form action=<?php echo htmlentities($_SERVER['PHP_SELF']); ?> method="POST">
        <p>
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" value="<?php echo $usuario?>"/>
            <span style="color:red"><?php echo $errorUsuario, $uVacio?> </span>
        </p>
        <p>
            <label for="contrasenya">Contraseña</label>
            <input type="password" name="contrasenya" value="<?php echo $contrasenya?>"/>
            <span style="color:red"><?php echo $errorPass, $cVacia?></span>
        </p>
        <p>
<input type="submit" name="enviar" value="Aceptar"/>
<input type="reset" name="cancelar" value="Cancelar"/>
  </p>
    </form>
</body>
</html>