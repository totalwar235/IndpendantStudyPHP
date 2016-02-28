<?php
  require_once('connection.php');

  $controller = 'pages';
  $action     = 'home';
    
  if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action     = $_GET['action'];
  } 
  
  if(isset($_POST['user']) && isset($_POST['passwrd'])){
      echo 'login';
      require_once 'user/user.php';
  }
  require_once('views/layout.php');