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
            <title>Delete Alumno</title>
            <link rel="stylesheet" type="text/css" href="View/css/delete.css">
            <meta>
        </head>
        <body>
        <div class="container">
            <div class="header">
            </div>
            <div class="sidebar">
                <ul>
                    <li><a class="enlace" href="?controller=ALUMNO&action=ADD" method="post">Add Alumno</a></li>
                    <li><a class="enlace" href="?controller=ALUMNO&action=DELETE&id=dni" method="post">Delete Alumno</a></li>
                    <li><a class="enlace" href="?controller=ALUMNO&action=SHOWCURRENT&id=dni" method="post">ShowCurrent Alumno</a></li>
                    <li><a class="enlace" href="?controller=ALUMNO&action=SHOWALL" method="post">ShowAll Alumno</a></li>
                    <li><a class="enlace" href="?controller=ALUMNO&action=UPDATE&id=dni" method="post">Update Alumno</a></li>
                    <li><a class="enlace" href="?controller=ASIGNATURA&action=ADD" method="post">Add Asignatura</a></li>
                    <li><a class="enlace" href="?controller=ASIGNATURA&action=DELETE&id=id" method="post">Delete Asignatura</a></li>
                    <li><a class="enlace" href="?controller=ASIGNATURA&action=SHOWALL" method="post">SHOWALL Asignatura</a></li>
                    <li><a class="enlace" href="?controller=ASIGNATURA&action=SHOWCURRENT&id=id" method="post">SHOWCURRENT Asignatura</a></li>
                    <li><a class="enlace" href="?controller=ASIGNATURA&action=UPDATE&id=id" method="post">Update Asignatura</a></li>
                </ul>
            </div>
            <div class="content">
                <a class="enlace" href="?controller=ALUMNO&action=SHOWALLView">Volver</a>
        <h1>Borrar Alumno</h1>
        <form
            action="?controller=ALUMNO&action=DELETE&id=<?php echo $this->values_list["dni"];  ?>" method="post">
            <label for="dni">DNI <?php echo $this->values_list["dni"];  ?></label><br>
            <input type="hidden" name="DNI" value="<?php echo $this->values_list["dni"];  ?>">
            <br>

            <label for="nombre">Nombre <?php echo $this->values_list["nombre"];  ?></label><br>
            <br>

            <label for="apellidos">Apellidos <?php echo $this->values_list["apellidos"]; ?></label><br>
            <br>

            <label for="fecha_nacimiento">Fecha_Nacimiento <?php echo $this->values_list["fecha_nacimiento"]; ?></label><br>
            <br>

            <label for="telefono">Telefono <?php echo $this->values_list["telefono"]; ?></label><br>
            <br>

            <label for="direccion">Direccion <?php echo $this->values_list["direccion"]; ?></label><br>
            <br>


            <label for="es_becario">Es_Becario <?php echo $this->values_list["es_becario"]; ?></label><br>
            <br>

            <input type="submit" value="Borrar">




        </form>
            </div>
            <div class="footer">
            </div>
        </div>
        </body>
        </html>
        <?php
    }
}