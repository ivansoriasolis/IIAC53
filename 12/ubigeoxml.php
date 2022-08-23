<?php 
//ubigeoxml.php
header('Content-Type: text/xml');

$conexion = new mysqli('localhost', 'root', '', 'ubigeo_peru_inei_2016','3306');
if ($conexion->connect_error) die ("Fatal error");

if($_POST['circunscripcion']=='pais'){
    $tabla = 'ubigeo_peru_departments';
    $condicion = '1';
}
if($_POST['circunscripcion']=='departamento'){
    $tabla = 'ubigeo_peru_provinces';
    $condicion = "department_id = ". $_POST['id_circ'];
}
if($_POST['circunscripcion']=='provincia'){
    $tabla = 'ubigeo_peru_districts';
    $condicion = "province_id = ". $_POST['id_circ'];
}

$query = "SELECT id, name FROM $tabla WHERE $condicion";
$result = $conexion->query($query);
if (!$result) die("Error fatal");

$filas = $result->num_rows;

sleep(3);

echo "<?xml version='1.0'?><circs>";
for ($j = 0; $j < $filas; ++$j)
{
    echo "<circ>";
    $row = $result->fetch_array(MYSQLI_NUM);
    echo "<id_cir>$row[0]</id_cir> <name_cir>$row[1]</name_cir>";
    echo "</circ>";
}
echo "</circs>";

$result->close();
?>