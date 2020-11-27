<?php 
    echo <<<_END
    <form method="post" action="Ejemplo 9-8.php"><pre>
    <select name="veg[]" size="5" multiple="multiple">
        <option value="Arbeja">Arbeja</options>
        <option value="Habas">Habas</options>
        <option value="Zanahorias">Zanahorias</options>
        <option value="Cebolla">Cebolla</options>
        <option value="Brocoli">Brocoli</options>
    </select>
    <input type="submit">
    </from>
    _END;

    $vegetal=$_POST["veg"];
    echo "Elegiste ". $vegetal[0];
    echo "Elegiste ". $vegetal[1];
    echo "Elegiste ". $vegetal[2];
?>

