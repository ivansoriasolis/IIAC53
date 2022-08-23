<?php 
    require_once 'login.php';
    $conexion = new mysqli($hn, $un, $pw, $db);
    if ($conexion->connect_error) die ("Fatal error");

    $query = "SELECT * FROM gatos";
    $result = $conexion->query($query);
    if (!$result) die ("Consulta falló");

    $filas = $result->num_rows;
    echo "<table><tr><th>Id</th> <th>Familia</th>
        <th>Nombre</th><th>Edad</th></tr>";

    for ($j = 0; $j < $filas; $j++)
    {
        $fila = $result->fetch_array(MYSQLI_NUM);

        echo "<tr>";
        for ($k = 0; $k <4; ++$k)
            echo "<td>". htmlspecialchars($fila[$k]). "</td>";
        echo "</tr>";
    }
?>