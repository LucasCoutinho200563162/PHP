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
            <!-- Include a image -->
            <img src="images/pizza-from-top.jpg" height="175" width = "300" alt="Pizza perspective from top on a table - Source https://en.wikipedia.org/wiki/Pizza">
            <figcaption>Deliciously baked</figcaption>
        </figure>
        <h2>Place your order</h2>
        <!-- Page-level main content -->
        <main>
            <!-- Page forms -->
            <form action="order_placed.php" method="post">
                <!-- Order details -->
                <fieldset>
                    <legend>Make your order</legend>
                    <!-- Amount of Pizzas -->
                    <label for="amountPizzas">How many pizzas?</label>
                    <select id="amountPizzas" name="amountPizzas">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                    <br>
                    <!-- Size of Pizza-->
                    <label for="sizeOfPizza">How many slices?</label>
                    <select id="sizeOfPizza" name="sizeOfPizza">
                        <option value="small">Small (6 slices)</option>
                        <option value="medium">Medium (8 slices)</option>
                        <option value="large">Large (12 slices)</option>
                    </select>
                    <br>

                    <!-- Shape -->
                    <label for="shapeOfPizza">What shape?</label>
                    <select id="shapeOfPizza" name="shapeOfPizza">
                        <option value="round">Round</option>
                        <option value="square">Square</option>
                    </select>
                    <br>
                    <!-- Crust type-->
                    <label for="crustType">What crust?</label>
                    <select id="crustType" name="crustType">
                        <option value="chicagoStyle">Deep Dish (Chicago Style)</option>
                        <option value="thinCrust ">Thin Crust</option>
                        <option value="pan">Pan</option>
                    </select>

                    <!-- Toppings -->
                    <br>
                    
                    <fieldset style="width:300px" class="topping-columns">
                        <legend>Toppings</legend>
                        <input type="checkbox" id="pepperoni" name="topping[]" value="pepperoni">
                        <label for="pepperoni">Pepperoni</label><br>

                        <input type="checkbox" id="anchovies" name="topping[]" value="anchovies">
                        <label for="anchovies">Anchovies</label><br>

                        <input type="checkbox" id="pineapple" name="topping[]" value="pineapple">
                        <label for="pineapple">Pineapple</label><br>

                        <input type="checkbox" id="prosciutto" name="topping[]" value="prosciutto">
                        <label for="prosciutto">Prosciutto</label><br>

                        <input type="checkbox" id="pesto" name="topping[]" value="pesto">
                        <label for="pesto">Pesto</label><br>

                        <input type="checkbox" id="chicken" name="topping[]" value="chicken">
                        <label for="chicken">Chicken</label><br>

                        <input type="checkbox" id="spinach" name="topping[]" value="spinach">
                        <label for="spinach">Spinach</label><br>

                        <input type="checkbox" id="mushroom" name="topping[]" value="mushroom">
                        <label for="mushroom">Mushroom</label><br>

                        <input type="checkbox" id="pickle" name="topping[]" value="pickle">
                        <label for="pickle">Pickle</label><br>

                        <input type="checkbox" id="buffalo-chicken" name="topping[]" value="buffalo-chicken">
                        <label for="buffalo-chicken">Buffalo Chicken</label><br>
                    </fieldset>

                    <!-- Delivery -->
                    <br>
                    <label for="deliveryType">Delivery option:</label><br>
                    <input type="radio" id="dineIn" name="deliveryType" value="dineIn" required>
                    <label for="dineIn">Dine-in</label><br>
                    <input type="radio" id="takeOut" name="deliveryType" value="takeOut" required>
                    <label for="takeOut">Take-out</label><br>
                    <input type="radio" id="delivery" name="deliveryType" value="delivery" required>
                    <label for="delivery">Delivery</label>
                    <br><br>
                    <!-- Personal Information Fields -->
                    <fieldset>
                        <legend>Personal Information</legend>
                        <label for="name">Name:</label>
                        <input type="text" id="Name" name="Name" placeholder="e.g. John Doe" class = "personal_text" required>
                        <br>
                        <label for="phoneNumber">Phone Number:</label>
                        <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="e.g. 123-456-7890" required>
                        <br>
                        <label for="address">Address:</label>
                        <input type="text" id="address" name="address" placeholder="e.g. 999 Main St, Toronto, ON, ABC123" class = "personal_text" required>
                        <br><br>
                    </fieldset>
                    <br><br>
                    <label for="comments">Additional comments:</label>
                    <input type="text" id="comments" name="comments" placeholder="e.g. Do not include onions">
              
                </fieldset>
                <br>
                <!-- Buttons -->
                <input type="submit" value="Place Order">
                <input type="reset" value="Reset">
            </form>
        </main>
        <!-- Page Level Footer -->
        <footer>
            <p><small>© Lucas @ Georgian Inc.</small></p>
        </footer>
    </body>
</html>