<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Niquismo-Stores</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Scrollspy-hoz kell -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="src/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <?php
      // Get Shop Contents
      $contents = file_get_contents("./src/data/stores.cnt");
      echo('<div id="store_data" style="display:none">'.$contents.'</div>');
    ?>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" style="font-family:'Book Antiqua'">
    
  <header id="header">
    <div class="container">


      <nav class="navbar bg-dark navbar-dark fixed-top" id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="index.php#hero">Home</a></li>
          <li><a href="index.php#aboutus">About Us</a></li>
          <li><a href="index.php#articles">Articles</a></li>
          <li><a href="index.php#services">Our Services</a></li>
          <li><a href="index.php#gallery">Gallery</a></li>
          <li><a href="index.php#contactus">Contact Us</a></li>
          <li><a href="shops.php">Stores</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <section class="shopspage" class="container-fluid">

  <div>
    <h2>Visit one of our stores</h2>
    <div id="shoplist" class="shop-grid-container"> 
      <div class="shop-gchild-info">
          <p class="shopname">Store 1</p>
          <p class="shoptact"></a>Contact</p>
          <ul class="shopdata">
              <li>Alice Street 45.</li>
              <li>Wonderland</li>
              <li><a href="googlemaps.com">Get directions</a></li>
          </ul>
          <ul class="shopdata">
              <li>wonder@niquismo.com</li>
              <li>+23 45 3456 896</li>
          </ul>
      </div>
      <div class="shop-gchild-hours">    
          <p class="shopopen">Open Hours</p>
          <ul class="shophours">
              <li>Mon-Fri: 8 - 16</li>
              <li>Saturday: 10 - 16</li>
              <li>Sunday: 10 - 12</li>
          </ul>
      </div>
      <div class="shop-gchild-img">
        <img src="./res/shopsample.png" alt="">
      </div> 
      <div class="shop-gchild-info">
          <p class="shopname">Store 2</p>
          <p class="shoptact"></a>Contact</p>
          <ul class="shopdata">
              <li>Pan Street 11.</li>
              <li>Neverland</li>
              <li><a href="googlemaps.com">Get directions</a></li>
          </ul>
          <ul class="shopdata">
              <li>neverland@niquismo.com</li>
              <li>+11 22 3274 901</li>
          </ul>
      </div>
      <div class="shop-gchild-hours">    
          <p class="shopopen">Open Hours</p>
          <ul class="shophours">
              <li>Mon-Fri: 8 - 20</li>
              <li>Saturday: 10 - 18</li>
              <li>Sunday: 10 - 16</li>
          </ul>
      </div>
      <div class="shop-gchild-img">
          <img src="./res/shopsample.png" alt="">
      </div>
      <div class="shop-gchild-info">
          <p class="shopname"></a>Store 3</p>
          <p class="shoptact"></a>Contact</p>
          <ul class="shopdata">
              <li>Diagon Alley 23.</li>
              <li>Azkaban</li>
              <li><a href="googlemaps.com">Get directions</a></li>
          </ul>
          <ul class="shopdata">
              <li>diagon@niquismo.com</li>
              <li>+66 66 6666 666</li>
          </ul>
      </div>
      <div class="shop-gchild-hours">    
          <p class="shopopen">Open Hours</p>
          <ul class="shophours">
              <li>Mon-Fri: 12 - 13</li>
              <li>Saturday: Nope.</li>
              <li>Sunday: Not happening.</li>
          </ul>
      </div>
      <div class="shop-gchild-img">
          <img src="./res/shopsample.png" alt="">
      </div>
    </div>
</div>
    </section>
    <footer id="footer">
        <div class="footer-top">
          <div class="container">
    
          </div>
        </div>
    
        <div class="container">
          <div class="copyright">
            &copy; Copyright <strong>Niquismo Team</strong>. All Rights Reserved
          </div>
    
        </div>
      </footer><!-- #footer -->
</body>
<script src="./src/scripts/stores.js"></script>
</html>