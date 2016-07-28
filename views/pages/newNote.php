<?php

if (!$_SESSION['logged']) {
    include 'views/pages/new/error.php';
} else {
    include 'views/pages/new/create.php';
}
?>

