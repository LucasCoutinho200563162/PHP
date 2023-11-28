<?php
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $validate = true;
    
    require 'db_con.php';

    if (empty($name)) {
        echo '<p>Name required</p>';
        $validate = !$validate;
    }
    if (empty($email)) {
        echo '<p>Email required</p>';
        $validate = !$validate;
    }

    if (empty($message)) {
        echo '<p>Message required</p>';
        $validate = !$validate;
    }

    // if validated 
    if ($validate) {
        $ticket_id = uniqid();

        //inser username and password to users table
        $sql_create_ticket = "INSERT INTO tickets (ticket_id, name, email, message) VALUES ('$ticket_id','$name','$email','$message')";

        $conn->query($sql_create_ticket);


		$conn = null;
        
        // redirect to reg success
        header("Location: ticket_successful.php?ticket_id=$ticket_id");
    } else {
        // reset if failed
        echo '<p>Validation failed</p>';
        header('Location: ../contact.php');
        exit;
    }   
?>
