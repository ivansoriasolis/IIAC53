<?php 
    require_once 'login.php';
    $conexion = new mysqli($hn, $un, $pw, $db);
    if ($conexion->connect_error) die ("Fatal error");

    $query = "CREATE TABLE gatos (
        id SMALLINT NOT NULL AUTO_INCREMENT,
        familia VARCHAR(32) NOT NULL,
        nombre VARCHAR(32) NOT NULL,
        edad TINYINT NOT NULL,
        PRIMARY KEY (id)
    )";

    $result = $conexion->query($query);
    if (!$result) die ("Acceso a base de datos falló");
?>
