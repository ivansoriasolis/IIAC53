<?php
    if (!copy('testfile.txt', 'testfile2.txt')) echo "No se puede copiar";
    else echo "El archivo se ha copiado";
?>