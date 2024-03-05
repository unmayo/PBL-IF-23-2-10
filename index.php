<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Import Export and Logistics Company Web</title>

    <!-- Font -->

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,400;1,100&display=swap" rel="stylesheet" />

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <link rel="stylesheet" href="style.css" />

  </head>
  <body>
    <!-- Navbar 1 -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">
        <img src="D:\XAMPP\htdocs\Expor Impor Logistik\logo.png" alt="Logo" style="width: 32px" />
      </a>

      <div class="navbar-nav">
        <a href="index.php">Home</a>
        <a href="#">Our Businesses</a>
        <a href="news.php">News</a>
        <a href="#">Sustainability</a>
        <a href="about.html">About Us</a>
        <a href="#">Career</a>
        <a href="contact.php">Contact</a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="search"><i data-feather="search"></i></a>
        <a href="#" id="menu-menu"><i data-feather="menu"></i></a>
        <?php include 'userinfo.php'; ?>

      </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
      <main class="content">
        <div class="rectangle-container">
          <a href="#" class="rectangle1">
            <h2>LOGISTIC & SHIPPING</h2>
          </a>
          <a href="#" class="rectangle2">
            <h2>TRADING</h2>
          </a>
          <a href="#" class="rectangle3">
            <h2>INDUSTRY</h2>
          </a>
        </div>
      </main>
    </section>
    <!-- Hero Section -->

    <!--Icons-->
    <script>
      feather.replace();
    </script>
    
    <!-- JavaScript -->
    <script src="script.js"></script>
    
  </body>
</html>



