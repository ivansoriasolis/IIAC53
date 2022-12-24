<?php 
    echo <<<_END
    <form method="post" action="Ejemplo9-7.php"><pre>
    <select name="veg" size="1">
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
    echo "Elegiste ". $vegetal;
?>


