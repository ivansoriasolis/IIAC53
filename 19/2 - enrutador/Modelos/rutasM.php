<?php //  Modelos/rutasM.php
class RutasModelo{
    static public function RutasM($rutas){
        if( $rutas == "ingreso" || 
            $rutas == 'empleados' || 
            $rutas == 'registrar' || 
            $rutas == 'salir' ||
            $rutas == 'editar' ||
            $rutas == 'descuentos')
        {
            $pagina = "Vistas/modulos/".$rutas. ".php";
            // Vistas/modulos/empleados.php
        }
        else if($rutas == 'index'){
            $pagina = "Vistas/modulos/ingreso.php";
        }
        else {
            $pagina = "Vistas/modulos/ingreso.php";
        }
        return $pagina;
    }
}
?>