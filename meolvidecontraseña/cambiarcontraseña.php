<?php 
//chequear que el codigo ingresado sea igual al generado. si no es asi, hay que dar intentos disponibles. como en el register.
//si es igual,hay que setear las varibles de sesion de usuario en el nombre de usuario.

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizala!</title>
    <link rel="stylesheet" href="../css/style.css">
    <?php include("../css/colorespersonalizados.php"); ?>
    <link rel="shortcut icon" href="../imagenes/JL.svg" type="image/x-icon">

    <script src="../LIBRERIAS/sweetalert/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="../LIBRERIAS/sweetalert/sweetalert2.css">
    
</head>
<body>
    <form class="formularios" method="post">
    <img src="../imagenes/JL.svg" class="logoenformulario">
        <h2>Bienvenido, <?php echo $usuario ?> </h2>
        <label for="contraseña">Ingrese una nueva contraseña:</label>
        <input id="contraseña" type="password" name="pass1">

        <label for="contraseña2">Repita la nueva contraseña:</label>
        <input id="contraseña2" type="password" name="pass2">

        <input type="submit" value="Actualizar">
    </form>
    <a href="../index.php" id="reg">regresar</a>
</body>
</html>