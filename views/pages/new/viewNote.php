
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'user/user.php';

$reader = new user();
$tempID = -1;
if ($_SESSION['logged']) {
    $tempID = $_SESSION['ID'];
}

$saught = $reader->viewNoteSingle($tempID, $_GET['note']);

echo '<div>';
foreach ($saught as $cur) {

    echo '<div>';
    echo '<h2>' . $cur['Title'] . '</h2>';
    echo '<p>' . $cur['note'] . '</p>';
    echo '<p>' . date('F d, Y h:mA', strtotime($cur['date'])) . '</p>';
    echo '<ul class="nav navbar-nav">';
    if ($cur['uID'] == $tempID) {
        echo '<li><a href="/quary12/?controller=pages&action=editNote&note=' . $cur['noteID'] . '">edit</a></li>';
        echo '<li><a href="/quary12/?controller=pages&action=deleteNote&note=' . $cur['noteID'] . '">delete</a></li>';
    }
    echo '</ul>';
    echo '</div>';
    echo '<br/>';
}

echo '</div>';
