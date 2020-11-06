<?php
    $objeto = new Tigre();

    echo "El tigre tiene... <br>";
    echo "Piel: " . $objeto->piel . "<br>";
    echo "Rayas: ". $objeto->rayas;

    class Gato
    {
        public $piel; //los gatos tienen piel

        function __construct()
        {
            $this->piel = "SI";
        }
    }

    class Tigre extends Gato
    {
        public $rayas; //los tigres tiene rayas

        function __construct()
        {
            parent::__construct(); //llamamos al constructor del padre
            $this->rayas = "SI";
        }
    }
?>

