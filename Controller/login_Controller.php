<?php
include_once "../PDO_Connection.php";
include_once "../View/login_View.php";
include_once "../Model/USUARIO_Model.php";

include_once "change_language.php";


login();

function login()
{
    if ($_POST) {
        if (isset($_POST["username"]) && isset($_POST["password"])) {
            $model = new USUARIO_Model();
            $resultado = $model->validate($_POST["username"], $_POST["password"]);
            if (empty($resultado)) {
                //MENSAJE DE ERROR
                echo "ERROR";
            } else {
                session_start();
                $_SESSION['username'] = $_POST['username'];
                session_write_close();
                header("Location: ../index.php");
                exit();
            }
        }
    } else {
        $view = new login_View();
        $view->render();
    }
}
