<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
</head>
<link rel="stylesheet" href="style.css">
<script src="script.js"> </script>
<body>

    <form method="POST" action="MENU.php">
        <div class="contenedor">

            <div class="subcontenedor">
            <input type="text" name="usuario" placeholder="usuario"></input>
            </div>
            <div class="subcontenedor">
            <input type="password" name="contraseña" id="contraseña" placeholder="contraseña"><img id='ver' src="imagenes/ojocerrado.png">
            </div>
            <?php
            if (isset($_GET['error'])) {
                echo "<h9> contraseña o usuario incorrectos </h9>";
            }
            ?>
            <div class="subcontenedor">
            <a href="meolvide.php">¿Has olvidado tu contraseña?</a>
            <br>
            <input type="checkbox"><span>recordarme</span></input>
            </div>
            <input type="submit" value="Iniciar Sesión"></input>
            <a href="registro.php">registrar usuario</a>

        </div>
    </form>
</body>

</html>