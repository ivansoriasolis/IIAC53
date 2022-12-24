<?php 
    require_once 'login.php';
    $conexion = new mysqli($hn, $un, $pw, $db);
    if ($conexion->connect_error) die ("Fatal error");

    $query  = "INSERT INTO gatos VALUES(NULL, 'León', 'Leo', 4)";
    $result = $conexion->query($query);
    if (!$result) die ("Falló acceso a base de datos");
  
?>