<?php //  Modelos/rutasM.php
class RutasM{
    public function procesaRutasM($ruta){
        if( $ruta == "ingreso" || 
            $ruta == 'empleados' || 
            $ruta == 'registrar' || 
            $ruta == 'salir' ||
            $ruta == 'editar' ||
            $ruta == 'descuentos')
        {
            $pagina = "Vistas/modulos/".$ruta. ".php";
            // Vistas/modulos/empleados.php
        }
        else if($ruta == 'index'){
            $pagina = "Vistas/modulos/ingreso.php";
        }
        else {
            $pagina = "Vistas/modulos/ingreso.php";
        }
        return $pagina;
    }
}
?>