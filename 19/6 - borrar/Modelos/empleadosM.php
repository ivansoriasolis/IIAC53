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

    public function editarEmpleadoM($datosC, $tablaBD){
        $cbd = ConexionBD::cBD();
        $id = $datosC['id'];
        $query = "SELECT id, nombre, email, apellido, puesto, salario
                FROM $tablaBD WHERE id='$id'";
        $result = $cbd->query($query);
        $rows = $result->fetch_array(MYSQLI_ASSOC);
        return $rows;
    }

    public function actualizarEmpleadoM($datosC, $tablaBD){
        $cbd = ConexionBD::cBD();
        extract($datosC);
        $query = "UPDATE $tablaBD
            SET id='$id', 
            nombre='$nombre', 
            apellido='$apellido', 
            email='$email', 
            puesto='$puesto', 
            salario='$salario'
            WHERE id='$id'";
        echo $query;
        $resultado = $cbd->query($query);
        return $resultado;    
    }

    public function borrarEmpleadoM($datosC, $tablaBD){
        $cbd = ConexionBD::cBD();
        extract($datosC);
        $query = "DELETE FROM $tablaBD WHERE id='$id'";
        $resultado = $cbd->query($query);
    }
} 
?>