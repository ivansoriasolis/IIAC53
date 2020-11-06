<?php
    $a1 = "IVAN";
    $a2 = "soria";
    $a3 = "solIS";

    echo $a1 . " " . $a2 . " " . $a3 . "<br>";
    arregla_nombre($a1, $a2, $a3);
    echo $a1 . " " . $a2 . " " . $a3;

    function arregla_nombre(&$n1, &$n2, &$n3)
    {
        $n1 = ucfirst(strtolower($n1));
        $n2 = ucfirst(strtolower($n2));
        $n3 = ucfirst(strtolower($n3));
    }
?>