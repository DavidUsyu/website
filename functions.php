<?php
// Start the session at the top of every PHP file that uses sessions
session_start();
function check_login($conn)
{
    if(isset($_SESSION['user_id'])){
        $id = $_SESSION['user_id'];
        $query = "SELECT * FROM website WHERE user_id = '$id' LIMIT 1";
        
        $result = mysqli_query($conn, $query);
        if($result && mysqli_num_rows($result) > 0){
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    // Debugging statement
    echo "User not logged in, redirecting to membership page.";
    
    // Redirect to membership if not logged in
    header("Location: membership.php");
    die;
}

function random_num($length)
{
    $text = "";
    if($length < 5){
        $length = 5;
    }

    $len = rand(4,$length);

    for ($i=0; $i < $len ; $i++) { 
        # code...

        $text  .= rand(0,9);
    }
    return $text;
}