<?php
    $actual = time();
    $actualformato = date("Y-m-d\TH:i", $actual);
    echo "<form action ='fechas.php' method='post'>
        <input type = 'datetime-local' name='fechahora' value='$actualformato'>
        <input type = 'submit'>
    </form>";
    $fechautc = $_POST['fechahora'];
    $fechanumero = strtotime($fechautc);
    $fechamysql = date("Y-m-d H:i:s", $fechanumero);
    echo <<<_END
    Fecha-Hora en UTC: $fechautc <br>
    Fecha-Hora en timestamp: $fechanumero <br>
    Fecha-Hora en para mysql: $fechamysql
    _END;
?>