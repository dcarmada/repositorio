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
                <a href="?controller=ASIGNATURA&action=SHOWALLView"><img src='View/icons/Industry-Return-icon%20(1).png'> </a>
                <a href="?controller=ASIGNATURA&action=ADD"><img src='View/icons/Button-Add-icon.png'> </a>
        <h1 class="títuloH1">Añadir Asignatura</h1>
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