<?php
$controller = "ALUMNO";
if (isset($_GET["controller"])) {
    $controller = $_GET["controller"];
}
include_once "Controller/" . $controller . "_Controller.php";
$action = "showAll";
if (isset($_GET["action"])) {
    $action = strtoupper($_GET["action"]);
    if (!function_exists($action)) {
        echo "Hola";
        $action = "SHOWALL";
    }
}
switch ($action) {
    case "SHOWALL":
        showAll();
        break;
    case "SHOWCURRENT":
        $id = null;
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
        }
        showCurrent($id);
        break;
    case "ADD":
        add();
        break;
    case "UPDATE":
        $id = null;
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
        }
        update($id);
        break;
    case "DELETE":
        $id=null;
        if(isset($_GET["id"])){
            $id=$_GET["id"];
        }
        delete($id);
        break;
    default:
        echo "FALTA ACCIÓN";
}