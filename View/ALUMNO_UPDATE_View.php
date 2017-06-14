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
            <link rel="stylesheet" type="text/css" href="View/css/update.css">
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
        <h1>Actualizar Alumno</h1>
        <form
            action="?controller=ALUMNO&action=UPDATE&id=<?php echo $this->values_list["dni"];  ?>" method="post">
            <label for="dni">DNI</label><br>
            <input id="dni" type="text" name="dni" value="<?php echo $this->values_list["dni"];  ?>"><br>

            <label for="nombre">Nombre</label><br>
            <input id="nombre" type="text" name="nombre" value="<?php echo $this->values_list["nombre"];  ?>"><br>

            <label for="apellidos">Apellidos</label><br>
            <input id="apellidos" type="text" name="apellidos" value="<?php echo $this->values_list["apellidos"]; ?>"><br>

            <label for="fecha_nacimiento">Fecha_Nacimiento</label><br>
            <input id="fecha_nacimiento" type="text" name="fecha_nacimiento" value="<?php echo $this->values_list["fecha_nacimiento"]; ?>"><br>

            <label for="telefono">Telefono</label><br>
            <input id="telefono" type="number" min="0" name="telefono" value="<?php echo $this->values_list["telefono"]; ?>"><br>

            <label for="direccion">Direccion</label><br>
            <input id="direccion" type="text" name="direccion" value="<?php echo $this->values_list["direccion"]; ?>"><br>

            <input type="checkbox" id="es_becario" name="es_becario" value="<?php echo $this->values_list["es_becario"]; ?>"><br>
            <label for="es_becario">Es_Becario</label><br>

            <input type="submit" value="Actualizar">




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