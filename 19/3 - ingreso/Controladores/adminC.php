<?php  //Controladores/adminC.php
class AdminC{
    public function IngresoC(){
        session_start();
        if(isset($_SESSION['Ingreso']))
            header("location: index.php?ruta=empleados");
        if(isset($_POST["usuarioI"])){
            $datosC = array(    
                        "usuario"=>$_POST["usuarioI"], 
                        "clave"=>$_POST["claveI"]);
            $tablaBD = "administradores";
            $respuesta = AdminM::IngresoM($datosC, $tablaBD);
            print_r($respuesta);
            if ($respuesta["usuario"]==$_POST["usuarioI"] && 
                $respuesta["clave"]==$_POST["claveI"]){
                $_SESSION['Ingreso']=true;
                header("location: index.php?ruta=empleados");
            }
            else
            {
                echo "ERROR AL INGRESAR";
            }
        }
    }
}
?>