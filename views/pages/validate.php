<?php 
    include 'user/user.php';

    $count = 0;
    
    $tempUser = $_POST['user'];
    $tempPass = $_POST['passwrd'];
    
    $logIn = new user();
    if($logIn->login($tempUser, $tempPass)){
        
        $_SESSION['userName'] = $logIn->getUserName();
        $_SESSION['email'] = $logIn->getEmail();
        $_SESSION['ID'] = $logIn->getUserID();
        $_SESSION['logged']   = TRUE; 
    }
    