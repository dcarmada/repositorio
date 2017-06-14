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
                <a class="enlace" href="?controller=ASIGNATURA&action=SHOWALLView">Volver</a>
        <h1 class="títuloH1">Añadir Asignatura</h1>
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
            </div>
            <div class="footer">
            </div>
        </div>
        </body>
        </html>
        <?php
    }
}