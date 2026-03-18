<!-- Assignment 2 by da25977 -->
<!-- All images are sourced from Microsoft PowerPoint stock background images unless specified otherwise. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Artist - Item Details</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/details.css">
</head>

<body>

    <!-- navbar -->
    <?php include 'inc/header.php'; ?>

    <!-- main content -->
    <div class="container">

        <!-- product image -->
        <div class="side product-image">
            <img src="images/background.jpg" alt="Artwork">
        </div>

        <!-- product details -->
        <div class="main product-details">
            <h1>Merchandise Title</h1>

            <p class="product-price">£45.00</p>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget convallis sem. Ut porttitor nisi vitae dolor
                malesuada, ac consectetur sem luctus. Nullam metus dui, aliquet in faucibus ut, aliquet in sem.
            </p>

            <p>
                In arcu nulla, pharetra vel consequat at, finibus sed libero. Ut dictum felis ut scelerisque feugiat. Etiam dapibus eu
                lorem id rutrum. Curabitur ut tortor non urna placerat dignissim.
            </p>

            <!-- redirect to the basket when clicked (technically doesn't function tho) -->
            <button class="add-to-cart-btn" onclick="document.location='basket.php'">Add to Basket</button>

            <hr>

            <h3>Details</h3>
            <ul>
                <li>Colour Variant 1</li>
                <li>Signed by artist</li>
                <li>Limited edition</li>
            </ul>
        </div>

    </div>

    <!-- footer -->
    <?php include 'inc/footer.php'; ?>

</body>

</html>