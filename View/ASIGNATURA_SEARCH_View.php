<?php

/**
 * Created by PhpStorm.
 * User: DACA
 * Date: 15/06/2017
 * Time: 18:47
 */
class ASIGNATURA_SEARCH_View
{
    public function render(){
        ?>
        <html>
        <head>
            <title>Add Asignatura</title>
            <link rel="stylesheet" type="text/css" href="View/css/add.css">
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
                <a class="enlace" href="?controller=ASIGNATURA&action=SHOWALLView"><img src='View/icons/Industry-Return-icon%20(1).png'> </a>
                <a class="enlace" href="?controller=ASIGNATURA&action=ADD"><img src='View/icons/Button-Add-icon.png'> </a>
                <h1 class="títuloH1">Añadir Asignatura</h1>
                <form
                    action="?controller=ASIGNATURA&action=SEARCH" method="post">
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