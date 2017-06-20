<?php
/*$idioma = $_REQUEST['idioma'];
session_start();
$_SESSION['idioma'] = $idioma;
$salto = strrchr($_SERVER['HTTP_REFERER'],'/');
$salto = str_replace('/','',$salto);
header("location: ".$salto." ");*/
function __($str, $lang = null){

    if ( $lang != null ){

        if ( file_exists('language_'.$lang.'.php') ){

            include('language_'.$lang.'.php');
            if ( isset($texts[$str]) ){
                $str = $texts[$str];
            }
        }
    }

    return $str;
}
?>