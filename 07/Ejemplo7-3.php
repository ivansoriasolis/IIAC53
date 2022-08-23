<?php
    $mes    = 9;
    $dia    = 31;
    $año    = 2022;

    if (checkdate($mes, $dia, $año)) echo "Fecha es válida";
    else echo "Fecha es Inválida";
?>