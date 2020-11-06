<?php
    $temp = "El area es ";
    echo area_triangulo(4, 5, $temp);

    function area_triangulo($base, $altura, $temp)
    {
        return $temp . ( $base * $altura ) / 2;
    }

?>