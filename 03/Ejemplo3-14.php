<?php
    $temp = "El area es ";
    echo area_triangulo(4,5);

    function area_triangulo($base, $altura)
    {
        return $temp . ( $base * $altura ) / 2;
    }

?>