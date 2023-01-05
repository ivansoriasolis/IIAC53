<?php  //Controladores/adminC.php
class AdminC{
    function __construct(){
        $this->adminM = new AdminM();
    }

    public function IngresoC(){
        if(isset($_SESSION['Ingreso']))
            header("location: index.php?ruta=empleados");
        if(isset($_POST["usuarioI"])){
            $datosC = array(    
                        "usuario"=>$_POST["usuarioI"], 
                        "clave"=>$_POST["claveI"]);
            $result = $this->adminM->IngresoM($datosC);
            if(isset($result)){
                session_start();
                $_SESSION['Ingreso']=true;
                header("location: index.php?ruta=empleados");
            }
            else
                echo "ERROR AL INGRESAR";
        }
    }

    public function salirC(){
        session_destroy();
        header("location:index.php?=ingreso");
    }
}
?>