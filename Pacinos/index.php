<?php
include('funciones/funciones.php');

verificarSesion1();

?>


<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <?php cargarLinks();?>
    
</head>
<body>
    <header>
        <nav class="navbar navbar-dark bg-dark">
          <div class="container">
            <a class="navbar-brand" href="#">Index</a>
          </div>
        </nav>
    </header>
    <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body" id="login">
            <h5 class="card-title text-center">Iniciar Sesión</h5>
            <div class="form-signin">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Usuario" autofocus>
                <label for="inputEmail">Usuario</label>
              </div>
                <label class="lblerror" id="lblError1"></label>
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña">
                <label for="inputPassword">Contraseña</label>
              </div>
                <label class="lblerror" id="lblError2"></label>
              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" onclick="javascript:login()">Sign in</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class='modal'></div>
</body>
</html>
