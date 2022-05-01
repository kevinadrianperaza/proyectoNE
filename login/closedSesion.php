<?php
session_start();
include('../conexion/conexion.php');

date_default_timezone_set("America/Mexico");
$sesionHasta   = date("Y-m-d H:i:A");

$Update = ("UPDATE myusers SET sesionHasta='$sesionHasta' WHERE IdUser='".$_SESSION["IdUser"]."' ");
$resultado = mysqli_query($con, $Update);

//Eliminando las  cookies  en session
setcookie ($_SESSION['IdUser'], "", 1);
setcookie ($_SESSION['IdUser'], false);
unset($_COOKIE[$_SESSION['IdUser']]);


unset ($_SESSION['IdUser']); // Eliminar el IdUser de usuario
session_unset(); //Eliminar todas las sesiones

//Terminar la sesión:
session_destroy();
$parametros_cookies = session_get_cookie_params();
setcookie(session_name(),0,1,$parametros_cookies["path"]);

header("Location:login.php?sc=1");
?>
