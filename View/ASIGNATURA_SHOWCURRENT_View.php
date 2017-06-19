<?php

class ASIGNATURA_SHOWCURRENT_View
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

    public function render()
    {
        ?>
        <html>
        <head>
            <title> Asignatura</title>
            <link rel="stylesheet" type="text/css" href="../View/css/showcurrent.css">
            <meta charset="UTF-8">
        </head>
        <body>
        <div class="container">
            <div class="header">
                <a class='enlace' href='?controller=ALUMNO&action=SHOWALL' method='post'><img src='../View/icons/Button-Close-icon.png'></a>
            </div>
            <div class="sidebar">
                <ul>
                    <li><a class="enlace" href="../Controller/ALUMNO_Controller.php?controller=ALUMNO&action=SHOWALL" method="post">Gestión de alumnos</a></li>
                    <li><a class="enlace" href="?controller=ASIGNATURA&action=SHOWALL" method="post">Gestión de asignaturas</a></li>
                </ul>
            </div>
            <div class="content">
                <a class="enlace" href="?controller=ASIGNATURA&action=SEARCH"><img src='../View/icons/search-icon (1).png'> </a>
                <a class="enlace" href="?controller=ASIGNATURA&action=ADD"><img src='../View/icons/Button-Add-icon.png'> </a>
        <h1>Asignatura</h1>
        <?php
        foreach ($this->values_list as $clave => $i) {
            echo "<label>".ucfirst($clave).":$i</label><br>";
        }

        ?>
                <a class="enlace" href="?controller=ASIGNATURA&action=SHOWALLView"><img src='../View/icons/Industry-Return-icon%20(1).png'> </a>
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