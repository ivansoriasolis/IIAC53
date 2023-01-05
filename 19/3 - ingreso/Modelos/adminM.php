<?php  //Modelos/adminM.php
    require_once "conexionBD.php";

    class AdminM extends ConexionBD{
        public function IngresoM($datosC, $tablaBD = 'administradores'){
            $cbd = ConexionBD::cBD();
            $usuario = $datosC['usuario'];
            $clave = $datosC['clave'];
            $query = "SELECT usuario, clave FROM $tablaBD 
                WHERE usuario='$usuario' AND clave='$clave'";
            $result = $cbd->query($query);
            return $result->fetch_array(MYSQLI_ASSOC);
        }
    }
?>