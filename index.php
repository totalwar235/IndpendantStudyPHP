<?php
  require_once('connection.php');

  $controller = 'pages';
  $action     = 'home';
  $seeker = NULL;
    
  if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action     = $_GET['action'];
  }

  require_once('views/layout.php');