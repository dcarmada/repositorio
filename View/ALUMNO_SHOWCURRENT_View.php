<?php

class ALUMNO_SHOWCURRENT_View
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

//        var_dump($this->getValuesList());
    public function render()
    {
        ?>
        <html>
        <head>
            <title> Alumno</title>
            <meta>
        </head>
        <body>
        <h3>Alumno</h3>
        <?php
        foreach ($this->values_list as $clave => $i) {
            echo "<label>" . ucfirst($clave) . ": $i</label><br>";
        }
        ?>
        </body>
        </html>
        <?php
    }
}