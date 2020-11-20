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
        $row = $result->fetch_array(MYSQLI_ASSOC);
        echo 'Author: ' . htmlspecialchars($row['author']) . '<br>';
        echo 'Title: ' . htmlspecialchars($row['title']) . '<br>';
        echo 'Category: ' . htmlspecialchars($row['category']) . '<br>';
        echo 'Year: ' . htmlspecialchars($row['year']) . '<br>';
        echo 'ISBN: ' . htmlspecialchars($row['isbn']) . '<br><br>';
    }
    $result->close();
    $conexion->close();
?>

