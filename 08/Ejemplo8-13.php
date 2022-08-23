<?php 
	//No ejecutar este script hasta terminar este capítulo
    require_once 'login.php';
    $conexion = new mysqli($hn, $un, $pw, $db);
    if ($conexion->connect_error) die ("Fatal error");

    $query = "DROP TABLE gatos";
    $result = $conexion->query($query);
    if (!$result) die ("Consulta falló");
?>