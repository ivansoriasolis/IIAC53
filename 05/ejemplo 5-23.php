<?php
    $objeto = new Suscriptor;
    $objeto->nombre = "Fred";
    $objeto->password = "pword";
    $objeto->telefono = "234234";
    $objeto->email = "fred@bloggs.com";
    $objeto->mostrar();
    
    class Usuario
    {
        public $nombre, $password;

        function guardar_usuarios()
        {
            echo "aqui va el codigo de guardar usuario";
        }
    }

    class Suscriptor extends Usuario
    {
        public $telefono, $email;
        
        function mostrar()
        {
            echo "Nombre:   " . $this->nombre   . "<br>";
            echo "Password: " . $this->password . "<br>";
            echo "Telefono: " . $this->telefono . "<br>";
            echo "Email:    " . $this->email    . "<br>";
        }
    }
?>
