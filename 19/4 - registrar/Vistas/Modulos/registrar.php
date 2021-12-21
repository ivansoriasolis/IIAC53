<?php
$registrar = new EmpleadosC();
$registrar->registrarEmpleadosC();
?>
<br>  <!-- Vistas/Modulos/registrar.php -->
<h1>REGISTRAR UN EMPLEADO</h1>

<form method="post" action="">
	<input type="text" placeholder="Nombre" name="nombreR" required>
	<input type="text" placeholder="Apellido" name="apellidoR" required>
	<input type="email" placeholder="Email" name="emailR" required>
	<input type="text" placeholder="Puesto" name="puestoR" required>
	<input type="text" placeholder="Salario" name="salarioR" required>
	<input type="submit" value="Registrar">
</form>