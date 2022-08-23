<?php
$empleados = new EmpleadosC();
$pagina = $empleados->mostrarEmpleadosC();
$empleados->borrarEmpleadoC();
?><br>  <!-- Vistas/Modulos/empleados.php -->
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
	<?php foreach($pagina as $key => $value): ?>
            <tr>
			<td><?=$value['nombre']?></td>
			<td><?=$value['apellido']?></td>
			<td><?=$value['email']?></td>
			<td><?=$value['puesto']?></td>
			<td><?=$value['salario']?></td>
			<td><a href='index.php?ruta=editar&id=<?=$value['id']?>'>
			<button>Editar</button></td>
			<td><a href='index.php?ruta=empleados&id=<?=$value['id']?>'>
			<button>Borrar</button></td>
			</tr>
	<?php endforeach; ?>

	</tbody>
</table>
