<?php //formtest2.php
    echo <<<_END
    <form method="post" action="Ejemplo9-5.php"><pre>
    V ainilla <input type="checkbox" name="ice[]" value="Vainilla">
    Chocolate <input type="checkbox" name="ice[]" value="Chocolate">
        Fresa <input type="checkbox" name="ice[]" value="Fresa">
    <input type="submit">
    </form>
    _END;

    $helado = $_POST['ice'];

    echo $helado[0];
    echo $helado[1];
    echo $helado[2];
?>

