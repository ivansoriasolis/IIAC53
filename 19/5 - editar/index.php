<?php //index.php
require_once 'Controladores/rutasC.php';
require_once 'Controladores/adminC.php';
require_once 'Controladores/empleadosC.php';


require_once 'Modelos/rutasM.php';
require_once 'Modelos/adminM.php';
require_once 'Modelos/empleadosM.php';

$ruta = new RutasC();
$plantilla = $ruta->plantillaC();
include $plantilla;

?>