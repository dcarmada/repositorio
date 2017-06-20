<?php

/**
 * Created by PhpStorm.
 * User: dcarmada
 * Date: 15/05/2017
 * Time: 21:38
 */
class ASIGNATURA_DELETE_View
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
            <title>Delete Asignatura</title>
<<<<<<< HEAD
            <link rel="stylesheet" type="text/css" href="View/css/container.css">
            <link rel="stylesheet" type="text/css" href="View/css/header.css">
            <link rel="stylesheet" type="text/css" href="View/css/sidebar.css">
            <link rel="stylesheet" type="text/css" href="View/css/footer.css">
=======
            <link rel="stylesheet" type="text/css" href="../View/css/delete.css">
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
        <h1>Borrar Asignatura</h1>
        <form
            action="?controller=ASIGNATURA&action=DELETE&id=<?php echo $this->values_list["id"];  ?>" method="post">
            <label for="id">ID <?php echo $this->values_list["id"];  ?></label><br>
            <input type="hidden" name="ID" value="<?php echo $this->values_list["id"];  ?>">
            <br>

            <label for="nombre">Nombre <?php echo $this->values_list["nombre"];  ?></label><br>
            <br>

            <label for="num_creditos">Num_Creditos <?php echo $this->values_list["num_creditos"]; ?></label><br>
            <br>

            <label for="departamento">Departamento <?php echo $this->values_list["departamento"]; ?></label><br>
            <br>

            <label for="categoria">Categoria <?php echo $this->values_list["categoria"]; ?></label><br>
            <br>

            <input type="submit" value="Borrar">


        </form>
                        <a href="?controller=ASIGNATURA&action=SHOWALLView"><img src='../View/icons/Industry-Return-icon%20(1).png'> </a>
            </div>
            <?php
            include "View/footer.php";
            ?>
        </div>
        </body>
        <a href="?controller=ASIGNATURA&action=SHOWALLView">Volver</a>
        </html>
        <?php
    }
}