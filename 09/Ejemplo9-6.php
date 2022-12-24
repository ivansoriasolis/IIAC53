<?php 
    echo <<<_END
    <form method="post" action="Ejemplo9-6.php"><pre>
    8am <input type="radio" name="hora" value="8am">
    4pm <input type="radio" name="hora" value="4pm" checked="checked">
    8pm <input type="radio" name="hora" value="8pm">
    <input type="submit">
    </form>
    _END;

    $hora = $_POST["hora"];

    echo "Elegiste: " . $hora;
?>

