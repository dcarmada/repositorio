<?php

/*class index_View {

    function __construct(){
        $this->render();
    }

    function render(){
       include 'header.php';
       include 'menuLateral.php';
       include 'footer.php';
    }*/
class index_View
{
    const HTML_SKELETON = "
        <html>
        <head class='encabezado'>
            <meta charset=\"UTF-8\">
            <title>{{tittle}}</title>
            <link rel='stylesheet' href='../View/css/showall.css'>
        </head>
        <body>
        <div class=\"container\">
             <div class=\"header\">
             <a href='../Controller/desconectar.php' methods='post'><img src='../View/icons/Button-Close-icon.png'></a>
             </div>
        <div class=\"sidebar\">
             <ul>
                 <li><a href=\"../Controller/ALUMNO_Controller.php?action=SHOWALL\" methods=\"post\">Gestión de alumnos</a></li>
                 <li><a href=\"../Controller/ASIGNATURA_Controller.php?action=SHOWALL\" methods=\"post\">Gestión de asignaturas</a></li>
             </ul>
        </div>
        <div class=\"content\">
        <h1>{{header}}</h1>
       </div>
        <div class=\"footer\">
        <h2>Página generada el día:</h2>
        <script> 
 var mydate=new Date(); 
 var year=mydate.getYear(); 
 if (year < 1000) 
 year+=1900; 
 var day=mydate.getDay(); 
 var month=mydate.getMonth()+1; 
 if (month<10) 
 month=\"0\"+month; 
 var daym=mydate.getDate(); 
 if (daym<10) 
 daym=\"0\"+daym; 
 document.write(\"<big><font color='000000' face='Arial'><b>\"+daym+\"/\"+month+\"/\"+year+\"</b></font></big>\") 

</script> 

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
    public function __construct()
    {
        $this->render();
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

        print ($html);
    }


}