<!-- Page-level header -->
<header>
    <img class="logo" src="img/Nvidia_logo.svg" alt="Nvidia Logo">
    <!-- Image source https://sco.wikipedia.org/wiki/File:Nvidia_logo.svg-->
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="product.php">Product</a></li>
            <li><a href="contact.php">Contact</a></li>
            <?php
                if (isset($_SESSION['user_id'])) {
                    echo '<li><a href="logout.php">Logout</a></li>';
                } else {
                    echo '<li><a href="login.php">Login</a></li>';
                }
            ?>
        </ul>
    </nav>
</header>