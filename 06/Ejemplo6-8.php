<?php
    $papel = array('copia' => "Copia y multiproposito",
    'inkjet' => "Impresora de tinta",
    'laser'=> "Impresora laser",
    'foto' => "Papel fotografico");

    while(list($item, $descripcion)=each($papel)) //each esta obsoleto a partir de PHP 7.2
        echo "$item: $descripcion<br>";
?>