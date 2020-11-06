<?php
    $a1 = "IVAN";
    $a2 = "soria";
    $a3 = "solIS";

    echo $a1 . " " . $a2 . " " . $a3 . "<br>";
    arregla_nombre();
    echo $a1 . " " . $a2 . " " . $a3;

    function arregla_nombre()
    {
        global $a1; $a1 = ucfirst(strtolower($a1));
        global $a2; $a2 = ucfirst(strtolower($a2));
        global $a3; $a3 = ucfirst(strtolower($a3));
    }
?>