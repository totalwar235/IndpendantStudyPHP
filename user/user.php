<?php

/**
 * Description of user
 *
 * @author Reed
 */
class user {
    //put your code here
    private $userName;
    private $passWrd;
    
    function login($name, $password){
        self::$userName = $name;
        self::$passWrd =  $password;
    }
    
    //getters
    function getUserName(){
        return self::$userName;
    }
}

$curUser = new user();
$curUser.login($_POST['user'],$_POST['passwrd']);