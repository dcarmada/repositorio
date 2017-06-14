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
        <div class=\"container\">
             <div class=\"header\">
             </div>
        <div class=\"sidebar\">
             <ul>
                 <li><a class=\"enlace\" href=\"?controller=ALUMNO&action=ADD\" method=\"post\">Add Alumno</a></li>
                 <li><a class=\"enlace\" href=\"?controller=ALUMNO&action=DELETE&id=dni\" method=\"post\">Delete Alumno</a></li>
                 <li><a class=\"enlace\" href=\"?controller=ALUMNO&action=SHOWCURRENT&id=dni\" method=\"post\">ShowCurrent Alumno</a></li>
                 <li><a class=\"enlace\" href=\"?controller=ALUMNO&action=SHOWALL\" method=\"post\">ShowAll Alumno</a></li>
                 <li><a class=\"enlace\" href=\"?controller=ALUMNO&action=UPDATE&id=dni\" method=\"post\">Update Alumno</a></li>
                 <li><a class=\"enlace\" href=\"?controller=ASIGNATURA&action=ADD\" method=\"post\">Add Asignatura</a></li>
                 <li><a class=\"enlace\" href=\"?controller=ASIGNATURA&action=DELETE&id=id\" method=\"post\">Delete Asignatura</a></li>
                 <li><a class=\"enlace\" href=\"?controller=ASIGNATURA&action=SHOWALL\" method=\"post\">SHOWALL Asignatura</a></li>
                 <li><a class=\"enlace\" href=\"?controller=ASIGNATURA&action=SHOWCURRENT&id=id\" method=\"post\">SHOWCURRENT Asignatura</a></li>
                 <li><a class=\"enlace\" href=\"?controller=ASIGNATURA&action=UPDATE&id=id\" method=\"post\">Update Asignatura</a></li>
             </ul>
        </div>
        <div class=\"content\">
            <a class=\"enlace\" href=\"?controller=ALUMNO&action=SHOWALLView\">Volver</a>
        <h1>{{header}}</h1>
       {{data}}
       </div>
        <div class=\"footer\">
        </div>
        </div>
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
        $table.="<th>CONTROLES</th>";
        $table=$table."</tr>";
        foreach ($this->values_list as $value) {
            $table = $table . "<tr>";
            foreach ($this->field_list as $field) {
                if (isset($value[$field]) && !is_null($value[$field])) {
                    $table = $table . "<td>" . utf8_encode($value[$field]) . "</td>";
                } else {
                    $table = $table . "<td> </td>";
                }
            }
            $table.='<td><a class="enlace" href="?controller=ALUMNO&action=UPDATE&id='.$value["dni"].'"><img src="View/icons/iconEdit.png"/> </a> 
                     <a class="enlace" href="?controller=ALUMNO&action=DELETE&id='.$value["dni"].'"><img src="View/icons/Eraser-icon.png"/></a>
                     <a class="enlace" href="?controller=ALUMNO&action=SHOWCURRENT&id='.$value["dni"].'"><img src="View/icons/Search-icon.png"/></a></td>';
            $table = $table . "</tr>";
        }
        $table = $table . "</table>";
        return $table;

    }
}