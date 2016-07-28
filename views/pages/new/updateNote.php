<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    include 'user/user.php';
       

    
 if($_SESSION['logged']){
        $tempUser = $_SESSION['userName'];
        $tempID = $_SESSION['ID'];

        $creator = new user();
        
        $tempTitle = strip_tags($_POST['title']);
        $tempMsg = strip_tags($_POST['message']);
        $tempPrivate = strip_tags($_POST['private']);
        $saught = $_GET['note'];
        
        $creator->updateNotes($tempID, $tempTitle, $tempMsg, $tempPrivate,$saught);
    }
    
    ?>

<script>
    window.location = "http://dsu-class.com/quary12/?controller=pages&action=notes";
    </script>