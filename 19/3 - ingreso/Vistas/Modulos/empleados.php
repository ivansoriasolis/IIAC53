<?php
session_start();
if(!$_SESSION["Ingreso"]){
	header("location:index.php?=ingreso");
	exit();
}
?>
<br>  <!-- Vistas/Modulos/empleados.php -->
<h1>Empleados</h1>

<table id="t1" border="1">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Email</th>
			<th>Puesto</th>
			<th>Salario</th>
			<th></th>
			<th></th>
		</tr>
	</thead>

	<tbody>

	</tbody>
</table>
