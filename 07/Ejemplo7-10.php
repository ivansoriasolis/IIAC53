<?php
    if (!unlink('testfile2.new')) echo "No se pudo borrar el archivo";
    else echo "Archivo borrado satisfactoriamente";
?>
