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
            <meta>
        </head>
        <body>
        <h3>Actualizar Alumno</h3>
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
        </body>
        </html>
        <?php
    }
}