
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    include 'user/user.php';

    $reader = new user();

    $note = $reader->deleteNote($_GET['note']);
    ?>

<script>
    window.location = "http://www.dsu-class.com/quary12/?controller=pages&action=notes";
    </script>