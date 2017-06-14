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
            <link rel="stylesheet" type="text/css" href="View/css/showcurrent.css">
            <meta>
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
        <h1>Asignatura</h1>
        <?php
        foreach ($this->values_list as $clave => $i) {
            echo "<label>".ucfirst($clave).":$i</label><br>";
        }

        ?>
            </div>
            <div class="footer">
            </div>
        </div>

        </body>
        </html>
        <?php
    }
}