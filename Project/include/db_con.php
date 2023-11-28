
<?php

    // Connecting to the database


    $servername="localhost";
    $db_username="root";
    $db_password="Georgian2023!";
    $database="project";

    // Create a connection
    $conn=mysqli_connect($servername, $db_username, $db_password, $database);
    
    //Die if connection not successful
    if (!$conn){
        die("Sorry, we are unable to connect at the moment");
    }
?>