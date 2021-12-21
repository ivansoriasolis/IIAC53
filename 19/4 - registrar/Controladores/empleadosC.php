<?php  // Controladores/empleadosC.php
class EmpleadosC {
    function __construct(){
        $this->empleadosM = new EmpleadosM();
    }

    public function registrarEmpleadosC(){
        if(isset($_POST['nombreR'])){
            $datosC =array();
            $datosC['nombre'] = $_POST['nombreR'];
            $datosC['apellido'] = $_POST['apellidoR'];
            $datosC['email'] = $_POST['emailR'];
            $datosC['puesto'] = $_POST['puestoR'];
            $datosC['salario'] = $_POST['salarioR'];

            $tablaBD = 'empleados';

            $pagina = $this->empleadosM->registrarEmpleadosM($datosC, $tablaBD);
         
            header('location: index.php?ruta=empleados');

        }
    }

    //mostrar empleados
    public function mostrarEmpleadosC(){
        $tablaBD = 'empleados';
        $pagina = $this->empleadosM->mostrarEmpleadosM($tablaBD);
        return $pagina;
    }
}
?>