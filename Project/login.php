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
    
    <main class="contact-form-page">
        <section class="contact-form">
            <fieldset>
                <legend>Login</legend>
                <form action="include/login_validation.php" method="post">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" placeholder="JohnDoe2024" required>

                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Password1234" required>

                    <input class="login-button" type="submit" value="Login"/>
                    <br>
                    <p>Don't have an account? <a href="register.php">Register here</a></p>
                </form>
            </fieldset>
        </section>
    </main>

    <!-- Footer -->
    <?php
    include 'footer.php';
    ?>

</body>

</html>
