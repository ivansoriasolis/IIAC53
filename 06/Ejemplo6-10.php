<?php
    $productos = array(
        'papel' =>array(
            'copia' => "Copia y multiproposito",
            'inkjet' => "Impresora de tinta",
            'laser'=> "Impresora laser",
            'foto' => "Papel fotografico"
        ),
        'lapicero' => array(
            'boligrafo' => 'Boligrafo punta fina',
            'plumon' => 'Resaltador',
            'marcador' => 'Marcadores'
        ),
        'misc' => array(
            'cinta' => "Cinta adhesiva",
            'goma' => "pegamento",
            'clips' => 'Clips de papel'
        )
    );

    echo "<pre>";

    foreach($productos as $seccion => $items)
        foreach($items as $clave => $valor)
            echo "$seccion: \t$clave \t($valor)<br>";

    echo "</pre>";
?>