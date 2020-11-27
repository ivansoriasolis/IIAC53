<?php 
    echo <<<_END
    <form method="post" action="Ejemplo 9-6.php"><pre>
    8am <input type="radio" name="hora" value="1">
    4pm <input type="radio" name="hora" value="2" cheked="checked">
    8pm <input type="radio" name="hora" value="3">
    <input type="submit">
    </form>
    _END;

    $hora = $_POST["hora"];

    echo "Elegiste: " . $hora;
?>

