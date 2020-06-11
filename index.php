<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Niquismo</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="./src/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <?php
      // Get Article Contents (only last 3 articles)
      $contents = file("./src/data/articles.cnt");
      echo('<div id="art_data" style="display:none">');
      $length = count($contents);
      if($length > 3)
      {
        for($i = $length-1; $i>=$length-3; $i--)
        {
          echo($contents[$i]."\n");
        }
      }
      else
      {
        for($i = $length-1; $i>=0; $i--)
        {
          echo($contents[$i]."\n");
        }
      }
      echo('</div>');

      // Get Comment Contents
      $contents = file_get_contents("./src/data/comments.cnt");
      echo('<div id="comm_data" style="display:none">'.$contents.'</div>');

      // Get Gallery images
      $gallery = '';
      $dir = './res/gallery/';
      if(is_dir($dir))
      {
          $dh = opendir($dir);
          if($dh)
          {
              $file = readdir($dh);
              while($file!==false)
              {
                  if($file!='' && $file!='.' && $file!='..')
                  {
                      $gallery = $gallery.$dir.$file.';';
                  }
                  $file = readdir($dh);
              }
          }
      }
      echo('<div id="gal_data" style="display:none">'.$gallery.'</div>');

    ?>


</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" style="font-family:'Book Antiqua'">


  

    <header id="header">
        <div class="container">
          <nav class="navbar bg-dark navbar-dark fixed-top" id="nav-menu-container">
            <ul class="nav-menu">
              <li class="menu-active"><a class="artbut" href="#hero">Home</a></li>
              <li><a class="artbut" href="#aboutus">About Us</a></li>
              <li><a class="artbut" href="#articles">Articles</a></li>
              <li><a class="artbut" href="#services">Our Services</a></li>
              <li><a class="artbut" href="#gallery">Gallery</a></li>
              <li><a class="artbut" href="#contactus">Contact Us</a></li>
              <li><a class="artbut" href="shops.php">Stores</a></li>
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
        <a href="articles.php" class="arthead"><h2>Latest Articles</h2></a>
        <div id="articleprev" class="artp-grid-container">
            <div class="artp-gchild"><a class="artabut" href="article1.php">
                <img src="https://gearpatrol.com/wp-content/uploads/2019/01/10-Best-Indoor-Plants-Gear-Patrol-lead-full.jpg" alt="">
                <p class="arttit">Title</p>
                <p class="artdat">2020-06-07</p>
                <p class="artpar">Lorem ipsum dolor sit amet, consectetur 
                adipiscing elit, sed do eiusmod tempor 
                incididunt ut labore et dolore magna aliqua. 
                Faucibus purus in massa tempor nec. 
                Sapien et ligula ullamcorper malesuada proin 
                libero. In eu mi bibendum neque egestas 
                congue quisque egestas diam.</p></a>
            </div>
            <div class="artp-gchild"><a class="artabut" href="article1.php">
                <img src="https://sporteluxe.com/wp-content/uploads/2017/03/PLANTS.jpg" alt="flower">
                <p class="arttit">Title</p>
                <p class="artdat">2020-06-07</p>
                <p class="artpar">Lorem ipsum dolor sit amet, consectetur 
                adipiscing elit, sed do eiusmod tempor 
                incididunt ut labore et dolore magna aliqua. 
                Faucibus purus in massa tempor nec. 
                Sapien et ligula ullamcorper malesuada proin 
                libero. In eu mi bibendum neque egestas 
                congue quisque egestas diam.</p></a>
            </div>
            <div class="artp-gchild"><a class="artabut" href="article1.php">
                <img src="https://cdn.improb.com/wp-content/uploads/2019/05/Best-Indoor-Plants-for-Everyone.jpg" alt="flower">
                <p class="arttit">Title</p>
                <p class="artdat">2020-06-07</p>
                <p class="artpar">Lorem ipsum dolor sit amet, consectetur 
                adipiscing elit, sed do eiusmod tempor 
                incididunt ut labore et dolore magna aliqua. 
                Faucibus purus in massa tempor nec. 
                Sapien et ligula ullamcorper malesuada proin 
                libero. In eu mi bibendum neque egestas 
                congue quisque egestas diam.</p></a>
            </div>
        </div>
        <button class="button"><a class="artbut" href="articles.php">More Articles >></a></button>
    </section>

  <!-- Our Services -->  

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
        <button class="button"><a class="artbut" href="#contactus">Contact Us >></a></button>
        <button class="button"><a class="artbut" href="shops.php">Stores >></a></button>
    </section>


  

