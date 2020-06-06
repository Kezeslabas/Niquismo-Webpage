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
<body>
    
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

    <h2>Visit one of our stores</h2>
    <section>
        <ul>
            <li>
                <img src="./res/shopsample.png" alt="">
                <ul>
                    <li>Store 1</li>
                    <li>Alice Street 45.</li>
                    <li>Wonderland</li>
                    <li>+36 11 1234 123</li>
                </ul>
            </li>
            <li>
                <img src="./res/shopsample.png" alt="">
                <ul>
                    <li>Store 2</li>
                    <li>Alice Street 45.</li>
                    <li>Wonderland</li>
                    <li>+36 11 1234 123</li>
                </ul>
            </li>
            <li>
                <img src="./res/shopsample.png" alt="">
                <ul>
                    <li>Store 3</li>
                    <li>Alice Street 45.</li>
                    <li>Wonderland</li>
                    <li>+36 11 1234 123</li>
                </ul>
            </li>
        </ul>
    </section>
    <footer>
        <img src="./res/footersample.png" alt="">
    </footer>
</body>
<script src="./src/scripts/stores.js"></script>
</html>