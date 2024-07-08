<?php
require("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $user_email = $_POST['user_email'];

    if (!empty($user_name) && !empty($user_email) && !empty($password) && !is_numeric($user_name) && !is_numeric($user_email)) {
        // save to database
        $user_id = random_num(20);
        $query = "INSERT INTO website (user_id, user_name, user_email, password) VALUES (?, ?, ?, ?)";

        // prepare the query
        $stmt = mysqli_prepare($conn, $query);
        if ($stmt) {
            // bind the parameters
            mysqli_stmt_bind_param($stmt, "ssss", $user_id, $user_name, $user_email, $password);
            // execute the statement
            mysqli_stmt_execute($stmt);

            // redirect to membership page
            header("Location: membership.php");
            die;
        } else {
            echo "Failed to prepare the SQL statement.";
        }
    } else {
        echo "Please enter some valid information!";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="membership">
    <div class="menu">
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>    
            <li><a href="design.php">DESIGN</a></li>
            <li><a href="games.php">GAMES</a></li>
            <li><a href="membership.php">MEMBERSHIP</a></li>
            <li><a href="update.php">UPDATE</a></li>
            <li><a href="signup.php">SIGNUP</a></li>
        </ul>
    </div>
    <div class="document">
        <h1>KONAMI FORM</h1>
        <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Eveniet porro aspernatur laudantium ullam explicabo amet repellat fugiat eaque,<br> modi tenetur aut ea error perspiciatis. <br> Sit exercitationem esse quia fugiat dignissimos!</p>
    </div>
    <div class="form">
        <form method="post">
            <h2>Signup Here</h2>
            <input type="text" name="user_name" placeholder="Enter name Here"><p></p> 
            <input type="email" name="user_email" placeholder="Enter Email Here"><p></p>
            <input type="password" name="password" placeholder="Enter Password Here"><br>
            <button type="submit" class="btnn">Signup</button>

            <p class="liw">Signup with</p>
            <div class="icons">
                <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
            </div>
        </form>
    </div>
</div>
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>
