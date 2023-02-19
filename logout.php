<?php
    session_start();

    if(isset($_SESSION["user"]) && isset($_SESSION["type"])){
        unset($_SESSION["user"]);
        unset($_SESSION["type"]);
        unset($_SESSION["name"]);
        session_destroy();
        
    }
    
    header("location:http://localhost/website-v2/index");
?>