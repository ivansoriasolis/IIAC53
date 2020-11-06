<?php
    $papel = array('copia' => "Copia y multiproposito",
    'inkjet' => "Impresora de tinta",
    'laser'=> "Impresora laser",
    'foto' => "Papel fotografico");

    while(list($item, $descripcion)=each($papel))
        echo "$item: $descripcion<br>";
?>
