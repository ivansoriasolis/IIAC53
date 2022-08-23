<?php 
    echo <<<_END
    <form method="post" action "Ejemplo 9-4.php"><pre>
     Vainilla <input type="checkbox" name="ice" value="Vainilla">
    Chocolate <input type="checkbox" name="ice" value="Chocolate">
        Fresa <input type="checkbox" name="ice" value="Fresa"> 
    <input type="submit">
    </form>
    _END;

    $helado = $_POST["ice"];
    echo "Elegiste " . $helado;
?>