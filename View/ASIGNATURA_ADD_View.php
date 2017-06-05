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
            <meta>
        </head>
        <body>
        <h3>Añadir Asignatura</h3>
        <form
            action="?controller=ASIGNATURA&action=ADD" method="post">
            <label for="id">ID</label><br>
            <input id="id" type="number" step="1" name="id"><br>

            <label for="nombre">Nombre</label><br>
            <input id="nombre" type="text" name="nombre"><br>

            <label for="num_creditos">Num_creditos</label><br>
            <input id="num_creditos" type="number" step="1" name="num_creditos"><br>

            <label for="departamento">Departamento</label><br>
            <input id="departamento" type="text" name="departamento"><br>

            <label for="categoria">Categoria</label><br>
            <input id="categoria" type="text" name="categoria"><br>

            <input type="submit" value="Añadir">




        </form>
        </body>
        </html>
        <?php
    }
}