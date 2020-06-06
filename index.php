<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Niquismo</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Scrollspy-hoz kell-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="./src/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <?php
      // Get Article Contents (only first 3 articles)
      $contents = file("./src/data/articles.cnt");
      echo('<div id="art_data" style="display:none">');
      $length = count($contents);
      if($length > 3)$length = 3;
      for($i = 0; $i<$length; $i++)
      {
        echo($contents[$i]);
      }
      echo('</div>');

      // Get Comment Contents
      $contents = file_get_contents("./src/data/comments.cnt");
      echo('<div id="comm_data" style="display:none">'.$contents.'</div>');

    ?>


</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">


  

    <header id="header">
        <div class="container">
          <nav class="navbar bg-dark navbar-dark fixed-top" id="nav-menu-container">
            <ul class="nav-menu">
              <li class="menu-active"><a href="#hero">Home</a></li>
              <li><a href="#aboutus">About Us</a></li>
              <li><a href="#articles">Articles</a></li>
              <li><a href="#services">Our Services</a></li>
              <li><a href="#gallery">Gallery</a></li>
              <li><a href="#contactus">Contact Us</a></li>
              <li><a href="shops.php">Stores</a></li>
            </ul>
          </nav><!-- #nav-menu-container -->
        </div>
      </header><!-- #header -->

      <main id="main">

      <!--==========================
      Hero Section
      ============================-->
      <section id="hero">
      <div class="hero-container">
        <h1>Welcome to Niquismo</h1>
      </div>
      </section><!-- #hero -->
 
    <section id="aboutus" class="container-fluid">
        <div>
            <h2>About Us</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque imperdiet porta ante eget blandit. In lacus urna, venenatis quis convallis nec, scelerisque quis odio. Cras dapibus eros fermentum mattis sollicitudin. Quisque eget eleifend arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec lectus ante, posuere pretium nisl quis, tristique venenatis massa. Quisque velit nunc, vehicula ut lacinia a, efficitur non mi. 
            </p>
        </div>
    </section>

    <section id="articles" class="container-fluid">
        <!-- a címet raktam be linknek a galéria laphoz, nyugodtan bíráld felül -->
        <a href="articles.php"><h2>Latest Articles</h2></a>
        <div>
            <article>Article 1</article>
            <article>Article 2</article>
            <article>Article 3</article>
        </div>
        <a href="articles.php">more articles >></a>
    </section>

    <section id="services" class="container-fluid">
        <h2>Our Services</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur 
            adipiscing elit, sed do eiusmod tempor 
            incididunt ut labore et dolore magna aliqua. 
            Faucibus purus in massa tempor nec. 
            Sapien et ligula ullamcorper malesuada proin 
            libero. In eu mi bibendum neque egestas 
            congue quisque egestas diam. 
        </p>
        <a href="#contactus">Contact Us >></a>
        <a href="shops.php">Stores >></a>
    </section>


    


    <!--<section id="gallery" class="container-fluid">
        <div>
            <h2>Gallery</h2>
            <p>photos from our customers</p>
            <a href="">check out our<br> instagram<br> >></a>
        </div>
        <div>
            <img src="./res/sampleplant.png" alt="">
            <img src="./res/sampleplant.png" alt="">
            <img src="./res/sampleplant.png" alt="">
            <img src="./res/sampleplant.png" alt="">
            <img src="./res/sampleplant.png" alt="">
        </div> 
        
    </section> -->
<section id="gallery" class="container-fluid">

      <h2>Gallery</h2>
    <div class="gallery">
  <a target="_blank" href="res/plant4.jpg">
    <img src="res/plant4.jpg" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Dat plant</div>
</div>

<div class="gallery">
  <a target="_blank" href="res/plant1.jpg">
    <img src="res/plant1.jpg" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">A plant</div>
</div>

<div class="gallery">
  <a target="_blank" href="res/plant2.jpg">
    <img src="res/plant2.jpg" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">And another one</div>
</div>

<div class="gallery">
  <a target="_blank" href="res/plant3.jpg">
    <img src="res/plant3.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">AND ANOTHER ONE</div>
</div>

<div class="gallery">
  <a target="_blank" href="res/plant5.jpg">
    <img src="res/plant5.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">HELL YEAH PLANTS</div>
</div>

<div class="gallery">
  <a target="_blank" href="res/plant6.jpg">
    <img src="res/plant6.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Bestest plant</div>
</div>

</section>

    <section id="customers" class="container-fluid">
        <h2>Customer feedback</h2>
        <div id="commentbox" class="commdis">
        <!-- Comments display-->
            <div>
              <p><em><q>Best place on the planet.</q></em></p>
              <p><i>- Tatiana</i></p>
            </div>
        </div>
        <button onclick="addComment()">Leave a comment >></button>
        <div class="commform" id="commform">
        <!-- Comments form-->
        <h3>Leave a comment for us!</h3>
        <form action="">
            <input type="text" id="fname" name="fname" placeholder="Your Name"><br>
            <textarea name="fcomment" rows="6" columns="70" placeholder="Please leave a comment"></textarea>
            <input type="submit" value="Send">
          </form>
        </div>
    </section>

    <section id="contactus" class="container-fluid">
        <h2>Contact Us</h2>
        <div class="contactform">
        <form action="">
            <input type="text" name="cname" placeholder="Your Name *">
            <input type="email" name="cemail" placeholder="Your Email *">
            <label for="job">Client organization:</label>
            <select id="job" name="field4">
            <option value="enterprise">Enterprise</option>
            <option value="company">Company</option>
            <option value="pubinst">Public Institution</option>
            <option value="nonprof">Non-profit Organization</option>
            <option value="privpers">Private Person</option>
            <option value="other">Other</option>
            </select>      
            <textarea name="field3" rows="10" placeholder="Tell us your problems or questions and we will answer them in an email."></textarea>
            <input type="submit" value="Send" />
        </form>
        </div>
    </section>
    </main>
    <!--==========================
    Footer
  ============================-->
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
<script src="./src/scripts/index.js"></script>
</html>
