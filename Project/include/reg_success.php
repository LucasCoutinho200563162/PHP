<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Login</title>
</head>

<body>

    <!-- Main Content -->
    <main class="login-page">
    <?php

        echo "<p>You will be redirected in 5 seconds</p>";

        header('refresh: 5; url=../login.php'); 
        ?>
    </main>

    <!-- Footer -->
    <?php
    include '../footer.php';
    ?>

</body>

</html>
