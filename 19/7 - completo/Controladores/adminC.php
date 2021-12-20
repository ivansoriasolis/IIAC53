<?php  //Controladores/adminC.php
class AdminC{
    public function IngresoC(){
        //session_start(); el inicio o retoma de la sesión se hará en la vista antes de redirigir
        if(isset($_SESSION['Ingreso']))
            header("location: index.php?ruta=empleados");
        if(isset($_POST["usuarioI"])){
            $datosC = array(    
                        "usuario"=>$_POST["usuarioI"], 
                        "clave"=>$_POST["claveI"]);
            $tablaBD = "administradores";
            $respuesta = AdminM::IngresoM($datosC, $tablaBD);
            if ($respuesta["usuario"]==$_POST["usuarioI"] && 
                $respuesta["clave"]==$_POST["claveI"]){
                session_start();
                $_SESSION['Ingreso']=true;
                header("location: index.php?ruta=empleados");
            }
            else
            {
                echo "ERROR AL INGRESAR";
            }
        }
    }

    public function salirC(){
        session_destroy();
        header("location:index.php?=ingresa");
    }

    static public function sesionIniciadaC(){
        if(!isset($_SESSION['Ingreso']))
            return True; 
    }
}
?>