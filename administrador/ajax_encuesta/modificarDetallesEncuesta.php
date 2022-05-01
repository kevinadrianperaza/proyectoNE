<?php

include("../../conexion.php");

if (isset($_POST)) {
    // Obtener valores
    $id_encuesta    = $_POST['id_encuesta'];
    $titulo         = $_POST['titulo'];
    $descripcion    = $_POST['descripcion'];
    $periodo    = $_POST['periodo'];

    // Modificar producto
    $query = "
        UPDATE encuestas SET
        titulo      = '$titulo',
        descripcion = '$descripcion',
        periodo = '$periodo' 
        WHERE id_encuesta   = '$id_encuesta'
    ";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
}