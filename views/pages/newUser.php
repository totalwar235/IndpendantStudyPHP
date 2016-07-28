<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    include 'user/user.php';

    $tempUser = strip_tags($_POST['user']);
    $tempEmail = strip_tags($_POST['email']);
    $tempPass = NULL;
    if($_POST['passwrd'] == $_POST['passwrdConf']){
        $tempPass = $_POST['passwrd'];
    } else {
        
    }
    $signUp = new user();
    
    if($signUp->signUp($tempUser,$tempPass,$tempEmail)){
        $_SESSION['userName'] = $signUp->getUserName();
        $_SESSION['email'] = $signUp->getEmail();
        $_SESSION['ID'] = $signUp->getUserID();
        $_SESSION['logged']   = TRUE; 
    }
    
    

