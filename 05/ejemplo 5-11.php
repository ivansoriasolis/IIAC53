<?php
    $objeto = new Usuario;
    print_r($objeto); echo "<br>";

    $objeto->nombre = "Joe";
    $objeto->password = "mypass";
    print_r($objeto); echo "<br>";

    $objeto->guardar_usuario();

    class Usuario
    {
        public $nombre, $password;
        function guardar_usuario()
        {
            echo "Codigo de guardar_usuario aqui";
        }
    }
?>
