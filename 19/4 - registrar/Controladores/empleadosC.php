<?php  // Controladores/empleadosC.php
class EmpleadosC {

    public function RegistrarEmpleadosC(){
        if(isset($_POST['nombreR'])){
            $datosC =array();
            $datosC['nombre'] = $_POST['nombreR'];
            $datosC['apellido'] = $_POST['apellidoR'];
            $datosC['email'] = $_POST['emailR'];
            $datosC['puesto'] = $_POST['puestoR'];
            $datosC['salario'] = $_POST['salarioR'];

            $tablaBD = 'empleados';

            $respuesta = EmpleadosM::RegistrarEmpleadosM($datosC, $tablaBD);
         
            header('location: index.php?ruta=empleados');

        }
    }

    //mostrar empleados
    public function MostrarEmpleadosC(){
        $tablaBD = 'empleados';
        $respuesta = EmpleadosM::MostrarEmpleadosM($tablaBD);
        return $respuesta;
    }
}
?>