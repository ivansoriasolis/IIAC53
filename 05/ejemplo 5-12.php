<?php
    $objeto1 = new Usuario();
    $objeto1->nombre = "Alice";
    $objeto2 = $objeto1;
    $objeto2->nombre = "Amy";

    echo "objeto1 nombre = ".$objeto1->nombre. "<br>";
    echo "objeto2 nombre = ".$objeto2->nombre;

    class Usuario
    {
        public $nombre;
    }
?>
