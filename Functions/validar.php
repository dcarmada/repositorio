<?php
$usuario = $_POST['nnombre'];
$pass = $_POST['npassword'];

if(empty($usuario) || empty($pass)){
    header("Location: login_Controller.php");
    exit();
}

mysqli_connect('localhost','root','*****') or die("Error al conectar " . mysqli_error());
mysqli_select_db('login') or die ("Error al seleccionar la Base de datos: " . mysqli_error());

$result = mysqli_query("SELECT * from usuario where Username='" . $usuario . "'");

if($row = mysqli_fetch_array($result)){
    if($row['Password'] ==  $pass){
        session_start();
        $_SESSION['usuario'] = $usuario;
        header("Location: contenido.php");
    }else{
        header("Location: login_View.php");
        exit();
    }
}else{
    header("Location: index_View.php");
    exit();
}
?>