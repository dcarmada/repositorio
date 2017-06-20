<?php

class login_View
{
    public function render()
    {
        require('../Controller/idioma.php');

        $lang = null;
        if ( isset($_GET['lang']) ) {
            $lang = $_GET['lang'];
        }
        ?>
        <html lang="es">
        <head>
            <meta charset="utf-8">
            <title> Login</title></head>
<link rel="stylesheet" type="text/css" href="../View/css/login.css">
        <body>
        <div class="header">
            <form>
                    <label><?php echo __('login') ?><select name="idioma">
                        <option value="español">Español</option>
                        <option value="ingles">Inglés</option>
                    </select>
            </form></label>
        </div>
        <div class="sidebar">
            <form method="POST" action="login_controller.php">
                <input type="text" name="username" placeholder="<?php echo __('usuario') ?>"/>
                <br/>
                <input type="password" name="password" placeholder="Contraseña"/>
                <br/>
                <button type="submit"> Inicar Sesion</button>
            </form>
            <div class="footer">
                <h2>Página generada el día:</h2>
                <script>
                    var mydate=new Date();
                    var year=mydate.getYear();
                    if (year < 1000)
                        year+=1900;
                    var day=mydate.getDay();
                    var month=mydate.getMonth()+1;
                    if (month<10)
                        month="0"+month;
                    var daym=mydate.getDate();
                    if (daym<10)
                        daym="0"+daym;
                    document.write("<big><font color='000000' face='Arial'><b>"+daym+"/"+month+"/"+year+"</b></font></big>")

                </script>
            </div>
        </div>
        </body>
        </html>

        <?php
    }
}