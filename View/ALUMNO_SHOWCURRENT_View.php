<?php

class ALUMNO_SHOWCURRENT_View
{
    private $values_list;

    public function __construct(array $values_list)
    {
        $this->values_list = $values_list;
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

//        var_dump($this->getValuesList());
    public function render()
    {
        ?>
        <html>
        <head>
            <title> Alumno</title>
<<<<<<< HEAD
            <link rel="stylesheet" type="text/css" href="View/css/container.css">
            <link rel="stylesheet" type="text/css" href="View/css/header.css">
            <link rel="stylesheet" type="text/css" href="View/css/sidebar.css">
            <link rel="stylesheet" type="text/css" href="View/css/footer.css">
=======
            <link rel="stylesheet" type="text/css" href="../View/css/showcurrent.css">
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
                <a" href="?controller=ALUMNO&action=ADD"><img src='../View/icons/Button-Add-icon.png'> </a>
>>>>>>> ef2e53a93bf697ca2dd0d1afe2934819bfa3e679
        <h1>Alumno</h1>
        <?php
        foreach ($this->values_list as $clave => $i) {
            echo "<label>" . ucfirst($clave) . ": $i</label><br>";
        }
        ?>
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