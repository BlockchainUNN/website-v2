<?php
    include_once("db-manager.php");
    include_once("sessions.php");

    $user_type = $_SESSION['type'];
    if(!SessionManager::isLoggedIn() || $user_type == 'user'){
        header("location:http://localhost/website-v2/index");
    }

    $sql = "SELECT * FROM `attendees`";
    $result = mysqli_query($cxn, $sql) or die(mysqli_error($cxn));
    $total_rows = mysqli_num_rows($result);

    if(isset($_GET["id"]) && $_GET["action"] == "delete"){
        $user_id = $_GET["id"];
        $sql = "DELETE FROM `attendees` WHERE `id` = '$user_id'";
        mysqli_query($cxn, $sql) or die(mysqli_error($cxn));

        header("location:attendees.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendees</title>
    <link rel="stylesheet" href="./css/about.css?version = 1.0.0">
    <link rel="stylesheet" href="./css/attendees.css">
</head>

<body>
    <nav>
        <img src="./images/icons8-menu-rounded-50.png" alt="" id="menu" onclick="menuOpen()">
        <img src="./images/icon-close.svg" alt="" id="close" onclick="menuClose()">
        <main>
            <a href="./index"><img src="./images/navLogo.png" alt="" id="navlogo"></a>
        </main>
        <ul id="navList">
            <li><a href="./index">Home</a></li>
            <li><a href="about">About Us</a></li>
            <li><a href="./index#comm">Community</a></li>
            <li><a href="event">Events</a></li>
            <li><a href="team">Team</a></li>
            <li><a href="./logout">Logout</a></li>
        </ul>
    </nav>

    <h2 id="table-title">Attendees - <?php echo $total_rows; ?></h2>
    <a href="exportData.php"><p class="export">Export CSV</p></a>
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
            <tr>
                <th>ID</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>Phone number</th>
                <th>Career</th>
                <th>State of Residence</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                <?php 
                    while($row = mysqli_fetch_assoc($result)){
                        echo '
                            <tr>
                                <td>'; echo $row['id']; echo '</td>
                                <td>'; echo $row['firstname']; echo '</td>
                                <td>'; echo $row['lastname']; echo '</td>
                                <td>'; echo $row['email']; echo '</td>
                                <td>'; echo $row['phone']; echo '</td>
                                <td>'; echo $row['career']; echo '</td>
                                <td>'; echo $row['state']; echo '</td>
                                <td><a href="attendees.php?action=delete&&id='; echo $row['id']; echo '"><button name="delete" id="delete">Delete</button></a></td>
                            </tr>
                        ';
                    }
                ?>
            <tbody>
        </table>
    </div>

</body>
</html>