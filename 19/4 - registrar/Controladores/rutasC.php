<?php //  Controladores/rutasC.php
class RutasControlador {
    public function Plantilla(){
        return 'Vistas/plantilla.php';
    }

    public function Rutas(){
        if (isset($_GET['ruta'])){
            $rutas = $_GET['ruta'];
        }
        else
        {
            $rutas = 'index';
        }
        $respuesta = Modelo::RutasModelo($rutas);

        return $respuesta;
    }
    
    static public function redirigirSesion($ruta){
        session_start();
        if(!$_SESSION["Ingreso"]){
            header("location:index.php?=$ruta");
            exit();
        }
    }
}
?>