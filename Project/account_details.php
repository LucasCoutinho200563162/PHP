<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('location: login.php');
    exit();
} else {
    require 'include/db_con.php';

    if (isset($_POST['submit'])) {

        $count_avatars = $conn->query("SELECT COUNT(DISTINCT avatar_id) AS total_avatars FROM user_avatars WHERE user_id = {$_SESSION['user_id']}");
        if ($count_avatars->fetch_assoc()['total_avatars'] < 6) {

            if ($_FILES["image"]["error"] == 0) {
                $fileName =  $_FILES['image']['name'];
                $fileSize = $_FILES['image']['size'];
                $tempName = $_FILES['image']['tmp_name'];

                $validExt =  ['jpg', 'jpeg', 'png'];
                $imgExt = explode('.', $fileName);
                $imgExt = strtolower(end($imgExt));
                if (!in_array($imgExt, $validExt)) {
                    echo "<script>alert('Invalid Image Extension');</script>";
                } else if ($fileSize > 10000000) {
                    echo "<script>alert('Image size is too large');</script>";
                } else {
                    $name = uniqid();
                    $name .= '.' . $imgExt;

                    move_uploaded_file($tempName, 'avatars/' .  $name);

                    $query = "INSERT INTO user_avatars (user_id, avatar_id) VALUES ({$_SESSION['user_id']}, '$name')";
                    $conn->query($query);
                }
            }
        } else {
            echo "<script>alert('Maximum of 6 avatars allowed!');</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Contact Us - RTX 4090 Graphics Card</title>

    <style>
        .avatar-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin: 20px 0; 
        }

        .avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin: 10px;
        }

        .upload-form {
            max-width: 50px;
            margin: 20px auto; 
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #fff;
        }

        .gradient-custom {
            background: #f6d365;

            background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));

            background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
            }
    </style>
</head>

<body>

    <?php
    include 'header.php';
    ?>

    <!-- Main Content -->
    <main class="contact-form-page">
        <section class="contact-form">
            <?php
                $query_get_avatars = "SELECT user_id, first_name, last_name, email, avatar FROM users_info WHERE user_id = {$_SESSION['user_id']}";
                $user_result = $conn->query($query_get_avatars);

                if ($user_result->num_rows > 0) {
                    $user_data = $user_result->fetch_assoc();
                    echo '<div style="text-align: center; margin-top: 20px;">';
                    echo '    <img src="avatars/' . $user_data['avatar'] . '" alt="User Avatar" style="border-radius: 50%; width: 150px; height: 150px;">';
                    echo '    <div style="border: 2px solid #333; padding: 10px; border-radius: 10px; margin-top: 10px;">';
                    echo '        <h2>' . $user_data['first_name'] . ' ' . $user_data['last_name'] . '</h2>';
                    echo '        <p style="color: gray;">Email: ' . $user_data['email'] . '</p>';
                    echo '        <p style="color: gray;">User ID: ' . $user_data['user_id'] . '</p>';
                    echo '    </div>';
                    echo '</div>';
                    echo '<style>';
                    echo '    .user-card { width: 300px; margin: 0 auto; }';
                    echo '</style>';
                } else {
                    // Handle the case when no user data is found
                    echo "User not found.";
                }
                ?>

        </section>
        <br>
        <section class="contact-form">
            <form method="post" action="include/update_profile.php">
                <label for="new_password">New Password:</label>
                <input type="password" id="new_password" name="new_password" placeholder="Enter new password">
                <label for="new_email">New Email:</label>
                <input type="email" id="new_email" name="new_email" placeholder="Enter new email">
                <input type="submit" value="Update">
            </form>
        </section>
        <br>
        <section class="contact-form">
            <?php
            $query_get_avatars =  "SELECT avatar_id FROM user_avatars WHERE user_id = {$_SESSION['user_id']}";
            $user_avatars =  $conn->query($query_get_avatars);
            if ($user_avatars->num_rows > 0) {
                echo '<fieldset>';
                echo '<legend>Avatar list</legend>';
                echo '<div class="avatar-container">';
                while ($row = $user_avatars->fetch_assoc()) {
                    $avatarPath = 'avatars/' . $row['avatar_id'];
                    echo '<div>';
                    echo '<img src="' . $avatarPath . '" alt="Avatar" class="avatar">';

                    //Update avatar
                    echo '<form method="post" action="include/update_avatar.php">';
                    echo '<input type="hidden" name="avatar_id" value="' . $row['avatar_id'] . '">';
                    echo '<input type="submit" value="Set as Current Avatar">';
                    echo '</form>';

                    //Delete avatar
                    echo '<form method="post" action="include/delete_avatar.php">';
                    echo '<input type="hidden" name="avatar_id" value="' . $row['avatar_id'] . '">';
                    echo '<input type="submit" value="Delete Avatar">';
                    echo '</form>';
                    echo '</div>';
                }
                
                echo '</div>';
                echo '</fieldset>';
            } else {
                echo 'No avatars found';
            }
            ?>
            <br>
            <form method='post' action='' autocomplete='off' enctype='multipart/form-data'>
                <input type='file' name='image' id='image' accept=".jpg, .jpeg, .png" values=""/>
                <input type='submit' value='Submit' name='submit'/>
            </form>            
        </section>
        <br>
        <section class="contact-form">
            
            
            <form method="post" action="logout.php">
                <input type='submit' value='Logout' name='submit'/>
            </form>
        </section>
    </main>

    <!-- Footer -->
    <?php
    include 'footer.php';
    ?>

</body>

</html>
