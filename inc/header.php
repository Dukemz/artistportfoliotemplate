<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<div class="navbar">
  <a href="index.php">Artist Name</a>

  <input type="checkbox" id="menu-toggle">
  <label for="menu-toggle" class="menu-icon">☰</label>

  <ul class="navbar-right">
    <li>
      <!-- 
        this is a ternary operator, a shorter more compact alternative of an if statement (I've used ternary operators in JS before)
        effectively what this does is if the current page is index.php, it echoes "active" thus setting this element to be part of the active css class
      -->
      <a class="<?= ($currentPage == 'index.php') ? 'active' : '' ?>" href="index.php">Home</a>
    </li>
    <li>
      <a class="<?= ($currentPage == 'about.php') ? 'active' : '' ?>" href="about.php">About</a>
    </li>
    <li>
      <a class="<?= ($currentPage == 'store.php') ? 'active' : '' ?>" href="store.php">Store</a>
    </li>
    <li>
      <a class="<?= ($currentPage == 'basket.php') ? 'active' : '' ?>" href="basket.php">Basket</a>
    </li>
  </ul>
</div>