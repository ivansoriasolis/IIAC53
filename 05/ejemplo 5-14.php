<?php
    class Usuario
    {
        public $nombre_usuario;
        function __construct($param1, $param2)
        {
            $this->nombre_usuario = $param1;
        }
    }

    $yo = new Usuario("Iván","Soria");
    echo $yo->nombre_usuario;
?>
