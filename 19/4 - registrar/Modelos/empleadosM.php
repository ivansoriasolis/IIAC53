<?php  //Modelos/empleadosM.php
require_once "conexionBD.php";

class EmpleadosM extends ConexionBD{
 
    public function registrarEmpleadosM($datosC, $tablaBD){
        $cbd = ConexionBD::cBD();
        $nombre = $datosC['nombre'];
        $apellido = $datosC['apellido'];
        $email = $datosC['email'];
        $salario = $datosC['salario'];
        $puesto = $datosC['puesto'];
        $query = "INSERT INTO $tablaBD VALUES 
            (Null,'$nombre', '$apellido', '$email', '$puesto', '$salario')";
        $result = $cbd->query($query);

        return $result;
    }

    public function mostrarEmpleadosM($tablaBD){
        $cbd = ConexionBD::cBD();
        $query = "SELECT id, nombre, email, apellido, puesto, salario 
                FROM $tablaBD";
        $result = $cbd->query($query);
        return $result;
    }
} 
?>