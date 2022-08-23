<?php
    $actual = time();
    $actualformato = date("Y-m-dTH:i:s", $actual);
    echo "<form action ='fechas.php' method='post'>
        <input type = 'datetime-local' name='fechahora' value='$actualformato'>
        <input type = 'submit'>
    </form>";

    echo $_POST['fechahora'];
    echo "<br>";
    $fechanumero = strtotime($_POST['fechahora']);
    echo $fechanumero;
    echo "<br>";
    echo date("Y-m-d H:i:s", $fechanumero);

?>