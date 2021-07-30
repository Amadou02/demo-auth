<?php
session_start();

if(!isset($_SESSION['auth'])){
    header('Location:login-ctrl.php');
    exit();
}

require_once __DIR__ . '/../views/shop.php';