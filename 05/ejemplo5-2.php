<?php
    echo arregla_nombres("IVAN", "soria", "solIS");

    function arregla_nombres($n1, $n2, $n3)
    {
        $n1 = ucfirst(strtolower($n1));
        $n2 = ucfirst(strtolower($n2));
        $n3 = ucfirst(strtolower($n3));

        return $n1. " ". $n2. " ". $n3;
    }
?>