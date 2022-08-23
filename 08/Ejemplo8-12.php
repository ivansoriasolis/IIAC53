<?php 
    require_once 'login.php';
    $conexion = new mysqli($hn, $un, $pw, $db);
    if ($conexion->connect_error) die ("Fatal error");

    $query = "DELETE FROM gatos WHERE nombre='Growler'";
    $result = $conexion->query($query);
    if (!$result) die ("Consulta falló");
?>