<?php 
    require_once 'login.php';
    $conexion = new mysqli($hn, $un, $pw, $db);
    if ($conexion->connect_error) die ("Fatal error");

    $query = "SELECT * FROM customers";
    $result = $conexion->query($query);
    if (!$result) die ("Consulta falló");

    $filas = $result->num_rows;

    for ($j = 0; $j < $filas; $j++)
    {
        $fila = $result->fetch_array(MYSQLI_NUM);
        echo htmlspecialchars($fila[0]) . " ISBN suscrito " .
             htmlspecialchars($fila[1]) . ":<br>";

        $subquery = "SELECT * FROM classics WHERE isbn = '$fila[1]'";
        $subresult = $conexion->query($subquery);
        if (!$subresult) die ("Subconsulta falló");

        $subfila = $subresult->fetch_array(MYSQLI_NUM);
        echo "&nbsp;&nbsp;" . 
            htmlspecialchars("'$subfila[1]'") . " de " .                  
            htmlspecialchars($subfila[0]) . "<br><br>";
    }
?>
