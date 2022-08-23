<?php 
    require_once 'login.php';
    $conexion = new mysqli($hn, $un, $pw, $db);
    if ($conexion->connect_error) die ("Fatal error");

    $query = "SELECT * FROM classics";
    $result = $conexion->query($query);
    if (!$result) die("Error fatal");

    print_r($result);
?>