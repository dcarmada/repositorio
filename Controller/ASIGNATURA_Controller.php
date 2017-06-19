<?php
include_once "../PDO_Connection.php";
include_once "../Model/ASIGNATURA_Model.php";
include_once "../View/SHOWALL_View.php";
include_once "../View/ASIGNATURA_SHOWALL_View.php";
include_once "../View/ASIGNATURA_UPDATE_View.php";
include_once "../View/ASIGNATURA_DELETE_View.php";
include_once "../View/ASIGNATURA_SEARCH_View.php";
$action = "showAll";
if (isset($_GET["action"])) {
    $action = strtoupper($_GET["action"]);
    if (!function_exists($action)) {
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
    case "SEARCH":
        $id=null;
        if(isset($_GET["$id"])){
            $id=$_GET["$id"];
        }
        search();
        break;
    default:
        echo "FALTA ACCIÓN";
}

function showAll()
{
    $asignatura_model = new ASIGNATURA_Model();
    $values_list = $asignatura_model->getAll();


    $field_list = ["id", "nombre", "num_creditos", "departamento", "categoria"];
    $view = new ASIGNATURA_SHOWALL_View($field_list, $values_list);
    $view->render();
}

function showCurrent($id)
{
    include_once "../View/ASIGNATURA_SHOWCURRENT_View.php";
    if (isset($id) && !is_null($id) && $id !== "") {
        $asignatura_model = new ASIGNATURA_Model();
        $values_list = $asignatura_model->getById($id);
        $view = new ASIGNATURA_SHOWCURRENT_View($values_list);
        $view->render();
    } else {
        echo "Falta id";
        echo "<a class=\"enlace\" href=\"?controller=ASIGNATURA&action=SHOWALLView\"><img src='../View/icons/Industry-Return-icon%20(1).png'>";
    }
}

function add()
{
//echo sizeof($_POST); esto no hace falta
    if (sizeof($_POST) == 0) {
        include_once "../View/ASIGNATURA_ADD_View.php";
        $view = new ASIGNATURA_ADD_View();
        $view->render();
    } else {
        $asignatura = new ASIGNATURA_Model();
        $asignatura->addAsignatura($_POST['id'], $_POST['nombre'], $_POST['num_creditos'],
            $_POST['departamento'],
            $_POST['categoria']);
        echo "Insertada";
        echo "<a class=\"enlace\" href=\"?controller=ASIGNATURA&action=SHOWALLView\"><img src='../View/icons/Industry-Return-icon%20(1).png'>";
    }
}
function update($id){
    if (!$_POST) {
        if (isset($id) && !is_null($id) && $id !== "") {
            $asignatura_model = new ASIGNATURA_Model();
            $values_list = $asignatura_model->getById($id);
            $view = new ASIGNATURA_UPDATE_View($values_list);
            $view->render();
        } else {
            echo "Falta id";
            echo "<a class=\"enlace\" href=\"?controller=ASIGNATURA&action=SHOWALLView\"><img src='../View/icons/Industry-Return-icon%20(1).png'>";
        }
    }else{
        try {
            $asignatura = new ASIGNATURA_Model();
            $asignatura->updateAsignatura($id, $_POST['nombre'], $_POST['num_creditos'],
                $_POST['departamento'],
                $_POST['categoria']);
            echo "Actualizada";
            echo "<a class=\"enlace\" href=\"?controller=ASIGNATURA&action=SHOWALLView\"><img src='../View/icons/Industry-Return-icon%20(1).png'>";
        }catch (Exception $e){
            echo "Error en la base de datos";
            echo "<a class=\"enlace\" href=\"?controller=ASIGNATURA&action=SHOWALLView\"><img src='../View/icons/Industry-Return-icon%20(1).png'>";
        }
    }

}
function delete($id)
{
    if (!$_POST) {
        if (isset($id) && !is_null($id) && $id !== "") {
            $asignatura_model = new ASIGNATURA_Model();
            $values_list = $asignatura_model->getById($id);
            $view = new ASIGNATURA_DELETE_View($values_list);
            $view->render();
        } else {
            echo "Falta id";
        }
    } else {
        $asignatura = new ASIGNATURA_Model();
        $asignatura->deleteAsignatura($id);
        echo "Borrada";
        echo "<a class=\"enlace\" href=\"?controller=ASIGNATURA&action=SHOWALLView\"><img src='../View/icons/Industry-Return-icon%20(1).png'>";
    }
}
function search()
{
    if (sizeof($_POST) == 0) {
        include_once "../View/ASIGNATURA_SEARCH_View.php";
        $view = new ASIGNATURA_SEARCH_View();
        $view->render();
    } else {
        $asignatura = new ASIGNATURA_Model();
        $values_list= $asignatura->searchAsignatura($_POST['id'], $_POST['nombre'], $_POST['num_creditos'], $_POST['departamento'],
            $_POST['categoria']);
        $asignatura_model = new ASIGNATURA_Model();
        //$values_list = $asignatura_model->getAll();


        $field_list = ["id", "nombre", "num_creditos", "departamento", "categoria"];
        $view = new ASIGNATURA_SHOWALL_View($field_list, $values_list);
        $view->render();

    }
}
