<?php include('../model/config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="../css/stylen.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="../assets/logo.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <div class="nav-menu text-right">
          <h1 class="name">Golden Buns</h1>
          <ul>
            <li>
              <a href="../index.html">Home</a>
            </li>

            <li>
              <a href="../view/categories.php">Category</a>
            </li>
            <li>
              <a href="../view/foods.php">Food</a>
            </li>
            <li>
              <a href="../view/login.php">Login</a>
            </li>
            <li>
              <a href="../view/registration.php">Registration</a>
            </li>
            <li>
              <a href="#">About</a>
            </li>
          </ul>

          <div class="clearfix"></div>
        </div>
      </div>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->
  </body>
  </html>