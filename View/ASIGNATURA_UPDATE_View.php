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
            <link rel="stylesheet" type="text/css" href="View/css/add.css">
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
                <a class="enlace" href="?controller=ASIGNATURA&action=SHOWALLView">Volver</a>
        <h1>Actualizar Asignatura</h1>
        <form
            action="?controller=ASIGNATURA&action=UPDATE&id=<?php echo $this->values_list["id"];  ?>" method="post">
            <label for="id">ID</label><br>
            <input id="id" type="number" step="1" name="id" value="<?php echo $this->values_list["id"];  ?>"><br>

            <label for="nombre">Nombre</label><br>
            <input id="nombre" type="text" name="nombre" value="<?php echo $this->values_list["nombre"];  ?>"><br>

            <label for="num_creditos">Num_creditos</label><br>
            <input id="num_creditos" type="number" step="1" name="num_creditos" value="<?php echo $this->values_list["num_creditos"]; ?>"><br>

            <label for="departamento">Departamento</label><br>
            <input id="departamento" type="text" name="departamento" value="<?php echo $this->values_list["departamento"]; ?>"><br>

            <label for="categoria">Categoria</label><br>
            <input id="categoria" type="text" name="categoria" value="<?php echo $this->values_list["categoria"]; ?>"><br>

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