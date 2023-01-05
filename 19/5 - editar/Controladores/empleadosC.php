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

            $result = $this->empleadosM->registrarEmpleadosM($datosC);
         
            header('location: index.php?ruta=empleados');

        }
    }

    //mostrar empleados
    public function mostrarEmpleadosC(){
        $result = $this->empleadosM->mostrarEmpleadosM();
        return $result;
    }

    //editar empleados
    public function editarEmpleadoC(){
        if(isset($_GET['id'])){
            $datosC = array('id'=>$_GET['id']);
 
            $result = $this->empleadosM->editarEmpleadoM($datosC);
            return $result;
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

            print_r( $datosC);
            $result = $this->empleadosM->actualizarEmpleadoM($datosC);
            header("location: index.php?ruta=empleados");
            return $result;
        }
    }
}
?>