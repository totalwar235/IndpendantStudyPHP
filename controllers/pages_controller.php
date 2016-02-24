<?php
  class PagesController {
    public function home() {
      $first_name = 'Jon';
      $last_name  = 'Snow';
      include'views/pages/home.php';
    }
    
    public function login(){
        include 'views/pages/login.php';
    }

    public function error() {
        include 'views/pages/error.php';
    }
  }
