<?php

class ALUMNO_SHOWALL_View
{
    /**
     * ALUMNO_SHOWALL_View constructor.
     * @param array $field_list Campos a mostrar en la lista
     * @param array $values_list Lista de valores
     */
    public function __construct($field_list, $values_list)
    {
        $this->field_list = $field_list;
        $this->values_list = $values_list;
        $this->tittle = "Listado Alumnos";
        $this->header = "Listado Alumnos";
    }

    const HTML_SKELETON = "
               
                <div class=\"content\">
                    <a href=\"?controller=ALUMNO&action=SHOWALLView\"><img src='View/icons/Industry-Return-icon%20(1).png'> </a>
                    <a href=\"?controller=ALUMNO&action=ADD\"><img src='View/icons/Button-Add-icon.png'> </a>
                    <h1>{{header}}</h1>
                    {{data}}
                </div>";
    const TITTLE_KEY = "{{tittle}}";
    protected $tittle;

    const HEADER_KEY = "{{header}}";
    protected $header;

    const DATA_KEY = "{{data}}";

    private $field_list;
    private $values_list;


    /**
     * @return array
     */
    public function getFieldList()
    {
        return $this->field_list;
    }

    /**
     * @param array $field_list
     */
    public function setFieldList($field_list)
    {
        $this->field_list = $field_list;
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
        $html = str_replace(self::HEADER_KEY, $this->header,  self::HTML_SKELETON);
        $html = str_replace(self::DATA_KEY, $this->generateTable(), $html);
        ?>

        <html>
        <head class='encabezado'>
            <meta charset="UTF-8">
            <title><?php echo $this->tittle?></title>
            <link rel='stylesheet' type="text/css" href='View/css/container.css'>
            <link rel='stylesheet' type="text/css" href='View/css/header.css'>
            <link rel='stylesheet' type="text/css" href='View/css/sidebar.css'>
            <link rel='stylesheet' type="text/css" href='View/css/footer.css'>
        </head>
        <body>
        <div class="container">
            <?php
            include "View/header.php";
            include "View/sidebar.php";
            print ($html);
            include "View/footer.php";
            ?>
        </div>
        </body>
        </html>
        <?php
    }

    private function generateTable()
    {
        $table = "<table>";
        $table = $table . "<tr>";
        foreach ($this->field_list as $field) {
            $table = $table . "<th>" . utf8_encode($field . "</th>");
        }
        $table .= "<th>CONTROLES</th>";
        $table = $table . "</tr>";
        foreach ($this->values_list as $value) {
            $table = $table . "<tr>";
            foreach ($this->field_list as $field) {
                if (isset($value[$field]) && !is_null($value[$field])) {
                    $table = $table . "<td>" . utf8_encode($value[$field]) . "</td>";
                } else {
                    $table = $table . "<td> </td>";
                }
            }
            $table .= '<td><a href="?controller=ALUMNO&action=UPDATE&id=' . $value["dni"] . '"><img src="View/icons/iconEdit.png"/> </a> 
                     <a href="?controller=ALUMNO&action=DELETE&id=' . $value["dni"] . '"><img src="View/icons/Eraser-icon.png"/></a>
                     <a href="?controller=ALUMNO&action=SHOWCURRENT&id=' . $value["dni"] . '"><img src="View/icons/Search-icon.png"/></a></td>';
            $table = $table . "</tr>";
        }
        $table = $table . "</table>";
        return $table;

    }

}