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
                        <a class="enlace" href="?controller=ASIGNATURA&action=SHOWALLView">Volver</a>
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
            </div>
            <div class="footer">
            </div>
        </div>
        </body>
        <a class="enlace" href="?controller=ASIGNATURA&action=SHOWALLView">Volver</a>
        </html>
        <?php
    }
}