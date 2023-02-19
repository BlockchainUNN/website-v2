<?php   

    require_once("db-manager.php");

    if(isset($_POST["signup"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];

        $SQL = "INSERT INTO `users`( `name`, `email`, `password`) VALUES ('$name','$email','$pwd')";
        mysqli_query($cxn, $SQL) or die(mysqli_error($cxn));

        echo "<script type='text/javascript'>alert('You have successfully signed up, proceed to login!');</script>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <header>
        <h1>
            Sign Up
        </h1>
    </header>
    <section>
        <form method="post">
            <main>
                <div>
                    <label for="">Full name</label>
                    <input type="text" name="name" id="name">
                </div>
                <div>
                    <label for="">Email</label>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for="">Password</label>
                    <input type="password" name="pwd" id="pw">
                </div>
            </main>
            <div>
                <button type="submit" name="signup">Sign up </button>
            </div>
        <form>
    </section>
</body>
</html>