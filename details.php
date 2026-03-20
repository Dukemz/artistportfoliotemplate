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

    <?php
    require 'inc/db.php';

    // check if ID exists in URL
    if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
        echo "<p>Error: Invalid ID in URL. Did you access this page directly?</p>";
        exit;
    }

    $id = (int) $_GET['id'];

    // fetch item from database - prepare statement
    $stmt = $conn->prepare("SELECT * FROM items WHERE id = ?");
    // bind parameters
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    // check if item exists
    if ($result->num_rows === 0) {
        echo "<p>Error: Product not found.</p>";
        exit;
    }

    $item = $result->fetch_assoc();
    ?>

    <!-- main content -->
    <div class="container">

        <!-- product image -->
        <div class="side product-image">
            <img src="<?= htmlspecialchars($item['image']) ?>" alt="<?= htmlspecialchars($item['title']) ?>">
        </div>

        <!-- product details -->
        <div class="main product-details">
            <h1><?= htmlspecialchars($item['title']) ?></h1>

            <p class="product-price">£<?= number_format($item['price'], 2) ?></p>

            <p>
                <?= nl2br(htmlspecialchars($item['description'])) ?>
            </p>

            <!-- add to basket -->
            <button class="add-to-cart-btn" onclick="document.location='basket.php?id=<?= $item['id'] ?>'">
                Add to Basket
            </button>

            <hr>

            <h3>Details</h3>
            <ul>
                <li>Category: <?= htmlspecialchars($item['category']) ?></li>
                <li>Date Added: <?= htmlspecialchars($item['date_added']) ?></li>
            </ul>
        </div>

    </div>

    <!-- footer -->
    <?php include 'inc/footer.php'; ?>

</body>

</html>