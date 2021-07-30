<?php
// importe le modèle
require_once __DIR__ .  '/../models/User.php';
$firstname =""; $lastname = ""; $email = ""; $password ="";

$user = null;

if(!empty($_POST['firstname']) && !empty($_POST['lastname']) &&!empty($_POST['email']) && !empty($_POST['password'])) {

    // extraction des posts dans les varibles
    extract($_POST);
    // chiffrer le mot de passe
    $password = password_hash($password, PASSWORD_BCRYPT);
    $user = new User($firstname, $lastname, $email, $password);

    // creation dans la bdd

    $user->create();
} 

require_once __DIR__ . '/../views/signup.php';