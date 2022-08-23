<?php
    $nombres = arregla_nombres("IVAN", "soria", "solIS");
    echo $nombres[0]. " " . $nombres[1] . " " . $nombres[2];

    function arregla_nombres($n1, $n2, $n3)
    {
        $n1 = ucfirst(strtolower($n1));
        $n2 = ucfirst(strtolower($n2));
        $n3 = ucfirst(strtolower($n3));

        return array($n1, $n2, $n3);
    }
?>