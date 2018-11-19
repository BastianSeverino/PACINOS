<?php
include("conexion.php");
$con = conectar();
session_start();

if (isset($_POST["funcion"])){
    $funcion = $_POST["funcion"];
    switch($funcion){
        case 1:
            verificarInicio();
        break;
    }
}
else
{
    
}


/*
Bastián Severino
25/10/2018
Funcion: verificar si sesón está iniciada -> redirecciona al inicio.
*/
function verificarSesion1(){
    if(isset($_SESSION["usuario"])){
        echo header("Location: views/inicio.php");
    }
    else{
        
    }
}


/*
Bastián Severino
25/10/2018
Funcion: verificar si sesón no está creada -> redirecciona al index (LOGIN)
*/
function verificarSesion2(){
    if(isset($_SESSION["usuario"])){
        
    }
    else{
        echo header("Location: ../index.php");
    }
}


/*
Bastián Severino
25/10/2018
Funcion: cargar frameworks, librerias y estilos al index.
*/
function cargarLinks(){
    echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="scripts/scripts.js"></script>
    <link rel="stylesheet" href="css/style.css">';
}


/*
Bastián Severino
25/10/2018
Funcion: cargar frameworks, librerias y estilos a todas las páginas (exceptuando index.php).
*/
function cargarLinks2(){
    echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../scripts/scripts.js"></script>
    <link rel="stylesheet" href="../css/style.css">';
}



/*
Bastián Severino
25/10/2018
Funcion: verificar datos de inicio de sesión y dar o denegar acceso al sistema.
*/
function verificarInicio(){
    $con = conectar();
    $user     = $_POST["user"];
    $password = $_POST["pass"];
    $sql = "SELECT * FROM `adm.usuarios` WHERE `user_NAME` = '$user'";
    $result = $con->query($sql);
    
    if($result->num_rows > 0)
    {
        while($resultado = mysqli_fetch_array($result)){
            if(md5($password)===$resultado["user_PASSWORD"]){
                $usuario = array($resultado["id"], $resultado["user_NAME"],$resultado["user_PASSWORD"]);
                $_SESSION["usuario"] = $usuario;
                sleep(1);
                echo 1;
                break;
            }
            else
            {
                sleep(1);
                echo 2;
            }
        }
    }
    else
    {
        sleep(1);
        echo 3;
    }
    
    
}

/*



$consulta = "SELECT * FROM `adm.usuarios`";
$result = $con->query($consulta);

   while ($comon = mysqli_fetch_array($result)){
    echo 'Hola don: '.$comon["user_NAME"];
    }



*/


?>
