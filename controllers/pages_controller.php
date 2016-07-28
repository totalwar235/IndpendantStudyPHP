<?php
  class PagesController {
    public function home() {
      include'views/pages/home.php';
    }
    
    public function login(){
        include 'views/pages/login.php';
    }
    
    public function notes(){
        include 'views/pages/notes.php';
    }
    
    public function signUp(){
        include 'views/pages/signUp.php';
    }
    
    public function validate(){
        include 'views/pages/validate.php';
    }
    
    public function newUser(){
        include 'views/pages/newUser.php';
    }
    
    public function logout(){
        include 'views/pages/logout.php';
    }
    
    // note functions
    
    public function newNote(){
        include 'views/pages/newNote.php';
    }
    
    public function postNote() {
        include 'views/pages/new/postNote.php';
    }
    
    public function viewNote(){
        include 'views/pages/new/viewNote.php';
    }
    
    public function deleteNote(){
        include 'views/pages/new/deleteNote.php';
    }
    
    public function editNote(){
        include 'views/pages/new/editNote.php';
    }
    
    public function updateNote(){
        include 'views/pages/new/updateNote.php';
    }

    public function error() {
        include 'views/pages/error.php';
    }
  }
