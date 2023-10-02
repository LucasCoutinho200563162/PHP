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
                <form action="" method="post">
                    <label for="userID">Enter User ID:</label>
                    <input type="text" id="userID" name="userID" required>
                    <input type="submit" value="Search">
                </form>

                <?php
                    // Remove error reporting for most cases unless parsing error
                    error_reporting(E_PARSE);
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        // Include the database connection
                        include 'db_con.php';
                        $userIdToSearch =  $_POST['userID'];

                        $sql =  "select u.name, u.address, u.phone_number, o.* from users u
                        join orders o on u.user_id =  o.user_id
                        where u.user_id = $userIdToSearch
                        order by u.name asc, created_at desc";
                        $userOrders = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($userOrders) > 0) {
                            echo "<h2>User Orders</h2>";
                            echo "<table border='1'>";
                            echo "<tr>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Phone Number</th>
                                    <th>Amount</th>
                                    <th>Size</th>
                                    <th>Shape</th>
                                    <th>Crust</th>
                                    <th>Toppings</th>
                                    <th>Delivery</th>
                                    <th>Comments</th>
                                    <th>User ID</th>
                                    <th>Order ID</th>
                                    <th>Created At</th>
                                </tr>
                                ";
                    
                            // Loop through the results and display them in a table
                            while ($row = mysqli_fetch_assoc($userOrders)) {
                                echo "<tr>";
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td>" . $row['address'] . "</td>";
                                echo "<td>" . $row['phone_number'] . "</td>";
                                echo "<td>" . $row['amount'] . "</td>";
                                echo "<td>" . $row['size'] . "</td>";
                                echo "<td>" . $row['shape'] . "</td>";
                                echo "<td>" . $row['crust'] . "</td>";
                                echo "<td>" . $row['toppings'] . "</td>";
                                echo "<td>" . $row['delivery'] . "</td>";
                                echo "<td>" . $row['comments'] . "</td>";
                                echo "<td>" . $row['user_id'] . "</td>";
                                echo "<td>" . $row['order_id'] . "</td>";
                                echo "<td>" . $row['created_at'] . "</td>";                                
                                echo "</tr>";
                            }
                            echo "</table>";
                        } else {
                            echo "<h2>No data available.</h2>";
                        }
                    
                    }
                ?>
			</section>
        </main>
        <!-- Page Level Footer -->
        <footer>
            <p><small>© Lucas @ Georgian Inc.</small></p>
        </footer>
    </body>
</html>