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


  <main id="main">

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
              <li><a href="shops.html">Stores</a></li>
            </ul>
          </nav><!-- #nav-menu-container -->
        </div>
      </header><!-- #header -->

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
        <a href="articles.html"><h2>Latest Articles</h2></a>
        <div>
            <article>Article 1</article>
            <article>Article 2</article>
            <article>Article 3</article>
        </div>
        <a href="articles.html">more articles >></a>
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
        <a href="shops.html">Stores >></a>
    </section>

  <!-- Images used to open the lightbox -->

  <style>
    
    .row > .column {
      padding: 0 8px;
    }
    
    .row:after {
      content: "";
      display: table;
      clear: both;
    }
    
    .column {
      float: left;
      width: 25%;
    }
    
    /* The Modal (background) */
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      padding-top: 100px;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: black;
    }
    
    /* Modal Content */
    .modal-content {
      position: relative;
      background-color: #fefefe;
      margin: auto;
      padding: 0;
      width: 90%;
      max-width: 1200px;
    }
    
    /* The Close Button */
    .close {
      color: white;
      position: absolute;
      top: 10px;
      right: 25px;
      font-size: 35px;
      font-weight: bold;
    }
    
    .close:hover,
    .close:focus {
      color: #999;
      text-decoration: none;
      cursor: pointer;
    }
    
    .mySlides {
      display: none;
    }
    
    .cursor {
      cursor: pointer;
    }
    
    /* Next & previous buttons */
    .prev,
    .next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      width: auto;
      padding: 16px;
      margin-top: -50px;
      color: white;
      font-weight: bold;
      font-size: 20px;
      transition: 0.6s ease;
      border-radius: 0 3px 3px 0;
      user-select: none;
      -webkit-user-select: none;
    }
    
    /* Position the "next button" to the right */
    .next {
      right: 0;
      border-radius: 3px 0 0 3px;
    }
    
    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
      background-color: rgba(0, 0, 0, 0.8);
    }
    
    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }
    
    img {
      margin-bottom: -4px;
    }
    
    .caption-container {
      text-align: center;
      background-color: black;
      padding: 2px 16px;
      color: white;
    }
    
    .demo {
      opacity: 0.6;
    }
    
    .active,
    .demo:hover {
      opacity: 1;
    }
    
    img.hover-shadow {
      transition: 0.3s;
    }
    
    .hover-shadow:hover {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    </style>

    <section id="gallery" class="container-fluid">
    <h2 style="text-align:center">Gallery</h2>
    
    <div class="row">
      <div class="column">
        <img src="res/plant1.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
      </div>
      <div class="column">
        <img src="res/plant2.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
      </div>
      <div class="column">
        <img src="res/plant3.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
      </div>
      <div class="column">
        <img src="res/plant4.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
      </div>
    </div>
    
    <div id="myModal" class="modal">
      <span class="close cursor" onclick="closeModal()">&times;</span>
      <div class="modal-content">
    
        <div class="mySlides">
          <div class="numbertext">1 / 4</div>
          <img src="res/plant1.jpg" style="width:100%">
        </div>
    
        <div class="mySlides">
          <div class="numbertext">2 / 4</div>
          <img src="res/plant2.jpg" style="width:100%">
        </div>
    
        <div class="mySlides">
          <div class="numbertext">3 / 4</div>
          <img src="res/plant3.jpg" style="width:100%">
        </div>
        
        <div class="mySlides">
          <div class="numbertext">4 / 4</div>
          <img src="res/plant4.jpg" style="width:100%">
        </div>
        
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    
        <div class="caption-container">
          <p id="caption"></p>
        </div>
    
    
        <div class="column">
          <img class="demo cursor" src="res/plant1.jpg" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
        </div>
        <div class="column">
          <img class="demo cursor" src="res/plant2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Snow">
        </div>
        <div class="column">
          <img class="demo cursor" src="res/plant3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
        </div>
        <div class="column">
          <img class="demo cursor" src="res/plant4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
        </div>
      </div>
    </div>
    </section>
    
    <script>
    function openModal() {
      document.getElementById("myModal").style.display = "block";
    }
    
    function closeModal() {
      document.getElementById("myModal").style.display = "none";
    }
    
    var slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      var captionText = document.getElementById("caption");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      captionText.innerHTML = dots[slideIndex-1].alt;
    }
    </script>
        
    


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
        </div> -->
        
    </section>
    <section id="customers" class="container-fluid">
        <h2>Customer feedback</h2>
        <div class="commdis">
        <!-- Comments display-->
            <p><em><q>Best place on the planet.</q></em></p>
            <p><i>- Tatiana</i></p>
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
