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
            <link rel="stylesheet" type="text/css" href="View/css/container.css">
            <link rel="stylesheet" type="text/css" href="View/css/header.css">
            <link rel="stylesheet" type="text/css" href="View/css/sidebar.css">
            <link rel="stylesheet" type="text/css" href="View/css/footer.css">
            <meta charset="UTF-8">
        </head>
        <body>
        <div class="container">
            <?php
            include "View/header.php";
            ?>
            <?php
            include "View/sidebar.php";
            ?>

            <div class="content">
                <a href="?controller=ALUMNO&action=SHOWALLView"><img src='View/icons/Industry-Return-icon%20(1).png'> </a>
                <a href="?controller=ALUMNO&action=ADD"><img src='View/icons/Button-Add-icon.png'> </a>
        <h1>Alumno</h1>
        <?php
        foreach ($this->values_list as $clave => $i) {
            echo "<label>" . ucfirst($clave) . ": $i</label><br>";
        }
        ?>
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