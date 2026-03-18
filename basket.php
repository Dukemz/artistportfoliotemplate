<!-- Assignment 2 by da25977 -->
<!-- All images are sourced from Microsoft PowerPoint stock background images unless specified otherwise. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Artist - Basket</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/basket.css">
</head>

<body>
    <!-- navbar -->
    <?php include 'inc/header.php'; ?>

    <!-- main content -->
    <div class="container">
        <div class="main basket-page">
            <h1>Your Basket</h1>

            <!-- basket items -->
            <div class="basket-list">

                <div class="basket-item">
                    <img src="images/background2.jpg" alt="Product 1">
                    <div class="basket-details">
                        <h3>Product 1</h3>
                        <p>Description</p>
                        <p class="price">£25.00</p>
                    </div>
                </div>

                <div class="basket-item">
                    <img src="images/abstr3.png" alt="Product 2">
                    <div class="basket-details">
                        <h3>Product 2</h3>
                        <p>Description</p>
                        <p class="price">£120.00</p>
                    </div>
                </div>

            </div>

            <!-- summary -->
            <div class="basket-summary">
                <p>Subtotal: <strong>£145.00</strong></p>
                <p>Shipping: <strong>£5.00</strong></p>
                <p class="basket-total">Total: <strong>£150.00</strong></p>

                <button onclick="alert('aight thanks for the money loser')" class="checkout-btn">Checkout</button>
            </div>

        </div>
    </div>

    <!-- footer -->
    <?php include 'inc/footer.php'; ?>

</body>

</html>