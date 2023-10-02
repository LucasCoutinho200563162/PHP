<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="utf-8" />
	    <title>Georgian Pizza | Assignment 1</title>
        <link rel="stylesheet" href="css/styles.css" />
        <meta name="author" content="Lucas Coutinho" />
		<meta name="description" content="Order your pizza from Georgian Pizza">
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    </head>
    <body>
        <?php
            include 'header.php';
        ?>
        <figure>
            <img src="images/pizza-from-top.jpg" height="175" width = "300" alt="Pizza perspective from top on a table - Source https://en.wikipedia.org/wiki/Pizza">
            <figcaption>Deliciously baked</figcaption>
        </figure>
        <!-- Page-level main content -->
        <main>
            <section>
				<h1>Order placed!</h1>
                <?php
                // Remove error reporting for most cases unless parsing error
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    // Include the database connection
                    include 'db_con.php';

                    // Variables
                    $amountPizzas = $_POST['amountPizzas'];
                    $sizeOfPizza = $_POST['sizeOfPizza'];
                    $shapeOfPizza = $_POST['shapeOfPizza'];
                    $crustType = $_POST['crustType'];
                    $toppings = implode(', ', $_POST['topping']);
                    $deliveryType = $_POST['deliveryType'];
                    $name = $_POST['Name'];
                    $phoneNumber = $_POST['phoneNumber'];
                    $address = $_POST['address'];
                    $comments = $_POST['comments'];
                    
                    // Insert customer info
                    $sqlCustomer = "INSERT INTO users (name, phone_number, address)
                    VALUES ('$name', '$phoneNumber', '$address')
                    ON DUPLICATE KEY UPDATE
                        phone_number = '$phoneNumber',
                        address = '$address';";

                    mysqli_query($conn, $sqlCustomer);


                    // Retrieve customer ID
                    $queryUserId = "SELECT user_id FROM users WHERE name = '$name'";
                    $resultUserId = mysqli_query($conn, $queryUserId);
                    $row = $resultUserId->fetch_assoc();
                    $userId = $row["user_id"];


                    // Insert new order to table
                    $sql = "INSERT INTO orders (amount, size, shape, crust, toppings, delivery, comments, user_id) VALUES ($amountPizzas, '$sizeOfPizza', '$shapeOfPizza', '$crustType', '$toppings', '$deliveryType', '$comments', $userId)";

                    mysqli_query($conn, $sql);

                    // Close the database connection
                    mysqli_close($conn);
                }
                ?>
                <?php
                    // Remove error reporting for most cases unless parsing error
                    error_reporting(E_PARSE);
                    $amountPizzas = $_POST['amountPizzas'];
                    $sizeOfPizza = $_POST['sizeOfPizza'];
                    $name = $_POST['Name'];
                    $phoneNumber = $_POST['phoneNumber'];

                    echo "Thanks for ordering $name. Your $amountPizzas $sizeOfPizza pizzas will be ready soon. We might call you on your phone number ($phoneNumber)."
                ?>
			</section>
        </main>
        <!-- Page Level Footer -->
        <footer>
            <p><small>© Lucas @ Georgian Inc.</small></p>
        </footer>
    </body>
</html>