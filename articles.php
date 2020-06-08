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
      // Get Article Contents (only first 3 articles)
      $contents = file_get_contents("./src/data/articles.cnt");
      echo('<div id="art_data" style="display:none">'.$contents.'</div>');
    ?>

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
    
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

  <section id="articlespage" class="container-fluid">
        
    <div>
        <h2>Latest Articles</h2>
          <div id="articlelist" class="art-grid-container">
            <div class="art-gchild-img">
                <img src="https://gearpatrol.com/wp-content/uploads/2019/01/10-Best-Indoor-Plants-Gear-Patrol-lead-full.jpg" alt="flower">
            </div>
            <div class="art-gchild-artl">
                <p><b>This is the title</b></p>
                <p>Lorem ipsum dolor sit amet, consectetur 
                    adipiscing elit, sed do eiusmod tempor 
                    incididunt ut labore et dolore magna aliqua. 
                    Faucibus purus in massa tempor nec. 
                    Sapien et ligula ullamcorper malesuada proin 
                    libero. In eu mi bibendum neque egestas 
                    congue quisque diam. <a href="">Read more >></a></p>
                    
            </div>
            <div class="art-gchild-img">
                <img src="https://sporteluxe.com/wp-content/uploads/2017/03/PLANTS.jpg" alt="flower">
            </div>
            <div class="art-gchild-artl">
                <p><b>This is an other title</b></p>
                <p>Lorem ipsum dolor sit amet, consectetur 
                    adipiscing elit, sed do eiusmod tempor 
                    incididunt ut labore et dolore magna aliqua. 
                    Faucibus purus in massa tempor nec. 
                    Sapien et ligula proin 
                    libero. In eu mi bibendum neque egestas 
                    congue quisque egestas diam. <a href="">Read more >></a></p>
            </div>
            <div class="art-gchild-img">
                <img src="https://cdn.improb.com/wp-content/uploads/2019/05/Best-Indoor-Plants-for-Everyone.jpg" alt="flower">
            </div>
            <div class="art-gchild-artl">
                <p><b>This is a third title</b></p>
                <p>Lorem ipsum dolor sit amet, consectetur 
                    adipiscing elit, sed do eiusmod tempor 
                    incididunt ut labore et dolore magna aliqua. 
                    Faucibus purus in massa tempor nec. 
                    Sapien et ligula ullamcorper malesuada proin 
                    libero. In bibendum neque egestas 
                    congue quisque egestas diam. <a href="">Read more >></a></p>
            </div>
            <div class="art-gchild-img">
                <img src="https://smartgardenguide.com/wp-content/uploads/2020/03/light-requirements-for-indoor-plants-2-783x502.jpg" alt="flower">
            </div>
            <div class="art-gchild-artl">
                <p><b>This is yet another the title</b></p>
                <p>Lorem ipsum dolor sit amet, consectetur 
                    adipiscing elit, sed do eiusmod tempor 
                    incididunt ut labore et dolore magna aliqua. 
                    Faucibus purus in massa tempor nec. 
                    Sapien et ligula ullamcorper malesuada proin 
                    libero. In eu mi bibendum neque egestas 
                    congue quisque diam. <a href="">Read more >></a></p>
                    
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
<script src="./src/scripts/articles.js"></script>
</html>