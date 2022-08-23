<?php
    class Usuario
    {
        function __destruct()
        {
            echo "Owww! he muerto";
        }
    }

    function creaUsuario()
    {
        $u = new Usuario();
    }

    creaUsuario();
?>