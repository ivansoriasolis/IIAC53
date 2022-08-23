<?php
    function test()
    {
        static $contador = 0;
        echo $contador;
        $contador++;
    }
    
    test();
    test();
    test();

?>