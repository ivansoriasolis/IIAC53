<?php //  Controladores/rutasC.php
class RutasC {
    public function procesaRutasC(){
        if (isset($_GET['ruta'])){
            $ruta = $_GET['ruta'];
        }
        else
        {
            $ruta = 'index';
        }
        
        $rutasM = new RutasM();
        $pagina = $rutasM->procesaRutasM($ruta);
        // Vistas/modulos/empleados.php
        return $pagina;
    }
}
?>