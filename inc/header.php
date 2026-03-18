<?php
// set the currentPage variable to the currently active php file
$currentPage = basename($_SERVER['PHP_SELF']);

// map with all the navbar items
$navItems = [
  "index.php" => "Home",
  "about.php" => "About",
  "store.php" => "Store",
  "basket.php" => "Basket"
];
?>

<div class="navbar">
  <a href="index.php">Artist Name</a>

  <input type="checkbox" id="menu-toggle">
  <label for="menu-toggle" class="menu-icon">☰</label>

  <ul class="navbar-right">
    <!-- set file and label variables for each item in the map -->
    <!-- htmlspecialchars is used to prevent injection just in case -->
    <?php foreach ($navItems as $file => $label): ?>
      <li>
        <!-- if the current page is same as the page listed here, set the class to active via a ternary operator -->
        <a
          class="<?= ($currentPage === $file) ? 'active' : '' ?>"
          href="<?= htmlspecialchars($file) ?>"
        >
          <?= htmlspecialchars($label) ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
</div>