<!-- Assignment 2 by da25977 -->
<!-- All images are sourced from Microsoft PowerPoint stock background images unless specified otherwise. -->

<?php
session_start();
require 'inc/db.php';

// basket is set to existing session array if it exists or an empty one if not
$basket = $_SESSION['basket'] ?? [];
$total = 0;

// handle actions (remove/update)
if (isset($_GET['remove'])) {
    $id = (int) $_GET['remove'];
    unset($_SESSION['basket'][$id]);
    header("Location: basket.php");
    exit;
}

if (isset($_GET['decrease'])) {
    $id = (int) $_GET['decrease'];
    if (isset($_SESSION['basket'][$id])) {
        $_SESSION['basket'][$id]--;
        if ($_SESSION['basket'][$id] <= 0) {
            unset($_SESSION['basket'][$id]);
        }
    }
    header("Location: basket.php");
    exit;
}

if (isset($_GET['increase'])) {
    $id = (int) $_GET['increase'];
    $_SESSION['basket'][$id]++;
    header("Location: basket.php");
    exit;
}
?>

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

                <?php
                if (empty($basket)) {
                    echo "<p>Your basket is empty.</p>";
                } else {
                    // convert ids into comma-separated list (implode joins array items into a string)
                    $ids = implode(',', array_keys($basket));

                    // get information on items in basket only
                    $result = $conn->query("SELECT * FROM items WHERE id IN ($ids)");

                    while ($item = $result->fetch_assoc()) {
                        // info from results, quantity & subtotal/total
                        $id = $item['id'];
                        $qty = $basket[$id];
                        $subtotal = $item['price'] * $qty;
                        $total += $subtotal;
                        ?>

                        <div class="basket-item">
                            <img src="<?= htmlspecialchars($item['image']) ?>" alt="<?= htmlspecialchars($item['title']) ?>">
                            <div class="basket-details">
                                <h3><?= htmlspecialchars($item['title']) ?></h3>
                                <!-- <p><?= htmlspecialchars($item['description']) ?></p> -->
                                <p class="price">£<?= number_format($item['price'], 2) ?></p>

                                <p>Quantity: <?= $qty ?></p>

                                <!-- controls for quantity and removing -->
                                <div class="basket-controls">
                                    <a href="basket.php?decrease=<?= $id ?>">−</a>
                                    <a href="basket.php?increase=<?= $id ?>">+</a>
                                    <a href="basket.php?remove=<?= $id ?>">Remove</a>
                                </div>
                            </div>
                        </div>

                        <?php
                    }
                }
                ?>

            </div>

            <!-- summary -->
            <div class="basket-summary">
                <p>Subtotal: <strong>£<?= number_format($total, 2) ?></strong></p>
                <p>Shipping: <strong>£5.00</strong></p>
                <p class="basket-total">Total: <strong>£<?= number_format($total + 5, 2) ?></strong></p>

                <button onclick="alert('pretend a payment window popped up or something')"
                    class="checkout-btn">Checkout</button>
            </div>

        </div>
    </div>

    <!-- footer -->
    <?php include 'inc/footer.php'; ?>

</body>

</html>