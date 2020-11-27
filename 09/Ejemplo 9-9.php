<?php 
    echo <<<_END
        <form method="post"><pre>
        Caja de texto
        <input type="text" name="texto" size="32" maxlength="64" value="Ingrese aqui...">
        Area de texto
        <textarea name="caja" cols="32" rows="4" wrap="off">
        </textarea>
        Checkbox
        <input type="checkbox" name="deacuerdo" value="1" checked="cheked">
        Radio button
        <input type="radio" name="dia" value="1">
        Entrada oculta:
        <input type="hidden" name="submitted" value="yes">
        Lista de selección
        <select name="sexo" size="1">
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
        </select>
        <input type="image" name="submit" src="image.png" width="100">
        </form>
    _END;
?>

