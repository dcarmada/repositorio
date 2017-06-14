<?php

class SHOWALL_View
{
    const HTML_SKELETON = "
        <html>
        <head class='encabezado'>
            <meta charset=\"UTF-8\">
            <title>{{tittle}}</title>
            <link rel='stylesheet' href='View/css/showall.css'>
        </head>
        <body>
        <h1>{{header}}</h1>
       {{data}}
        </body>
        </html>";
    const TITTLE_KEY = "{{tittle}}";
    protected $tittle;

    const HEADER_KEY = "{{header}}";
    protected $header;

    const DATA_KEY = "{{data}}";

    private $field_list;
    private $values_list;

    /**
     * ALUMNO_SHOWALL_View constructor.
     * @param array $field_list Campos a mostrar en la lista
     * @param array $values_list Lista de valores
     */
    public function __construct($field_list, $values_list)
    {
        $this->field_list = $field_list;
        $this->values_list = $values_list;
    }

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
        $html = str_replace(self::TITTLE_KEY, $this->tittle, self::HTML_SKELETON);
        $html = str_replace(self::HEADER_KEY, $this->header, $html);
        $html = str_replace(self::DATA_KEY, $this->generateTable(), $html);
        print ($html);
    }

    private function generateTable()
    {
        $table = "<table>";
        $table = $table . "<tr>";
        foreach ($this->field_list as $field) {
            $table = $table . "<th>" . utf8_encode($field . "</th>");
        }
        foreach ($this->values_list as $value) {
            $table = $table . "<tr>";
            foreach ($this->field_list as $field) {
                if (isset($value[$field]) && !is_null($value[$field])) {
                    $table = $table . "<td>" . utf8_encode($value[$field]) . "</td>";
                } else {
                    $table = $table . "<td> </td>";
                }
            }
            $table = $table . "</tr>";
        }
        $table = $table . "</table>";
        return $table;

    }
}