<?php 
    require_once 'login.php';
    $conexion = new mysqli($hn, $un, $pw, $db);
    if ($conexion->connect_error) die ("Fatal error");

    $stmt = $conexion->prepare('INSERT INTO classics VALUES(?,?,?,?,?)');
    $stmt->bind_param('sssss', $author, $title, $year, $category, $isbn);

    $author     = "Emily Bronte";
    $title      = "Wuthering Heights";
    $category   = "Classic Fiction";
    $year       = "1847";
    $isbn       = "9780553212587";

    $stmt->execute();

    printf("%d Fila insertada. \n", $stmt->affected_rows);
    $stmt->close();
    $conexion->close();
?>