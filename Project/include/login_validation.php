<?php
    
    $username = $_POST['username'];
    $password = hash('sha512', $_POST['password']);

    require 'db_con.php';
    // Check if user exists
    $sql = "SELECT user_id FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    //If at least one result returned
    if (mysqli_num_rows($result) == 1){
        echo 'Logged in Successfully.';

        session_start();
        $_SESSION['user_id'] = $result->fetch_assoc()['user_id'];
        Header('Location: ../account_details.php');
        
    }
    else {
        Header('Location: login_failed.php');
    }
    $conn = null;
?>
