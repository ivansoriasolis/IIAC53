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

    //editar empleados
    public function editarEmpleadoC(){
        if(isset($_GET['id'])){
            $datosC = array('id'=>$_GET['id']);
            $tablaBD = 'empleados';
            $pagina = $this->empleadosM->editarEmpleadoM($datosC, $tablaBD);
            return $pagina;
        }
    }

    //actualizar empleados
    public function actualizarEmpleadoC(){
        if(isset($_POST['nombreE'])){
            $datosC = array(    'id'=>$_POST['idE'],
                                'nombre'=>$_POST['nombreE'],
                                'apellido'=>$_POST['apellidoE'],
                                'email' => $_POST['emailE'],
                                'puesto' => $_POST['puestoE'],
                                'salario' => $_POST['salarioE'],
                            );
            $tablaBD = 'empleados';
            print_r( $datosC);
            $pagina = $this->empleadosM->actualizarEmpleadoM($datosC, $tablaBD);
            header("location: index.php?ruta=empleados");
            return $pagina;
        }
    }
}
?>