<!DOCTYPE html>  <!-- Vistas/plantilla.php-->
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>CRUD</title>

	<link rel="stylesheet" type="text/css" href="Vistas/css/estilos.css">

</head>
<body>

<?php
$ruta = new RutasC();
include 'modulos/menu.php';
?>

<section>

<?php
    
    $modulo = $ruta->procesaRutasC();
    include $modulo;
?>

</section>
</body>
</html>