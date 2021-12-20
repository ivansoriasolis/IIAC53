<?php //  Modelos/rutasM.php
class Modelo{
    static public function RutasModelo($rutas){
        if( $rutas == "ingreso" || 
            $rutas == 'empleados' || 
            $rutas == 'registrar' || 
            $rutas == 'salir')
        {
            $pagina = "Vistas/modulos/".$rutas. ".php";
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