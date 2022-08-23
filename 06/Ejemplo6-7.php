<?php
    $papel = array('copia' => "Copia y multiproposito",
    'inkjet' => "Impresora de tinta",
    'laser'=> "Impresora laser",
    'foto' => "Papel fotografico");

    foreach($papel as $item=>$descripcion)
        echo "$item: $descripcion<br>";
?>