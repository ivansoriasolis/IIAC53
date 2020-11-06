<?php
    $objeto = new hijo;
    $objeto->test();
    $objeto->test2();
    
    class Padre
    {
        function test()
        {
            echo "Yo soy tu padre<br>";
        }
    }
    class Hijo extends Padre
    {
        function test()
        {
            echo "Yo soy Luke<br>";
        }
        function test2()
        {
            parent::test();
        }
    }
?>
