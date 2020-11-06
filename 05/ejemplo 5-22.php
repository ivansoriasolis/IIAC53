<?php
    $temp = new Test();

    echo "Test A:" . Test::$propiedad_static . "<br>";
    echo "Test B:" . $temp->get_ps() . "<br>";
    echo "Test C:" . $temp->propiedad_static . "<br>";

    class Test
    {
        static $propiedad_static = "Yo soy static";

        function get_ps()
        {
            return self::$propiedad_static;
        }
    }
?>
