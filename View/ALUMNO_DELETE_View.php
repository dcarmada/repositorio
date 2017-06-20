<?php

/**
 * Created by PhpStorm.
 * User: dcarmada
 * Date: 26/04/2017
 * Time: 11:35
 */
class ALUMNO_DELETE_View
{
    private $values_list;

    public function __construct($values_list)
    {
        //parent::__construct($field_list, $values_list);
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

    public function render()
    {
        ?>
        <html>
        <head>
            <title>Delete Alumno</title>
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
                <a href="?controller=ALUMNO&action=SHOWALLView"><img src='View/icons/Industry-Return-icon%20(1).png'></a>
                <a href="?controller=ALUMNO&action=ADD"><img src='View/icons/Button-Add-icon.png'> </a>
                <h1>Borrar Alumno</h1>
                <form
                        action="?controller=ALUMNO&action=DELETE&id=<?php echo $this->values_list["dni"]; ?>"
                        method="post">

                            <label for="dni">DNI <?php echo $this->values_list["dni"]; ?></label>

                            <input type="hidden" name="DNI" value="<?php echo $this->values_list["dni"]; ?>"><br>

                            <label for="nombre">Nombre <?php echo $this->values_list["nombre"]; ?></label><br>

                            <label for="apellidos">Apellidos <?php echo $this->values_list["apellidos"]; ?></label><br>

                            <label for="fecha_nacimiento">Fecha_Nacimiento <?php echo $this->values_list["fecha_nacimiento"]; ?></label><br>

                            <label for="telefono">Telefono <?php echo $this->values_list["telefono"]; ?></label><br>

                            <label for="direccion">Direccion <?php echo $this->values_list["direccion"]; ?></label><br>

                            <label for="es_becario">Es_Becario <?php echo $this->values_list["es_becario"]; ?></label><br>

                            <input type="submit" value="Borrar"><br>
                </form>
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