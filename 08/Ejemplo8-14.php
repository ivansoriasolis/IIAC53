<?php 
    require_once 'login.php';
    $conexion = new mysqli($hn, $un, $pw, $db);
    if ($conexion->connect_error) die ("Fatal error");

    $query = "INSERT INTO gatos VALUES(NULL, 'Lince', 'Stumpy', 5)";
    $result = $conexion->query($query);
    if (!$result) die ("Consulta falló");

    echo "El ID de inserción es: ". $conexion->insert_id;
?>