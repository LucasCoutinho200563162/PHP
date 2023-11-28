<?php
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['emailAddress'];

    $validate = true;
    
    require 'db_con.php';

    if (empty($firstName)) {
        echo '<p>First name required</p>';
        $validate = !$validate;
    }
    if (empty($lastName)) {
        echo '<p>Last name required</p>';
        $validate = !$validate;
    }

    if (empty($username)) {
        echo '<p>Username required</p>';
        $validate = !$validate;
    }
    if ((empty($password))) {
        echo '<p>Invalid passwords</p>';
        $validate = !$validate;
    }

    // if validated 
    if ($validate) {

        // encode password
        $password = hash('sha512', $password);

        //inser username and password to users table
        $sql_create_user = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

        $conn->query($sql_create_user);


        // retrieve created user id
        $user_id = $conn->query("SELECT user_id FROM users WHERE username = '$username'");
        
        $uid = $user_id->fetch_assoc();

        $uid = $uid['user_id'];

        // insert remaining data to users_info

        $sql_user_details = "INSERT INTO users_info (user_id, first_name, last_name, email) VALUES ($uid, '$firstName', '$lastName', '$email')";

        $conn->query($sql_user_details);
        
		$conn = null;
        
        // redirect to reg success
        header('Location: reg_success.php');
    } else {
        // reset if failed
        echo '<p>Validation failed</p>';
        header('Location: ../register.php');
        exit;
    }   
?>
