<!-- Assignment 2 by da25977 -->
<!-- All images are sourced from Microsoft PowerPoint stock background images unless specified otherwise. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Artist - Store</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/store.css">
</head>

<body>
    <!-- navbar -->
    <?php include 'inc/header.php'; ?>

    <!-- main content -->
    <div class="container">
        
        <!-- this is the grid of store items - it should appear as a 3x2 grid on desktop and a straight column on mobile -->
        <div class="store-grid">

            <div class="store-item">
                <img src="images/abstr2.png" alt="Store Item 1">
                <p><a href="details.php">Store Item 1</a></p>
            </div>

            <div class="store-item">
                <img src="images/abstr1.png" alt="Store Item 2">
                <p><a href="details.php">Store Item 2</a></p>
            </div>

            <div class="store-item">
                <img src="images/abstr4.png" alt="Store Item 3">
                <p><a href="details.php">Store Item 3</a></p>
            </div>

            <div class="store-item">
                <img src="images/abstr5.png" alt="Store Item 4">
                <p><a href="details.php">Store Item 4</a></p>
            </div>

            <div class="store-item">
                <img src="images/abstr6.png" alt="Store Item 5">
                <p><a href="details.php">Store Item 5</a></p>
            </div>

            <div class="store-item">
                <img src="images/abstr7.png" alt="Store Item 6">
                <p><a href="details.php">Store Item 6</a></p>
            </div>

        </div>
    </div>

    <!-- footer -->
    <?php include 'inc/footer.php'; ?>

</body>

</html>