<!-- Gallery -->
<section id="gallery">
<h2 style="text-align:center">Gallery</h2>

<div id="gal_list" class="row">
  <div class="column">
    <img src="res/plant7.jpg" style="width:100% " onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="res/planz8.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="res/ULTIMA.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="res/plant10.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div id="gal_modal">
      <div class="mySlides">
        <div class="numbertext">1 / 4</div>
        <img src="res/plant7.jpg" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">2 / 4</div>
        <img src="res/planz8.jpg" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">3 / 4</div>
        <img src="res/ULTIMA.jpg" style="width:100%">
      </div>
      
      <div class="mySlides">
        <div class="numbertext">4 / 4</div>
        <img src="res/plant10.jpg" style="width:100%">
      </div>
    </div>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    
  </div>
</div>
    </section>
 
<!-- Customers -->

    <section id="customers" class="container-fluid">
        <h2>Customer feedback</h2>
        <div class="commdis">
        <!-- Comments display-->
        <div class="commentcontainer">
          <div id="carouselContent" class="carousel slide" data-ride="carousel">
            <div id="commentbox" class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                 <q>Best place on earth.</q>
                 <p class="commentp">- Tatiana</p>
              </div>
              <div class="carousel-item">
                  <q>Yes</q>
                  <p class="commentp">- Chad</p>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselContent" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselContent" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

        <button id="btn_comm" class="button" onclick="addComment()">Leave a comment >></button>
        <div class="commform" id="commform">
        <!-- Comments form-->
        <h3>Leave a comment for us!</h3>
        <form id="commentform" action="#btn_comm">
            <input type="text" id="fname" name="fname" placeholder="Your Name"><br>
            <textarea name="fcomment" rows="6" columns="70" placeholder="Please leave a comment"></textarea>
            <input type="submit" value="Send">
          </form>
        </div>

        <!--Answer for sending comment -->
        <div>
          <p id="commentok" class="commentok" style="display:none"> Thank you for your feedback! </p>
    </div>

    </section>

  <!-- Contasct Us -->  

    <section id="contactus" class="container-fluid">
        <h2>Contact Us</h2>
          <div class="contactform">
          <form id="mail_form" action="">
              <input type="text" name="cname" placeholder="Your Name *">
              <input type="email" name="cemail" placeholder="Your Email *">
              <label for="job">Client organization:</label>
              <select id="job" name="job">
              <option value="enterprise">Enterprise</option>
              <option value="company">Company</option>
              <option value="pubinst">Public Institution</option>
              <option value="nonprof">Non-profit Organization</option>
              <option value="privpers">Private Person</option>
              <option value="other">Other</option>
              </select>      
              <textarea name="text" rows="10" placeholder="Tell us your problems or questions and we will answer them in an email."></textarea>
              <input type="submit" value="Send"/>
          </form>
          </div>

          <!-- contact answer-->
          <div id="mail_msg" style="display:none">
            <p class="contokanswer"> Email sent successfully! We will contact you soon! </p>
            <p class="contnotokanswer"> Ups something went wrong. Please try again later! </p>
          </div>



          <div class="continfo">
            <p class="conthead">Give us a call:</p>
            <p class="conttel">+23 45 3456 896</p>
            <p class="conttel">+11 22 3274 901</p>
            <p class="conttel">+66 66 6666 666</p>
            <p class="conthead">Or visit one of our stores:</p>
            <a class="strbut" href="shops.php"><button class="strbutton">Our Stores >></button></a>
            <p class="conthead">Follow us on social media:</p>
            <a class="slogolink" href="facebook.com/niquismo">
            <img class="slogo" src="https://cdn1.iconfinder.com/data/icons/social-media-2285/512/Colored_Facebook3_svg-512.png" alt="facebook">
            </a>
            <a class="slogolink" href="instagram.com/niquismo">
            <img class="slogo" src="https://cdn2.iconfinder.com/data/icons/social-media-2285/512/1_Instagram_colored_svg_1-512.png" alt="">
            </a>
            <a class="slogolink" href="twitter.com/niquismo">
            <img class="slogo" src="https://cdn2.iconfinder.com/data/icons/social-media-2285/512/1_Twitter3_colored_svg-512.png" alt="">
            </a>
            <a class="slogolink" href="youtube.com/niquismo">
            <img class="slogo" src="https://cdn2.iconfinder.com/data/icons/social-media-2285/512/1_Youtube_colored_svg-512.png" alt="">
            </a>
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
