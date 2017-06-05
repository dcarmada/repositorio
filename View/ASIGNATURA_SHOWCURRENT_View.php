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
            <meta>
        </head>
        <body>
        <h3>Asignatura</h3>
        <?php
        foreach ($this->values_list as $clave => $i) {
            echo "<label>".ucfirst($clave).":$i</label><br>";
        }

        ?>


        </body>
        </html>
        <?php
    }
}