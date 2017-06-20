<?php

/**
 * Created by PhpStorm.
 * User: dcarmada
 * Date: 15/05/2017
 * Time: 20:56
 */
class ASIGNATURA_UPDATE_View
{
    private $values_list;
    public function __construct($values_list)
    {
        //parent::__construct($field_list, $values_list);
        $this->values_list=$values_list;
    }
    /**
     * @return array
     */
    public function getValuesList()
    {
        return $this->values_list;
    }

    /**
     * @param array $values_list
     */
    public function setValuesList($values_list)
    {
        $this->values_list = $values_list;
    }
    public function render(){
        ?>
        <html>
        <head>
            <title>Update Asignatura</title>
<<<<<<< HEAD
            <link rel="stylesheet" type="text/css" href="View/css/container.css">
            <link rel="stylesheet" type="text/css" href="View/css/header.css">
            <link rel="stylesheet" type="text/css" href="View/css/sidebar.css">
            <link rel="stylesheet" type="text/css" href="View/css/footer.css">
=======
            <link rel="stylesheet" type="text/css" href="../View/css/add.css">
>>>>>>> ef2e53a93bf697ca2dd0d1afe2934819bfa3e679
            <meta charset="UTF-8">
        </head>
        <body>
        <div class="container">
<<<<<<< HEAD

            <?php
            include "View/header.php";
            ?>
            <?php
            include "View/sidebar.php";
            ?>

            <div class="content">
                <a href="?controller=ASIGNATURA&action=SHOWALLView"><img src='View/icons/Industry-Return-icon%20(1).png'> </a>
                <a href="?controller=ASIGNATURA&action=ADD"><img src='View/icons/Button-Add-icon.png'> </a>
=======
            <div class="header">
                <a href='../Controller/desconectar.php' method='post'><img src='../View/icons/Button-Close-icon.png'></a>
            </div>
            <div class="sidebar">
                <ul>
                    <li><a href="../Controller/ALUMNO_Controller.php?controller=ALUMNO&action=SHOWALL" method="post">Gestión de alumnos</a></li>
                    <li><a href="?controller=ASIGNATURA&action=SHOWALL" method="post">Gestión de asignaturas</a></li>
                </ul>
            </div>
            <div class="content">
                <a href="?controller=ASIGNATURA&action=SEARCH"><img src='../View/icons/search-icon (1).png'> </a>
                <a href="?controller=ASIGNATURA&action=ADD"><img src='../View/icons/Button-Add-icon.png'> </a>
>>>>>>> ef2e53a93bf697ca2dd0d1afe2934819bfa3e679
        <h1>Actualizar Asignatura</h1>
        <form
            action="?controller=ASIGNATURA&action=UPDATE&id=<?php echo $this->values_list["id"];  ?>" method="post">
            <label for="id">ID</label><br>
            <input type="number" step="1" name="id" value="<?php echo $this->values_list["id"];  ?>"><br>

            <label for="nombre">Nombre</label><br>
            <input type="text" name="nombre" value="<?php echo $this->values_list["nombre"];  ?>"><br>

            <label for="num_creditos">Num_creditos</label><br>
            <input type="number" step="1" name="num_creditos" value="<?php echo $this->values_list["num_creditos"]; ?>"><br>

            <label for="departamento">Departamento</label><br>
            <input type="text" name="departamento" value="<?php echo $this->values_list["departamento"]; ?>"><br>

            <label for="categoria">Categoria</label><br>
            <input type="text" name="categoria" value="<?php echo $this->values_list["categoria"]; ?>"><br>

            <input type="submit" value="Actualizar">

        </form>
                <a href="?controller=ASIGNATURA&action=SHOWALLView"><img src='../View/icons/Industry-Return-icon%20(1).png'> </a>
            </div>
            <?php
            include "View/footer.php";
            ?>
        </div>
        </body>
        </html>
        <?php
    }
}