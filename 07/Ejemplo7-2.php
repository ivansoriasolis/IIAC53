<?php
    echo "<pre>";

    $h = 'Rasmus';

    printf("[%s]\n",        $h); //salida standard de string
    printf("[%12s]\n",      $h); //justificación derecha
    printf("[%-12s]\n",     $h); //justificación izquierda con espacios
    printf("[%012s]\n",     $h); //relleno con ceros
    printf("[%'#12s]\n",    $h); //Caracter de relleno #

    $d = 'Rasmus Ledorf';

    printf("[%12.8s]\n",    $d); //Justif derecha, corte de 8 caracteres
    printf("[%-12.12s]\n",  $d); //Justif izqu, corte de 12 caracteres
    printf("[%-'@12.10s]\n",$d); //Justif. izqu, relleno con @, corte 10 car
?>