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
                <a class='enlace' href='?controller=ALUMNO&action=SHOWALL' method='post'><img src='View/icons/Button-Close-icon.png'></a>
            </div>
            <div class="sidebar">
                <ul>
                    <li><a class="enlace" href="?controller=ALUMNO&action=SHOWALL" method="post">Gestión de alumnos</a></li>
                    <li><a class="enlace" href="?controller=ASIGNATURA&action=SHOWALL" method="post">Gestión de asignaturas</a></li>
                </ul>
            </div>
            <div class="content">
                <a class="enlace" href="?controller=ASIGNATURA&action=SHOWALLView"><img src='View/icons/Industry-Return-icon%20(1).png'> </a>
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