<!-- Assignment 2 by da25977 -->
<!-- All images are sourced from Microsoft PowerPoint stock background images unless specified otherwise. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Artist Portfolio Site</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- navigation bar -->
    <?php include 'inc/header.php'; ?>

    <!-- main content -->
    <div class="container">
        <div class="side">
            <h2>Abstract Artist Portfolio</h2>
            <img src="images/abstrsquare.png" alt="An orb comprised of colourful triangles">
            <p>
                Artist Name has been producing abstract art for over 5 days. Paintings, both physical and digital, can
                provide a medium to express what can't be expressed in words. Browse several different varieties of
                colourful abstract art and explore the different possibilites it can bring you.
            </p>
            <p>
                Not interested in picking up a painting? Buy some merchandise on our online store! We've got shirts,
                mugs, strange trinkets you'd probably get for your grandma because you couldn't think of anything else,
                and all sorts of overpriced things that someone thought would be worth mass-producing for some reason.
                And more shirts and mugs.
            </p>
            <h3>Varieties of Abstract Art</h3>
            <img src="images/abstrwater.jpeg" alt="A close up of pink and blue coloured water">
            <!-- sourced from https://obsessedwithart.com/abstract-art-styles/ -->
            <p>
                Abstract art is hard to define, as its production has spanned many countries over the decades. At its
                core, abstract art is a deliberate moving away from reality or the norm. The art movements Romanticism,
                Impressionism, Expressionism - and the output of dynamic, painterly works by artists associated with the
                respective styles - are often considered the forerunners for Modern and Abstract art. Abstract artists
                rejected perspective, naturalism, and other artistic practices that underpinned artistic production for
                centuries. Abstract art as a genre does not attempt to faithfully depict reality instead aiming to
                achieve a certain effect, emotion, or even ambiance through the use of shape, color, and form. For the
                most part, abstract art is non-figurative and non-representational. That is to say, it does not render
                objects, people, or ideas as they would normally appear rather conveying them.
            </p>
        </div>
        <div class="main">
            <!-- <h2>Item Title 1</h2>
            <h5>Look at this photo.</h5>
            <img alt="Greyscale abstract art with grey and white circle and diamond shapes" src="images/abstr3.png">
            <p>
                Description for piece 1.
            </p>
            <br>
            <h2>Item Title 2</h2>
            <h5>Look at this one too.</h5>
            <img alt="Greyscale abstract art with grey and white circle and diamond shapes" src="images/background2.jpg">
            <p>
                Description for piece 2.
            </p> -->

            <?php
            require 'inc/db.php';

            // get featured items
            $result = $conn->query("SELECT * FROM items WHERE featured = 1 ORDER BY date_added DESC");
            
            while ($item = $result->fetch_assoc()) {
                ?>

                <h2>
                    <?= htmlspecialchars($item['title']) ?>
                </h2>
                <h5>
                    <a href="details.php?id=<?= $item['id'] ?>">View this featured artwork</a>
                </h5>

                <img src="<?= htmlspecialchars($item['image']) ?>" alt="<?= htmlspecialchars($item['title']) ?>">

                <p>
                    <?= htmlspecialchars($item['description']) ?>
                </p>
                <br>

                <?php
            }
            ?>
        </div>
    </div>

    <!-- footer -->
    <?php include 'inc/footer.php' ?>

</body>

</html>