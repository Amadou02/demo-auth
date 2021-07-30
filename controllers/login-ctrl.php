<?php
// démarrer une nouvelle session
session_start();
// importe le modèle
require_once __DIR__ .  '/../models/User.php';
$email = ""; $password ="";

if(!empty($_POST['email']) && !empty($_POST['password'])) {
    
    // extraction des posts dans les varibles
    extract($_POST);
    
    $user = new User();
    
    $user->email = $email;
    
    // récupération des infos de l'utilisateur correspondant au mail
    
    $singleUser = $user->findOne();
    
    // vérification de la correspondance des mots de passe

    if(password_verify($password, $singleUser->password)){
        $_SESSION['auth']['id'] = $singleUser->id;
        $_SESSION['auth']['lastname'] = $singleUser->lastname;
    }

    // creation dans la bdd
} 



require_once __DIR__ . '/../views/login.php';