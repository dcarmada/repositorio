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
            <meta charset="UTF-8">
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
                        <a class="enlace" href="?controller=ASIGNATURA&action=SEARCH"><img src='View/icons/search-icon (1).png'> </a>
                        <a class="enlace" href="?controller=ASIGNATURA&action=ADD"><img src='View/icons/Button-Add-icon.png'> </a>
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
                        <a class="enlace" href="?controller=ASIGNATURA&action=SHOWALLView"><img src='View/icons/Industry-Return-icon%20(1).png'> </a>
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
        <a class="enlace" href="?controller=ASIGNATURA&action=SHOWALLView">Volver</a>
        </html>
        <?php
    }
}