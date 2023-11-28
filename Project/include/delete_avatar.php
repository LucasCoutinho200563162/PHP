<?php
    session_start();
    if (!isset($_SESSION['user_id'])) {
        header('location:login.php');
        exit();
    } else {

        require 'db_con.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['avatar_id'])) {
            // Get avatar ID
            $avatarId = $_POST['avatar_id'];

            // Get avatar path
            $path = '../avatars/' . $avatarId; 
            // if file exists
            if (file_exists($path)) {
                //delete
                unlink($path);
                // remove from avatars table
                $sql = "delete from user_avatars
                where avatar_id = '$avatarId';";
                $conn->query($sql);  

                // if it's the current avatar set then set to null
                $reset_current_avatar = "UPDATE users_info SET avatar = NULL WHERE avatar = '$avatarId'";
                $conn->query($reset_current_avatar);
                $conn = null;
                Header('Location: ../account_details.php'); 
            } else {
                Header('Location: ../account_details.php'); 
            }

        }
        else {
            Header('Location: ../account_details.php');
        }
    }

   
?>
