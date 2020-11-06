<?php
    Traductor::busqueda();

    class Traductor
    {
        const INGLES = 0;
        const ESPANOL = 1;
        const FRANCES = 2;
        const ALEMAN = 3;

        static function busqueda()
        {
            echo self::ESPANOL;
        }
    }
?>
