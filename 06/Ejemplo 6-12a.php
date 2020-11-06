<?php
    $nombre = 'Pedro';
    $get = array('nombre'=>'ivan',
                 'apellido'=>'soria');
    extract($get, EXTR_PREFIX_ALL, 'fromget');
    echo $fromget_nombre;
    echo $fromget_apellido;


?>
