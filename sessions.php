<?php 
session_start();

class SessionManager{

  static function isLoggedIn(){
    return isset ($_SESSION["user"]);
  }

  static function login($email, $pwd){
    require_once("db-manager.php");

    $SQL = "SELECT `id`, `name`, `email`, `password`, `type`  FROM `users` WHERE `email` = '$email'";
    $result = mysqli_query($cxn, $SQL);
    if(@$row = mysqli_fetch_assoc($result)){
      extract($row);
      
      if($pwd == $password){
        $_SESSION["user"] = $id;
        $_SESSION["type"] = $type;
        $_SESSION["name"] = $name;
        $_SESSION["email"] = $email;

        
        if($type !== "user"){
          return "admin";
        }else{
          return "user";  
        }
      }else{
        return "password error";
      }
    }else{
      return "email error";
    }
    
  }
}