<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>RTX 4090 Graphics Card - Product Page</title>
</head>

<body>

    <?php
        include 'header.php';
    ?>

    <!-- Main Content -->
    <main class="rtx-page">
        <section class="product-page">
            <article class="product-about">
                <h2>RTX 4090 Graphics Card</h2>
                <br>
                <p>GeForce RTX™ 4090 24GB GDDR6X with DLSS 3 and chart-topping thermal performance</p>

                <section class="product-description">
                    <fieldset>
                        <legend>Description</legend>
                        <p>The Nvidia GeForce RTX 4090 is a high-end desktop graphics card based on the AD102 chip using the Ada Lovelace architecture. 
                            The 4090 offers 16,384 of the 18,432 cores and 24 GB GDDR6X graphics memory with a 384 bit memory bus and clocked at 21 Gbits. 
                            The card offers an excellent raytracing performance thanks to the 128 dedicated raytracing cores. For AI calculations (and DLSS 3 in games), the RTX 4090 has 512 Tensor cores.
                        </p>
                    </fieldset>
                </section>
                

                <section class="image-gallery">
                    <img src="img/rtx-4090-on-desk.jpg" alt="RTX 4090 on a desk">
                    <!-- Image source https://www.digitaltrends.com/computing/nvidia-geforce-rtx-4090-review/-->

                    <img src="img/rtx-4090-face.jpg" alt="RTX 4090 front face">
                    <!-- Image source https://www.pcworld.com/article/1071034/nvidia-geforce-rtx-4090-4080-revealed-gtc-project-beyond.html-->

                    <img src="img/rtx-4090-perspective.jpg" alt="RTX 4090 from perspective in front of its box">
                    <!-- Image source https://www.techspot.com/review/2544-nvidia-geforce-rtx-4090/ -->
                </section>


                <section class="price-section">
                    <h3>Price: $999.99</h3>
                    <a href="#" class="buy-button">Buy Now</a>
                </section>

                <section class="reviews">
                    <fieldset>
                        <legend>Customer Reviews</legend>

                        <div class="review-box">
                            <img src="img/avatar.jpg" alt="User Avatar">
                            <p class="review">★★★★★<br> 5/5 <br> Good for heavy workloads in AI.</p>
                        </div>
                        <div class="review-box">
                            <img src="img/avatar.jpg" alt="User Avatar">
                            <p class="review">★★★★★<br> 5/5 <br> Excellent graphics card, exceeded my expectations.</p>
                        </div>
                    </fieldset>
                </section>
            </article>
        </section>
    </main>

    <!-- Footer -->
    <?php
    include 'footer.php';
    ?>

</body>

</html>
