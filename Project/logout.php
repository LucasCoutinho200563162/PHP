<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Login</title>
</head>

<body>

    <?php
    include 'header.php';
    ?>

    <!-- Main Content -->
    <main class="login-page">
        <?php
            session_start();
            session_unset();
            session_destroy();
            header('location:index.php');
        ?>
    </main>

    <!-- Footer -->
    <?php
    include 'footer.php';
    ?>

</body>

</html>
