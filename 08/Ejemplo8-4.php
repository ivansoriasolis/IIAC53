<?php 
    require_once 'login.php';
    $conexion = new mysqli($hn, $un, $pw, $db);

    if ($conexion->connect_error) die ("Fatal error");

    $query = "SELECT * FROM classics";
    $result = $conexion->query($query);

    if (!$result) die("Error fatal");

    $filas = $result->num_rows;

    for ($j = 0; $j < $filas; ++$j)
    {
        $result->data_seek($j);
        echo 'Author: ' . 
        htmlspecialchars($result->fetch_assoc()['author']) . '<br>';
        $result->data_seek($j);
        echo 'Title: ' . 
        htmlspecialchars($result->fetch_assoc()['title']) . '<br>';
        $result->data_seek($j);
        echo 'Catergory: ' . 
        htmlspecialchars($result->fetch_assoc()['category']) . '<br>';
        $result->data_seek($j);
        echo 'Year: ' . 
        htmlspecialchars($result->fetch_assoc()['year']) . '<br>';
        $result->data_seek($j);
        echo 'ISBN: ' . 
        htmlspecialchars($result->fetch_assoc()['isbn']) . '<br><br>';
    }
    $result->close();
    $conexion->close();
?>