<?php

class MESSAGE{

    private $string;
    private $volver;

    function __construct($string, $volver){
        $this->string = $string;
        $this->volver = $volver;
        $this->render();
    }

    function render(){

        include '../View/Header.php';


        echo '<a href=\'' . $this->volver . "'> </a>";
        include '../View/Footer.php';
    } //fin metodo render

}
