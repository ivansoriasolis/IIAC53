<?php
    $balance_banco = 90;
    $ahorro=0;
    if ($balance_banco < 100)
    {
        $dinero     = 1000;
        $balance_banco += $dinero;
    }
    elseif ($balance_banco > 200)
    {
        $ahorros    +=100;
        $balance_banco -=100;
    }
    else
    {
        $ahorros    += 50;
        $balace_banco += 50;
    }
?>