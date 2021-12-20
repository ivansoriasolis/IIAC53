<?php //  Controladores/rutasC.php
class RutasC {
    public function Plantilla(){
        return 'Vistas/plantilla.php';
    }

    public function RutasC(){
        if (isset($_GET['ruta'])){
            $ruta = $_GET['ruta'];
        }
        else
        {
            $ruta = 'index';
        }
        
        $respuesta = RutasModelo::RutasM($ruta);
        // Vistas/modulos/empleados.php
        return $respuesta;
    }
}
?>