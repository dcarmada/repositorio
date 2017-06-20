<?php

class login_View
{
    public function render()
    {
        if ($_SESSION['language'] == "es" || !isset($_SESSION['language'])) {
            include '../Locates/Strings_SPANISH.php';
        } elseif ($_SESSION['language'] == "en") {
            include '../Locates/Strings_ENGLISH.php';
        }
        ?>
        <html>
        <head>
            <meta charset="utf-8">
            <title> Login</title></head>
        <link rel="stylesheet" type="text/css" href="../View/css/login.css">
        <body>
        <div class="header">
            <form method="get" action="?">
                <label><?php echo $strings["login"] ?>
                    <select name="language" onchange="this.form.submit();">
                        <?php
                        if ($_SESSION['language'] == 'es') {
                            ?>
                            <option value="es" selected><?php echo $strings["español"] ?></option>
                            <option value="en"><?php echo $strings["inglés"] ?></option>
                            <?php
                        } elseif ($_SESSION['language'] == 'en') {
                            ?>
                            <option value="es"><?php echo $strings["español"] ?></option>
                            <option value="en" selected><?php echo $strings["inglés"] ?></option>
                            <?php
                        }
                        ?>
                    </select>
            </form>
            </label>
        </div>
        <div class="sidebar">
            <form method="POST" action="login_controller.php">
                <input type="text" name="username" placeholder="<?php echo $strings["usuario"] ?>"/>
                <br/>
                <input type="password" name="password" placeholder="<?php echo $strings["contraseña"] ?>"/>
                <br/>
                <button type="submit"><?php echo $strings["iniciar sesión"] ?></button>
            </form>
            <div class="footer">
                <h2><?php echo $strings["Página generada el día"]?></h2>
                <script>
                    var mydate = new Date();
                    var year = mydate.getYear();
                    if (year < 1000)
                        year += 1900;
                    var day = mydate.getDay();
                    var month = mydate.getMonth() + 1;
                    if (month < 10)
                        month = "0" + month;
                    var daym = mydate.getDate();
                    if (daym < 10)
                        daym = "0" + daym;
                    document.write("<big><font color='000000' face='Arial'><b>" + daym + "/" + month + "/" + year + "</b></font></big>")

                </script>
            </div>
        </div>
        </body>
        </html>

        <?php
    }
}