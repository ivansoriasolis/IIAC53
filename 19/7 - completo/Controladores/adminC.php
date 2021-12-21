<?php  //Controladores/adminC.php
class AdminC{
    public function IngresoC(){
        if(isset($_SESSION['Ingreso']))
            header("location: index.php?ruta=empleados");
        if(isset($_POST["usuarioI"])){
            $datosC = array(    
                        "usuario"=>$_POST["usuarioI"], 
                        "clave"=>$_POST["claveI"]);
            $tablaBD = "administradores";
            $pagina = AdminM::IngresoM($datosC, $tablaBD);
            if ($pagina["usuario"]==$_POST["usuarioI"] && 
                $pagina["clave"]==$_POST["claveI"]){
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
        header("location:index.php?=ingreso");
    }
}
?>