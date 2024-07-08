<?php
require("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Check if user_id is set in $_POST
    if (isset($_POST['user_id'])) {
    // Ensure variables are properly initialized and sanitized
    $user_id = $_POST['user_id'];

    // Validate input data
    if (!empty($user_id) && is_numeric($user_id)) {
        // SQL query for deletion
        $query = "DELETE FROM website WHERE user_id = ?";

        // Prepare the query
        $stmt = mysqli_prepare($conn, $query);
        if ($stmt) {
            // Bind parameter
            mysqli_stmt_bind_param($stmt, "s", $user_id);

            // Execute the statement
            mysqli_stmt_execute($stmt);

            // Check if any rows were affected
            if (mysqli_stmt_affected_rows($stmt) > 0) {
                // Redirect to membership page after successful deletion
                header("Location: membership.php");
                die; // Ensure script execution stops after redirection
            } else {
                echo "No records deleted.";
            }
        } else {
            echo "Failed to prepare the SQL statement.";
        }
    } else {
        echo "Please enter a valid user ID.";
    }
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
            <h2>Delete Here</h2>
            <input type="text" name="user_name" placeholder="Enter name Here"><p></p> 
            <input type="email" name="user_email" placeholder="Enter Email Here"><p></p>
            <input type="password" name="password" placeholder="Enter Password Here"><br>
            <button type="submit" class="btnn">DELETE</button>

            <p class="liw">Update with</p>
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
