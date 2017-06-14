<?php

/**
 * Created by PhpStorm.
 * User: dcarmada
 * Date: 17/04/2017
 * Time: 21:20
 */
class ALUMNO_ADD_View
{
    public function render(){
        ?>
        <html lang="en">
        <head>
            <title>Add Alumno</title>
            <link rel="stylesheet" type="text/css" href="View/css/add.css">
            <meta charset="UTF-8">
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
            <a class="enlace" href="?controller=ALUMNO&action=SHOWALLView">Volver</a>
        <h1>Añadir Alumno</h1>
        <form
            action="?controller=ALUMNO&action=ADD" method="post">
            <label for="dni">DNI</label><br>
            <input id="dni" type="text" name="dni"><br>

            <label for="nombre">Nombre</label><br>
            <input id="nombre" type="text" name="nombre"><br>

            <label for="apellidos">Apellidos</label><br>
            <input id="apellidos" type="text" name="apellidos"><br>

            <label for="fecha_nacimiento">Fecha_Nacimiento</label><br>
            <input id="fecha_nacimiento" type="text" name="fecha_nacimiento"><br>

            <label for="telefono">Telefono</label><br>
            <input id="telefono" type="number" min="0" name="telefono"><br>

            <label for="direccion">Direccion</label><br>
            <input id="direccion" type="text" name="direccion"><br>

            <input type="checkbox" id="es_becario" name="es_becario"><br>
            <label for="es_becario">Es_Becario</label><br>

            <input type="submit" value="Añadir">



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