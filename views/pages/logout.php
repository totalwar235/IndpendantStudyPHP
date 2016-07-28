<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>

<script>
    window.location = "http://www.dsu-class.com/quary12/?controller=pages&action=home";
    </script>