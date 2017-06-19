<?php

session_start();

if (!isset($_SESSION['username'])) {
    header('Location:Controller/login_Controller.php');
} else {
    header('Location:Controller/index_Controller.php');
}

//    header('Location:./Controller/index_Controller.php');

/*session_start();
include './Functions/Authentication.php';

if (!IsAuthenticated()){
    header('Location:./Controller/Login_Controller.php');
}
else{
    header('Location:./Controller/Index_Controller.php');
}*/

