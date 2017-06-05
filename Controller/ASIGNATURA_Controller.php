<?php
include_once "PDO_Connection.php";
include_once "Model/ASIGNATURA_Model.php";
include_once "View/SHOWALL_View.php";
include_once "View/ASIGNATURA_SHOWALL_View.php";
include_once "View/ASIGNATURA_UPDATE_View.php";
include_once "View/ASIGNATURA_DELETE_View.php";

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
    include_once "View/ASIGNATURA_SHOWCURRENT_View.php";
    if (isset($id) && !is_null($id) && $id !== "") {
        $asignatura_model = new ASIGNATURA_Model();
        $values_list = $asignatura_model->getById($id);
        $view = new ASIGNATURA_SHOWCURRENT_View($values_list);
        $view->render();
    } else {
        echo "Falta id";
    }
}

function add()
{
//echo sizeof($_POST); esto no hace falta
    if (sizeof($_POST) == 0) {
        include_once "View/ASIGNATURA_ADD_View.php";
        $view = new ASIGNATURA_ADD_View();
        $view->render();
    } else {
        $asignatura = new ASIGNATURA_Model();
        $asignatura->addAsignatura($_POST['id'], $_POST['nombre'], $_POST['num_creditos'],
             $_POST['departamento'],
            $_POST['categoria']);
        echo "Insertada";
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
        }
    }else{
        try {
            $asignatura = new ASIGNATURA_Model();
            $asignatura->updateAsignatura($id, $_POST['nombre'], $_POST['num_creditos'],
                $_POST['departamento'],
                $_POST['categoria']);
            echo "Actualizada";
        }catch (Exception $e){
            echo "Error en la base de datos";
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
    }
}
