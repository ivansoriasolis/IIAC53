<?php 
    require_once 'login.php';
    $conexion = new mysqli($hn, $un, $pw, $db);
    if ($conexion->connect_error) die ("Fatal error");

    $query  = "INSERT INTO gatos VALUES(NULL, 'León', 'Leo', 4)";
    $query = "INSERT INTO gatos VALUES(NULL, 'Cougar', 'Growler', 2)";
    $query = "INSERT INTO gatos VALUES(NULL, 'Cheetah', 'Charly', 3)";
    
    $result = $conexion->query($query);
    if (!$result) die ("Falló acceso a base de datos");
  
?>