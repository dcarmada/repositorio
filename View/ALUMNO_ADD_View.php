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
    <html>
    <head>
        <title>Add Alumno</title>
        <meta>
    </head>
    <body>
    <h3>Añadir Alumno</h3>
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
    </body>
    </html>
    <?php
}
}