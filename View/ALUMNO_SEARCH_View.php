<?php

/**
 * Created by PhpStorm.
 * User: DACA
 * Date: 15/06/2017
 * Time: 18:46
 */
class ALUMNO_SEARCH_View
{
    public function render(){
        ?>
        <html lang="en">
        <head>
            <title>Search Alumno</title>
            <link rel="stylesheet" type="text/css" href="../View/css/add.css">
            <meta charset="UTF-8">
        </head>
        <body>
        <div class="container">
            <div class="header">
                <a class='enlace' href='?controller=ALUMNO&action=SHOWALL' method='post'><img src='../View/icons/Button-Close-icon.png'></a>
            </div>
            <div class="sidebar">
                <ul>
                    <li><a class="enlace" href="?controller=ALUMNO&action=SHOWALL" method="post">Gestión de alumnos</a></li>
                    <li><a class="enlace" href="../Controller/ASIGNATURA_Controller.php?controller=ASIGNATURA&action=SHOWALL" method="post">Gestión de asignaturas</a></li>
                </ul>
            </div>
            <div class="content">
                <a class="enlace" href="?controller=ALUMNO&action=SEARCH"><img src='../View/icons/search-icon (1).png'> </a>
                <a class="enlace" href="?controller=ALUMNO&action=ADD"><img src='../View/icons/Button-Add-icon.png'> </a>
                <h1>Buscar Alumno</h1>
                <form
                    action="?controller=ALUMNO&action=SEARCH" method="post">
                    <label for="dni">DNI</label><br>
                    <input id="dni" type="text" name="dni"><br>

                    <label for="nombre">Nombre</label><br>
                    <input type="text" name="nombre"><br>

                    <label for="apellidos">Apellidos</label><br>
                    <input type="text" name="apellidos"><br>

                    <label for="fecha_nacimiento">Fecha_Nacimiento</label><br>
                    <input type="text" name="fecha_nacimiento"><br>

                    <label for="telefono">Telefono</label><br>
                    <input type="number" min="0" name="telefono"><br>

                    <label for="direccion">Direccion</label><br>
                    <input type="text" name="direccion"><br>

                    <input type="checkbox" id="es_becario" name="es_becario"><br>
                    <label for="es_becario">Es_Becario</label><br>

                    <input type="submit" value="Buscar">



                </form>
                <a class="enlace" href="?controller=ALUMNO&action=SHOWALLView"><img src='../View/icons/Industry-Return-icon%20(1).png'> </a>
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