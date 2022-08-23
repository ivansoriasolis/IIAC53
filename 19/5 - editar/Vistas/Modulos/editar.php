<?php
$empleados = new EmpleadosC();
$resultado = $empleados->editarEmpleadoC();
$empleados->actualizarEmpleadoC();
?><br>
<h1>EDITAR EMPLEADO</h1>
<form method="post" action="">
    <input type="hidden" value="<?=$resultado['id']?>" name="idE" required>
	<input type="text" placeholder="Nombre" name="nombreE" value='<?=$resultado['nombre']?>' required>
	<input type="text" placeholder="Apellido" name="apellidoE" value='<?=$resultado['apellido']?>' required>
	<input type="email" placeholder="Email" name="emailE" value='<?=$resultado['email']?>' required>
	<input type="text" placeholder="Puesto" name="puestoE" value='<?=$resultado['puesto']?>' required>
	<input type="text" placeholder="Salario" name="salarioE" value='<?=$resultado['salario']?>' required>
	<input type="submit" value="Actualizar">
</form>