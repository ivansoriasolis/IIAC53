<?php
    $objeto = new User;
    print_r($objeto);

    class User
    {
        public $nombre, $password;
        
        function guardar_user()
        {
            echo "Codigo para guardar usuario aqui";
        }
    }
?>