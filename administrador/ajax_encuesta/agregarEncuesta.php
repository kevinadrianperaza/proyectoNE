<?php

if (isset($_POST['id_usuario']) && isset($_POST['titulo']) && isset($_POST['descripcion']) && isset($_POST['periodo'])) {
    // Incluir archivo de conexión a base de datos
    include("../conexion/conexion.php");

    // Establecemos la zona horario
    //date_default_timezone_set("America/Mexico_City");
  	//$date = new DateTime();
  	//$periodo = $date->format('d-m-Y');

    // Obtener valores
    $id_usuario  = $_POST['id_usuario'];
    $titulo      = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $periodo = $_POST['periodo'];

    $query = "INSERT INTO encuestas (id_usuario, titulo, descripcion, estado, periodo)
              VALUES ('$id_usuario', '$titulo', '$descripcion', '0', '$periodo')";

    $resultado = $con->query($query);

}
