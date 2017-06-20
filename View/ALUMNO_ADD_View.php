<?php

/**
 * Created by PhpStorm.
 * User: dcarmada
 * Date: 17/04/2017
 * Time: 21:20
 */
class ALUMNO_ADD_View
{
    public function render()
    {
        ?>
        <html lang="en">
        <head>
            <title>Add Alumno</title>
            <link rel="stylesheet" type="text/css" href="View/css/container.css">
            <link rel="stylesheet" type="text/css" href="View/css/header.css">
            <link rel="stylesheet" type="text/css" href="View/css/sidebar.css">
            <link rel="stylesheet" type="text/css" href="View/css/footer.css">

            <meta charset="UTF-8">
        </head>
        <body>
        <div class="container">
            <?php
            include "View/header.php";
            ?>
            <?php
            include "View/sidebar.php";
            ?>

            <div class="content">
                <a href="?controller=ALUMNO&action=SHOWALLView"><img src='View/icons/Industry-Return-icon%20(1).png'>
                </a>
                <a href="?controller=ALUMNO&action=ADD"><img src='View/icons/Button-Add-icon.png'> </a>
                <h1>Añadir Alumno</h1>
                <form
                        action="?controller=ALUMNO&action=ADD" method="post">

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

                    <input type="submit" value="Añadir"><br>

                </form>
            </div>

            <?php
            include "View/footer.php";
            ?>

        </div>
        </body>
        </html>
        <?php
    }
}