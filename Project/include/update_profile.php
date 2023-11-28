<?php
    session_start();
    if (!isset($_SESSION['user_id'])) {
        header('location:login.php');
        exit();
    } else {

        require 'db_con.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST" && (isset($_POST['new_password']) || isset($_POST['new_email']))) {
            if (!empty($_POST['new_password'])){
                
                $password = hash('sha512', $_POST['new_password']);
                $conn->query("UPDATE users SET password = '$password' WHERE user_id = '{$_SESSION['user_id']}'");
            }

            if (!empty($_POST['new_email'])){
                $conn->query("UPDATE users_info SET email = '{$_POST['new_email']}' WHERE user_id = '{$_SESSION['user_id']}'");
            }
            $conn = null;
            Header('Location: ../account_details.php');      
        }
        else {
            Header('Location: ../account_details.php');
        }
    }

   
?>
