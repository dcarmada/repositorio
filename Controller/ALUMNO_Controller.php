<?php
include_once "PDO_Connection.php";
include_once "Model/ALUMNO_Model.php";
include_once "View/SHOWALL_View.php";
include_once "View/ALUMNO_SHOWALL_View.php";
include_once "View/ALUMNO_UPDATE_View.php";
include_once "View/ALUMNO_DELETE_View.php";
include_once "View/ALUMNO_SEARCH_View.php";

function showAll()
{
    $alumno_model = new ALUMNO_Model();
    $values_list = $alumno_model->getAll();


    $field_list = ["dni", "nombre", "apellidos", "fecha_nacimiento", "telefono", "direccion"];
    $view = new ALUMNO_SHOWALL_View($field_list, $values_list);
//$alumno_model->addAlumno("85142028C", utf8_decode("Néstor"), utf8_decode("Brandín Cachafeiro"), new DateTime("15-4-1995"), 988745622, "Calle nadie", true);
//$alumno_model->addAlumno("75142028H", utf8_decode("Adrián"), "Araujo Gregorio", new DateTime("15-4-1995"), 988745623, "Calle u", true);
    $view->render();
}

function showCurrent($id)
{
    include_once "View/ALUMNO_SHOWCURRENT_View.php";
    if (isset($id) && !is_null($id) && $id !== "") {
        $alumno_model = new ALUMNO_Model();
        $values_list = $alumno_model->getByDNI($id);
        $view = new ALUMNO_SHOWCURRENT_View($values_list);
        $view->render();
    } else {
        echo "Falta id";
        echo "<a class=\"enlace\" href=\"?controller=ALUMNO&action=SHOWALLView\"><img src='View/icons/Industry-Return-icon%20(1).png'>";
    }
}

function add()
{
//echo sizeof($_POST); esto no hace falta
    if (sizeof($_POST) == 0) {
        include_once "View/ALUMNO_ADD_View.php";
        $view = new ALUMNO_ADD_View();
        $view->render();
    } else {
        $alumno = new ALUMNO_Model();
        $alumno->addAlumno($_POST['dni'], $_POST['nombre'], $_POST['apellidos'],
            new DateTime($_POST['fecha_nacimiento']), $_POST['telefono'],
            $_POST['direccion'], isset($_POST['es_becario']));
        echo "Insertado";
        echo "<a class=\"enlace\" href=\"?controller=ALUMNO&action=SHOWALLView\"><img src='View/icons/Industry-Return-icon%20(1).png'>";
    }
}

function update($id)
{
    if (!$_POST) {
        if (isset($id) && !is_null($id) && $id !== "") {
            $alumno_model = new ALUMNO_Model();
            $values_list = $alumno_model->getByDNI($id);
            $view = new ALUMNO_UPDATE_View($values_list);
            $view->render();
        } else {
            echo "Falta id";
            echo "<a class=\"enlace\" href=\"?controller=ALUMNO&action=SHOWALLView\"><img src='View/icons/Industry-Return-icon%20(1).png'>";
        }
    } else {
        $alumno = new ALUMNO_Model();
        $alumno->updateAlumno($id, $_POST['nombre'], $_POST['apellidos'],
            new DateTime($_POST['fecha_nacimiento']), $_POST['telefono'],
            $_POST['direccion'], isset($_POST['es_becario']));
        echo "Actualizado";
        echo "<a class=\"enlace\" href=\"?controller=ALUMNO&action=SHOWALLView\"><img src='View/icons/Industry-Return-icon%20(1).png'>";
    }
}

function delete($id)
{
    if (!$_POST) {
        if (isset($id) && !is_null($id) && $id !== "") {
            $alumno_model = new ALUMNO_Model();
            $values_list = $alumno_model->getByDNI($id);
            $view = new ALUMNO_DELETE_View($values_list);
            $view->render();
        } else {
            echo "Falta id";
            echo "<a class=\"enlace\" href=\"?controller=ALUMNO&action=SHOWALLView\"><img src='View/icons/Industry-Return-icon%20(1).png'>";
        }
    } else {
        $alumno = new ALUMNO_Model();
        $alumno->deleteAlumno($id);
        echo "Borrado";
        echo "<a class=\"enlace\" href=\"?controller=ALUMNO&action=SHOWALLView\"><img src='View/icons/Industry-Return-icon%20(1).png'>";
    }
}

function search()
{
    if (sizeof($_POST) == 0) {
        include_once "View/ALUMNO_SEARCH_View.php";
        $view = new ALUMNO_SEARCH_View();
        $view->render();
    } else {
        $alumno = new ALUMNO_Model();
        $date = null;
        if (isset($_POST['fecha_nacimiento']) && !is_null($_POST['fecha_nacimiento']) && !empty($_POST['fecha_nacimiento']))
            $date = new DateTime($_POST['fecha_nacimiento']);
        $values_list= $alumno->searchAlumno($_POST['dni'], $_POST['nombre'], $_POST['apellidos'],
            $date, $_POST['telefono'],
            $_POST['direccion'], isset($_POST['es_becario']));
        $alumno_model = new ALUMNO_Model();
        //$values_list = $alumno_model->getAll();


        $field_list = ["dni", "nombre", "apellidos", "fecha_nacimiento", "telefono", "direccion"];
        $view = new ALUMNO_SHOWALL_View($field_list, $values_list);
//$alumno_model->addAlumno("85142028C", utf8_decode("Néstor"), utf8_decode("Brandín Cachafeiro"), new DateTime("15-4-1995"), 988745622, "Calle nadie", true);
//$alumno_model->addAlumno("75142028H", utf8_decode("Adrián"), "Araujo Gregorio", new DateTime("15-4-1995"), 988745623, "Calle u", true);
        $view->render();

    }
}
