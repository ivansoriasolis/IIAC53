<!DOCTYPE html>  <!-- Vistas/plantilla.php-->
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>CRUD</title>

	<link rel="stylesheet" type="text/css" href="Vistas/css/estilos.css">

</head>
<body>

<?php
include 'modulos/menu.php';
?>

<section>

<?php
    $rutas = new RutasControlador();
    $modulo = $rutas->Rutas();
    include $modulo;
?>

</section>
</body>
</html>