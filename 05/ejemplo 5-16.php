<?php
    class Usuario
    {
        public $nombre, $password;
        function get_password()
        {
            return $this->password;
        }
    }

    $objeto = new Usuario;
    $objeto->password = "secreto";

    echo $objeto->get_password();
?>
