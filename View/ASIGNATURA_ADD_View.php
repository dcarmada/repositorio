<?php

/**
 * Created by PhpStorm.
 * User: dcarmada
 * Date: 15/05/2017
 * Time: 20:38
 */
class ASIGNATURA_ADD_View
{
    public function render(){
    ?>
    <html>
    <head>
        <title>Add Asignatura</title>
        <link rel="stylesheet" type="text/css" href="../View/css/add.css">
        <meta charset="UTF-8">
    </head>
    <body>
    <div class="container">
        <div class="header">
            <a href='../Controller/desconectar.php' method='post'><img src='../View/icons/Button-Close-icon.png'></a>
        </div>
        <div class="sidebar">
            <ul>
                <li><a href="../Controller/ALUMNO_Controller.php?controller=ALUMNO&action=SHOWALL" method="post">Gestión de alumnos</a></li>
                <li><a href="?controller=ASIGNATURA&action=SHOWALL" method="post">Gestión de asignaturas</a></li>
            </ul>
        </div>
        <div class="content">
            <a href="?controller=ASIGNATURA&action=SEARCH"><img src='../View/icons/search-icon (1).png'> </a>
            <a href="?controller=ASIGNATURA&action=ADD"><img src='../View/icons/Button-Add-icon.png'> </a>
            <h1>Añadir Asignatura</h1>
            <form
                    action="?controller=ASIGNATURA&action=ADD" method="post">
                <label for="id">ID</label><br>
                <input type="number" step="1" name="id"><br>

                <label for="nombre">Nombre</label><br>
                <input  type="text" name="nombre"><br>

                <label for="num_creditos">Num_creditos</label><br>
                <input type="number" step="1" name="num_creditos"><br>

                <label for="departamento">Departamento</label><br>
                <input type="text" name="departamento"><br>

                <label for="categoria">Categoria</label><br>
                <input type="text" name="categoria"><br>

                <input type="submit" value="Añadir">




            </form>
            <a href="?controller=ASIGNATURA&action=SHOWALLView"><img src='../View/icons/Industry-Return-icon%20(1).png'> </a>
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