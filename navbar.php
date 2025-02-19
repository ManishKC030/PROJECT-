<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="stylesheet/nav-footer.css">
</head>

<body>

  <!-- Navigation Bar -->
  <nav></nav>
  <header>
    <div class="top-bar">
      <div class="left-nav">
        <ul>


          <li><a href="contact.php">Contact Us: 061-587123 </a></li>
          <li><a href="404-not-found.php">About Us</a></li>
          <li><a href="admin/ad_register.php">Become a Seller </a></li>
        </ul>
      </div>

      <div class="right-nav">
        <ul>
          <li><a href="store_location.php">Store Location</a></li>
          <li><a href="account.php">My Account</a></li>
          <li><a href="login.php">Login/Register</a></li>
        </ul>
      </div>
    </div>


    <!-- Main Navigation -->
    <nav class="main-nav">
      <a href="index.php" style="text-decoration: none;">
        <h1 class="logo">ShoesHub</h1>
      </a>
      <?php
      $current_page = basename($_SERVER['PHP_SELF']);
      ?>

      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="mens.php" class="<?= $current_page == 'mens.php' ? 'active' : '' ?>">Men</a></li>
        <li><a href="womens.php" class="<?= $current_page == 'womens.php' ? 'active' : '' ?>">Women</a></li>
        <li><a href="kids.php" class="<?= $current_page == 'kids.php' ? 'active' : '' ?>">Kids</a></li>
        <li><a href="cart.php" class="<?= $current_page == 'cart.php' ? 'active' : '' ?>">Cart</a></li>
      </ul>
      <!--<li><a href="#">Wishlist</a></li> -->

      <!-- Search Bar -->
      <div class="search-bar">
        <form action="search.php" method="GET">
          <input
            type="text"
            name="query"
            placeholder="Search for products..."
            class="search-input"
            required>
          <button class="search-button">Search</button>
        </form>
      </div>

    </nav>
  </header>
  </nav>


  <!-- Your content over here -->