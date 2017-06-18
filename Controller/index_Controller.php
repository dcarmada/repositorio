<?php
session_start();
/**
 * Created by PhpStorm.
 * User: DACA
 * Date: 18/06/2017
 * Time: 18:44
 */
include '../Functions/validar.php';
include '../View/index_View.php';
new Index();
/*session_start();
include '../Functions/Authentication.php';
if (!IsAuthenticated()){
    header('Location: ../index.php');
}
else{
    include '../View/Index_View.php';
    new Index();
}*/