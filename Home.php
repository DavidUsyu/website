<?php
session_start();
 include("connection.php");
 include("functions.php");

 $user_data = check_login($conn);

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Webpage design</title>
    <link rel="stylesheet" href="style.css"> <!--CSS file is linked to the index.html file-->
</head>
<body>
<!--division of classes-->
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">KONAMI</h2>
            </div>
            <div class="menu">
                <ul>
                    <!--Creation of icons-->
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="service.php">SERVICE</a></li>
                    <li><a href="design.php">DESIGN</a></li>
                    <li><a href="games.php">GAMES</a></li>
                    <li><a href="membership.php">MEMBERSHIP</a></li>
                    <li><a href="signup.php">SIGNUP</a></li>
                </ul>
            </div>
        </div>
            <div class="content">
            <h1 class="par">
                <BR>Welcome to eFootball™</BR> </h1>
            <button class="cn"> <a href="#">JOIN US</a></button>
        </div>
    </div>
    <link rel="stylesheet" href="/style.css">
    <a href="about.html"></a>
</body>
</html>