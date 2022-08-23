<?php
    copy('testfile.txt', 'testfile2.txt') or die ("No se puede copiar");
    echo "El archivo fue copiado satisfactoriamente";
?>