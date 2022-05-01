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
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&display=swap" rel="stylesheet">  
	<link rel="stylesheet" href="../assets/css/estilos.css">
	<link rel="shortcut icon" type="image/x-icon" href="../assets/logo-fis.png">
	<title>CESC</title>

	<!--Notificacion -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<script src="../assets/js/script.js"></script>

</head>
<body>
<!--Precarga --->
<div id='spinner'></div>

<?php include("msjs.php"); ?>

	<div class="contenedor">
		<div class="columna-izquierda">
			<div class="registro activo" id="registro">
				<div class="header">
					<h1>¡Iniciar sesión!</h1>
					<p> - - - - - - - - - - - - - - - -</p>
				</div>
		
				<form class="formulario" name="formulario" action="validarSesionLogin.php" method="POST">
					<label for="nombre">Correo</label>
					<div class="contenedor-input">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
							<path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
						</svg>
						<input type="email" name="emailUser" id="emailUser" required="true" autofocus="autofocus">
					</div>
		
					<label for="correo">Clave</label>
					<div class="contenedor-input">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-lock2" viewBox="0 0 16 16">
  							<path d="M8 5a1 1 0 0 1 1 1v1H7V6a1 1 0 0 1 1-1zm2 2.076V6a2 2 0 1 0-4 0v1.076c-.54.166-1 .597-1 1.224v2.4c0 .816.781 1.3 1.5 1.3h3c.719 0 1.5-.484 1.5-1.3V8.3c0-.627-.46-1.058-1-1.224z"/>
  							<path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
						</svg>
						<input type="password" name="passwordUser" id="passwordUser" required>
					</div>
					
					<!--codigo del recaptcha  de google -->
					<div class="text-center">
						<div class="g-recaptcha"
							data-sitekey="6Lcz9zsfAAAAAMmOHMZKKbCgUVJXpi_tyGqPl2hA">
						</div>
					</div>
					<!-- fin del recaptcha-->

					<div class="contenedor-boton">
						<input type="submit" value="Entrar Ahora" id="btn-login">
					</div>
					<div class="contenedor-boton">
						<a href="formLogin.php" class="btn btn-dark">Crear mi cuenta</a>

					</div>
					
				</form>
			</div>
		</div>

		<div class="columna-derecha">

		</div> 
	</div>


	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>
</html>