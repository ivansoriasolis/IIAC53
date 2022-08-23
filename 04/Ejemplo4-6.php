<?php
    $balance_banco = 90;
    $ahorros = 0;
    if ($balance_banco < 100)
    {
        $dinero = 1000;
        //$balance_banco = $balance_banco +  $dinero;
        $balance_banco +=  $dinero;
    }
    else 
    {
        $ahorros +=50;
        $balance_banco += 50;
    }

?>