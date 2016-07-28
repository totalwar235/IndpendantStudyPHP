<?php
  class Db {
    private static $instance = NULL;

    private function __construct() {}

    private function __clone() {}

    public static function getInstance() {
        try{
            if (!isset(self::$instance)) {
              self::$instance = new PDO('mysql:host=localhost;dbname=dsuclass_quary12', 'dsuclass_quary12', 'dsuclass_quary12');
            } 
        } catch(PDOException $e){
            $error_message = $e->getMessage();
            echo $error_message;
            exit();
        }
      
      echo "<br>just something<br>";
      return self::$instance;
    }
  }
