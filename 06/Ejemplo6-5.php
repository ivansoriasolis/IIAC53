<?php
    $p1 = array("copia", "inkjet", "laser", "foto");
    echo "elemento p1: ". $p1[2] . "<br>";
    $p2 = array('copia' => "Copia y multiproposito",
                'inkjet' => "Impresora de tinta",
                'laser'=> "Impresora laser",
                'foto' => "Papel fotografico");
    echo "elemento p2: ". $p2['inkjet'] . '<br>';
?>