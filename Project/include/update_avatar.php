<?php
    session_start();
    if (!isset($_SESSION['user_id'])) {
        header('location:login.php');
        exit();
    } else {

        require 'db_con.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['avatar_id'])) {
            // set current user avatar to selected avatar id
            $sql = "update users_info
            set avatar = '{$_POST['avatar_id']}'
            where user_id = {$_SESSION['user_id']}";
            $conn->query($sql);  
            $conn = null;
            Header('Location: ../account_details.php');      
        }
        else {
            Header('Location: ../account_details.php');
        }
    }

   
?>
