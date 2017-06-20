<?php


include_once "change_language.php";

include 'login_Controller.php';
if(login()){
    header('Location:../index.php');
}else{
    include '../View/index_View.php';
    new index_View();
}
print_r($_SESSION);
/*session_start();
include '../Functions/Authentication.php';
if (!IsAuthenticated()){
    header('Location: ../index.php');
}
else{
    include '../View/Index_View.php';
    new Index();
}*/

