<?php

require_once("sessions.php");

if(SessionManager::isLoggedIn()){
  header("location:http://localhost/website-v2/attendees");
}

if(isset($_POST['login'])){
  //perform the login
    switch(SessionManager::login($_POST['email'], $_POST['pwd'])){
        case "admin":
            header("location:http://localhost/website-v2/attendees");
            break;
        case "user":
            header("location:http://localhost/website-v2/index");
            break;
        case "email error":
            $error["err_email"] = "your email is incorrect";
            break;
        default:
        $error["err_pwd"] = "your password is incorrect";      
    }  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Log-in</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <header>
        <h1>
            Admin Log in Page
        </h1>
    </header>
    <section>
        <form method="post">
            <main>
                <div>
                    <label for="">Email</label>
                    <input type="email" name="email" id="email">
                    <p class="warning"><?php echo (isset($error['err_email']) ? $error['err_email'] : "") ?></p>
                </div>
                <div>
                    <label for="">Password</label>
                    <input type="text" name="pwd" id="pw">
                    <p class="warning"><?php echo (isset($error['err_pwd']) ? $error['err_pwd'] : "" )?></p>
                </div>
            </main>
            <div>
                <button type="submit" name="login">Log in </button>
            </div>
        <form>
    </section>
</body>
</html>