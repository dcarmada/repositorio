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
            <link rel="stylesheet" type="text/css" href="../View/css/update.css">
            <meta charset="UTF-8">
        </head>
        <body>
        <div class="container">
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
            <div class="footer">
                <h2>Página generada el día:</h2>
                <script>
                    var mydate=new Date();
                    var year=mydate.getYear();
                    if (year < 1000)
                        year+=1900;
                    var day=mydate.getDay();
                    var month=mydate.getMonth()+1;
                    if (month<10)
                        month="0"+month;
                    var daym=mydate.getDate();
                    if (daym<10)
                        daym="0"+daym;
                    document.write("<big><font color='000000' face='Arial'><b>"+daym+"/"+month+"/"+year+"</b></font></big>")

                </script>
            </div>
        </div>
        </body>
        </html>
        <?php
    }
}