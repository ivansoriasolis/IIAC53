<?php 
    require_once 'login.php';
    $conexion = new mysqli($hn, $un, $pw, $db);
    if ($conexion->connect_error) die ("Fatal error");

    $query = "UPDATE gatos SET nombre='Charlie'
            WHERE nombre='Charly'";
    $result = $conexion->query($query);
    if (!$result) die ("Consulta falló");
?>