<?php

session_start();

if(!isset($_SESSION['language']))
    $_SESSION['language']='es';

if ($_GET && isset($_GET['language'])) {
    $_SESSION['language'] = $_GET['language'];
}