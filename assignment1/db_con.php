
<?php

    // Connecting to the database


    $servername="localhost";
    $username="root";
    $password="Georgian2023!";
    $database="assignment1";

    // Create a connection
    $conn=mysqli_connect($servername, $username, $password, $database);
    
    //DIe if connection not successful

    if (!$conn){
        die("Sorry, we are unable to connect at the moment");
    }
?>