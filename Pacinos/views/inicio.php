<?php
include('../funciones/funciones.php');

verificarSesion2();

?>


<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <?php cargarLinks2();?>
</head>
<body>
    <header>
        <nav class="navbar navbar-dark bg-dark">
          <div class="container">
            <a class="navbar-brand" href="#">Wena m3n</a>
          </div>
        </nav>
    </header>
    <p><?php echo "Wena compare ".$_SESSION["usuario"][1];?></p>
    <p><?php echo "Tu id es: ".$_SESSION["usuario"][0];?></p>
    <p><?php echo "Y tu contraseña es: ".$_SESSION["usuario"][2];?></p>
    <a href="../funciones/sdestroy.php">Cerrar Sesión</a>
</body>
</html>