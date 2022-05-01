<?php
  session_start();   // Necesitamos una sesion
  if(isset($SESSION['u_usuario'])){  // comparamos si existe
    header("Location: validacion.php"); // si existe, lo redireccionamos a sesion.php
  }
  else{
    session_destroy();  // si no existe, destruimos sesion
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Favicon - FIS -->
  <link rel="shortcut icon" href="imagenes/Logo-fis.png">

  <link rel="stylesheet" href="css/login.css">

  <title>CESC</title>

</head>
<body background="imagenes/juzgados.jpeg">

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="javascript:void(0)">   </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!--NAVBAR-->
      <div class="collapse navbar-collapse" id="navb">
        <ul class="navbar-nav mr-auto">
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <a class="btn btn-primary" href="./login/login.php" role="button">Ingresar</a>
        </form>
      </div>
  </nav>

    <div class= "card card-container">
                      <form action="" method="post">
                          <div class="form-group text-center pt-3">
                              <img src="./imagenes/LogoPoderJudicial.png"  width="100%" height="100%">
                              <br><br>
                      
                              <h4 class="text-light">Encuesta de calidad del servicio</h4>
                          </div>
                          <div class="form-group mx-sm-4 pt-1">
                              <h6 class="text-light">Número de entrevista</h6>
                              <input maxlength="7" type="text" class="form-control" name="nEncuesta">
                          </div>
                          <div class="form-group mx-sm-4 pt-1">
                              <h6 class="text-light">Período</h6>
                                  <select class="comboBox">
                                      <option>1</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                      <option>5</option>
                                  </select>
                          </div>
                          <div class="form-group mx-sm-4 pt-1">
                              <h6 class="text-light">Oficina</h6>
                                  <select class="comboBox">
                                      <option>1</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                      <option>5</option>
                                  </select>
                          </div>
                          <div class="form-group mx-sm-4 pt-1">
                              <h6 class="text-light">Nombre de encuestador</h6>
                              <input type="text" class="form-control" name="nEncuesta">
                          </div>
                          <div class="form-group mx-sm-4 pt-1">
                              <h6 class="text-light">Etapa</h6>
                              <input type="text" class="form-control" name="nEncuesta">
                              <br>
                          </div>
                          <div class="form-group mx-sm-4 pt-1">
                          <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Registrar</button>
                          </div>
                      </form>
    </div><br>

    <!-- Footer -->
    <footer class="page-footer font-small" style="background-color: #343A40; color: #FFF">

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2022 Todos los derechos reservados
        <br>
        <a href="" target="_blank"> Poder Judicial del Estado de Yucatán</a>
      </div>
      <!-- Copyright -->

    </footer>
    <!-- Footer -->


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>