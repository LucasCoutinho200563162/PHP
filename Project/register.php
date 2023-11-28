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
                <form action="include/registration.php" method="post">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" placeholder="JohnDoe2024" required>

                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Password1234" required>

                    <label for="firstName">First name:</label>
                    <input type="text" id="firstName" name="firstName" placeholder="John" required>
                    
                    <label for="lastName">Last name:</label>
                    <input type="text" id="lastName" name="lastName" placeholder="Doe" required>

                    <label for="emailAddress">Email address:</label>
                    <input type="email" id="emailAddress" name="emailAddress" placeholder="johndoe@email.com" required>

                    <input class="register-button" type="submit" value="Register"/>
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
