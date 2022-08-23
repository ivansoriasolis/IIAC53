<?php
    $tablero = array(
        array('r','n','b','q','b','n','r'),
        array('r','n','b','q','b','n','r'),
        array(' ',' ',' ',' ',' ',' ',' '),
        array(' ',' ',' ',' ',' ',' ',' '),
        array(' ',' ',' ',' ',' ',' ',' '),
        array(' ',' ',' ',' ',' ',' ',' '),
        array('r','n','b','q','b','n','r'),
        array('r','n','b','q','b','n','r'),
    );

    echo "<pre>";

    foreach($tablero as $fila)
    {
        foreach ($fila as $pieza)
            echo "$pieza ";
        echo "<br>";
    }

    echo "</pre>";
?>