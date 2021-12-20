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

    //editar empleados
    public function EditarEmpleadoC(){
        if(isset($_GET['id'])){
            $datosC = array('id'=>$_GET['id']);
            $tablaBD = 'empleados';
            $respuesta = EmpleadosM::EditarEmpleadoM($datosC, $tablaBD);
            return $respuesta;
        }
    }

    //actualizar empleados
    public function ActualizarEmpleadoC(){
        if(isset($_POST['nombreE'])){
            $datosC = array(    'id'=>$_POST['idE'],
                                'nombre'=>$_POST['nombreE'],
                                'apellido'=>$_POST['apellidoE'],
                                'email' => $_POST['emailE'],
                                'puesto' => $_POST['puestoE'],
                                'salario' => $_POST['salarioE'],
                            );
            $tablaBD = 'empleados';
            $respuesta = EmpleadosM::ActualizarEmpleadoM($datosC, $tablaBD);
            header('location: index.php?rutas=empleados');
            return $respuesta;
        }
    }

    //borrar empleado
    public function BorrarEmpleadoC(){
        if(isset($_GET['id'])){
            $datosC = array('id' => $_GET['id']);
            $tablaBD = 'empleados';
            EmpleadosM::BorrarEmpleadoM($datosC, $tablaBD);
        }
    }
}
?>