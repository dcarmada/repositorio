<?php
/**
 * Created by PhpStorm.
 * User: DACA
 * Date: 17/06/2017
 * Time: 14:31
 */
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
             <a href='../Controller/desconectar.php' method='post'><img src='../View/icons/Button-Close-icon.png'></a>
             </div>
        <div class=\"sidebar\">
             <ul>
                 <li><a href=\"?controller=ALUMNO&action=SHOWALL\" method=\"post\">Gestión de alumnos</a></li>
                 <li><a href=\"?controller=ASIGNATURA&action=SHOWALL\" method=\"post\">Gestión de asignaturas</a></li>
             </ul>
        </div>
        <div class=\"content\">
            <a href=\"?controller=ALUMNO&action=SHOWALLView\"><img src='../View/icons/Industry-Return-icon%20(1).png'> </a>
            <a href=\"?controller=ALUMNO&action=ADD\"><img src='../View/icons/Button-Add-icon.png'> </a>
        <h1>{{header}}</h1>
       {{data}}
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