<?php

class index_View {

    function __construct(){
        $this->render();
    }

    function render(){
       include 'header.php';
       include 'menuLateral.php';
       include 'footer.php';
    }
}