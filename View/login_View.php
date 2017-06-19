<?php

class login_View
{
    public function render()
    {
        ?>
        <html lang="es">
        <head>
            <meta charset="utf-8">
            <title> Login</title></head>
        <body>
        <div>
            <form method="POST" action="login_controller.php">
                <input type="text" name="username" placeholder="Usuario"/>
                <br/>
                <input type="password" name="password" placeholder="Contraseña"/>
                <br/>
                <button type="submit"> Inicar Sesion</button>
            </form>
        </div>
        </body>
        </html>

        <?php
    }
}