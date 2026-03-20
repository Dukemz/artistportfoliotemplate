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

            <!-- hardcoded listing example (now removed) -->
            <!-- <div class="store-item">
                <img src="images/abstr2.png" alt="Store Item 1">
                <p><a href="details.php">Store Item 1</a></p>
            </div> -->

            <?php
            require 'inc/db.php';

            $result = $conn->query("SELECT * FROM items");

            // fetch_assoc gets results in a format like a map rather than a standard array
            // put the database results into the elements
            while ($row = $result->fetch_assoc()) { ?>
                <div class="store-item">
                    <a href="details.php?id=<?= $row['id'] ?>">
                        <img src="<?= htmlspecialchars($row['image']) ?>" alt="<?= htmlspecialchars($row['title']) ?>">
                    </a>
                    <p>
                        <a href="details.php?id=<?= $row['id'] ?>" title="<?= htmlspecialchars($row['description']) ?>">
                            <?= htmlspecialchars($row['title']) ?>
                        </a>
                    </p>
                </div>
                <?php
            }
            ?>

        </div>
    </div>

    <!-- footer -->
    <?php include 'inc/footer.php'; ?>

</body>

</html>