<?php
    $day_number = 342;
    $dias_para_año_nuevo = 366 - $day_number;   //Expresion
    if ($dias_para_año_nuevo < 30)
    {
        echo "No falta mucho ya";
    }
?>