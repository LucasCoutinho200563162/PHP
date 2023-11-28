<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Contact Us - RTX 4090 Graphics Card</title>
</head>

<body>

    <?php
        include 'header.php';
    ?>

    <!-- Main Content -->
    <main class="contact-form-page">
        <section class="contact-form">
            <h1>Contact Us</h1>
            <form action="include/submit_ticket.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Inquiry:</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <button type="submit" id="contact-submit">Submit</button>
            </form>
        </section>
    </main>

    <!-- Footer -->
    <?php
    include 'footer.php';
    ?>

</body>

</html>
