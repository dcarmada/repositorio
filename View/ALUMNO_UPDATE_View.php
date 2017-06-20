<?php

/**
 * Created by PhpStorm.
 * User: dcarmada
 * Date: 26/04/2017
 * Time: 11:35
 */
class ALUMNO_UPDATE_View
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
            <title>Update Alumno</title>
<<<<<<< HEAD
            <link rel="stylesheet" type="text/css" href="View/css/container.css">
            <link rel="stylesheet" type="text/css" href="View/css/header.css">
            <link rel="stylesheet" type="text/css" href="View/css/sidebar.css">
            <link rel="stylesheet" type="text/css" href="View/css/footer.css">
=======
            <link rel="stylesheet" type="text/css" href="../View/css/update.css">
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
                <a href="?controller=ALUMNO&action=SHOWALLView"><img src='View/icons/Industry-Return-icon%20(1).png'> </a>
                <a href="?controller=ALUMNO&action=ADD"><img src='View/icons/Button-Add-icon.png'> </a>
=======
            <div class="header">
                <a href='../Controller/desconectar.php' method='post'><img src='../View/icons/Button-Close-icon.png'></a>
            </div>
            <div class="sidebar">
                <ul>
                    <li><a href="?controller=ALUMNO&action=SHOWALL" method="post">Gestión de alumnos</a></li>
                    <li><a href="../Controller/ASIGNATURA_Controller.php?controller=ASIGNATURA&action=SHOWALL" method="post">Gestión de asignaturas</a></li>
                </ul>
            </div>
            <div class="content">
                <a href="?controller=ALUMNO&action=SEARCH"><img src='../View/icons/search-icon (1).png'> </a>
                <a href="?controller=ALUMNO&action=ADD"><img src='../View/icons/Button-Add-icon.png'> </a>
>>>>>>> ef2e53a93bf697ca2dd0d1afe2934819bfa3e679
        <h1>Actualizar Alumno</h1>
        <form
            action="?controller=ALUMNO&action=UPDATE&id=<?php echo $this->values_list["dni"];  ?>" method="post">
            <label for="dni">DNI</label><br>
            <input type="text" name="dni" value="<?php echo $this->values_list["dni"];  ?>"><br>

            <label for="nombre">Nombre</label><br>
            <input type="text" name="nombre" value="<?php echo $this->values_list["nombre"];  ?>"><br>

            <label for="apellidos">Apellidos</label><br>
            <input type="text" name="apellidos" value="<?php echo $this->values_list["apellidos"]; ?>"><br>

            <label for="fecha_nacimiento">Fecha_Nacimiento</label><br>
            <input type="text" name="fecha_nacimiento" value="<?php echo $this->values_list["fecha_nacimiento"]; ?>"><br>

            <label for="telefono">Telefono</label><br>
            <input type="number" min="0" name="telefono" value="<?php echo $this->values_list["telefono"]; ?>"><br>

            <label for="direccion">Direccion</label><br>
            <input type="text" name="direccion" value="<?php echo $this->values_list["direccion"]; ?>"><br>

            <input type="checkbox" name="es_becario" value="<?php echo $this->values_list["es_becario"]; ?>"><br>
            <label for="es_becario">Es_Becario</label><br>

            <input type="submit" value="Actualizar">


        </form>
                <a href="?controller=ALUMNO&action=SHOWALLView"><img src='../View/icons/Industry-Return-icon%20(1).png'> </a>
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