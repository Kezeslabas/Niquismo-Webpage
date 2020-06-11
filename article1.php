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
      // Get article by id
      $article = null;
      $lastArticles = [];
      $recommends = [];
      if(isset($_GET['id']))
      {
        $id = $_GET['id'];
        
        $contents = file("./src/data/articles.cnt");
        
        $lastCount = 0;
        $length = count($contents);
        if($length>=5)
        {
          $lastCount = 4;
          $r = 0;
          for($i = $length-1; $i>=0; $i--)
          {
            if($i!=$id)
            {
              $recommends[] = $i.';';
              $r = $r + 1;
            }
            if($r>=4)break;
          }
        }
        else
        {
          $lastCount = $length;
          for($i = 0;$i<$length;$i++)
          {
            if($i!=$id)$recommends[] = $i.';';
          }
        }
        $id = $id.';';
        for($i = $length-1; $i>=0; $i--)
        {
          $item = $contents[$i];
          if(startsWith($item,$id))
          {
            $article = $item;
          }
          else
          {
            for($j = 0; $j<count($recommends);$j++)
            {
              $reco = $recommends[$j];
              if(startsWith($item,$reco))
              {
                $lastArticles[] = $item;
                $lastCount = $lastCount - 1;
              }
            }
          }
          if($article && $lastCount<=0)break;
        }

      }
      echo('<div id="art_data" style="display:none">'.$article.'</div>');
      echo('<div id="last_data" style="display:none">');
      for($i = 0; $i<count($lastArticles);$i++)
      {
        echo($lastArticles[$i]."\n");
      }
      echo('</div>');

      function startsWith ($string, $startString) 
      { 
          $len = strlen($startString); 
          return (substr($string, 0, $len) === $startString); 
      } 
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

  <section id="openedarticle" class="container-fluid">
        
    <div class="opartt">
        <div id="maintarget">
        <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/plants-index-1558561755.png?crop=0.945xw:0.707xh;0,0.190xh&resize=1200:*" alt="">
        <h2 class="oparttitle">This is the article you opened</h2>
        <p class="opartdate">2020.06.11.</p>
        <div class="opartart">
            <p class="opartartin">
                This is the introductory paragraph. This is the introductory paragraph. 
                This is the introductory paragraph. This is the introductory paragraph. 
                This is the introductory paragraph. This is the introductory paragraph.
                This is the introductory paragraph. This is the introductory paragraph.
            </p>
            <p class="opartartp">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dolor purus non enim praesent. Felis eget velit aliquet sagittis id consectetur purus ut faucibus. Et netus et malesuada fames. Turpis egestas pretium aenean pharetra magna ac placerat vestibulum lectus. Facilisi etiam dignissim diam quis enim. Convallis posuere morbi leo urna molestie at elementum eu facilisis. Porttitor massa id neque aliquam. Accumsan in nisl nisi scelerisque. Ante metus dictum at tempor commodo ullamcorper. Sapien et ligula ullamcorper malesuada proin libero nunc consequat. Suspendisse sed nisi lacus sed viverra. Augue lacus viverra vitae congue. Facilisis volutpat est velit egestas dui id ornare arcu odio. At risus viverra adipiscing at in tellus integer feugiat.Lorem ipsum dolor sit amet consectetur adipiscing elit ut. Orci porta non pulvinar neque laoreet suspendisse interdum. Odio aenean sed adipiscing diam donec adipiscing tristique risus nec. Laoreet sit amet cursus sit amet. </p>
            <p class="opartartp">Ullamcorper eget nulla facilisi etiam dignissim diam quis enim. Ac turpis egestas integer eget aliquet nibh praesent tristique. Consequat ac felis donec et. Ut ornare lectus sit amet est placerat. Pretium lectus quam id leo in. Sed adipiscing diam donec adipiscing tristique risus. Pharetra vel turpis nunc eget lorem dolor sed viverra. Aliquam ut porttitor leo a diam. Penatibus et magnis dis parturient montes nascetur ridiculus mus. Semper viverra nam libero justo. Tempor commodo ullamcorper a lacus vestibulum sed arcu non. Libero nunc consequat interdum varius sit amet mattis vulputate. Non odio euismod lacinia at quis. Volutpat consequat mauris nunc congue nisi vitae suscipit. </p>
            <p class="opartartp">Pulvinar elementum integer enim neque volutpat ac tincidunt vitae semper. Nec tincidunt praesent semper feugiat nibh sed pulvinar. Lectus sit amet est placerat in egestas erat. Ac auctor augue mauris augue neque gravida. Sagittis nisl rhoncus mattis rhoncus urna neque viverra justo nec. Leo duis ut diam quam nulla porttitor massa id neque. Pulvinar mattis nunc sed blandit libero volutpat. Nibh tortor id aliquet lectus. Ac tortor vitae purus faucibus. Quam id leo in vitae turpis massa. Malesuada pellentesque elit eget gravida cum sociis. Laoreet non curabitur gravida arcu ac tortor. Viverra aliquet eget sit amet tellus cras adipiscing enim eu. Nisi lacus sed viverra tellus in hac habitasse. At ultrices mi tempus imperdiet. Vivamus at augue eget arcu dictum varius duis at. Vel risus commodo viverra maecenas accumsan. Eget lorem dolor sed viverra ipsum nunc aliquet. Vestibulum lectus mauris ultrices eros in cursus. </p>
            <p class="opartartp">Sapien eget mi proin sed libero enim sed. Pulvinar sapien et ligula ullamcorper malesuada proin libero nunc consequat. Luctus venenatis lectus magna fringilla urna. Sit amet venenatis urna cursus eget nunc scelerisque viverra. Tortor dignissim convallis aenean et tortor at. Scelerisque eu ultrices vitae auctor eu augue ut. Vitae et leo duis ut diam quam. Nunc sed blandit libero volutpat sed cras ornare arcu. Orci ac auctor augue mauris augue. Lorem ipsum dolor sit amet consectetur. Augue mauris augue neque gravida in fermentum et sollicitudin ac. Cursus eget nunc scelerisque viverra mauris in aliquam. Ac felis donec et odio pellentesque diam volutpat commodo. Habitant morbi tristique senectus et netus et malesuada fames ac. Sodales ut etiam sit amet nisl purus in. Nec tincidunt praesent semper feugiat nibh. Tellus elementum sagittis vitae et. Varius quam quisque id diam vel quam elementum pulvinar etiam. Aliquam ultrices sagittis orci a scelerisque. Faucibus et molestie ac feugiat sed lectus vestibulum mattis. </p>
            <p class="opartartp">Vitae tortor condimentum lacinia quis vel. Tempor nec feugiat nisl pretium fusce. Felis imperdiet proin fermentum leo vel orci porta. Fringilla est ullamcorper eget nulla facilisi etiam dignissim diam. Mauris pharetra et ultrices neque ornare aenean. Accumsan in nisl nisi scelerisque eu ultrices vitae. Quam lacus suspendisse faucibus interdum posuere. Risus sed vulputate odio ut enim blandit volutpat maecenas. Eros in cursus turpis massa tincidunt dui ut. Arcu bibendum at varius vel pharetra vel. </p>
            <p class="opartartp">Proin nibh nisl condimentum id venenatis. Scelerisque eu ultrices vitae auctor eu augue. Orci a scelerisque purus semper eget duis. Interdum consectetur libero id faucibus nisl tincidunt eget. Aliquet bibendum enim facilisis gravida neque. At risus viverra adipiscing at in tellus integer feugiat scelerisque. Commodo quis imperdiet massa tincidunt nunc pulvinar. Nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum. Eget nulla facilisi etiam dignissim diam quis. Enim eu turpis egestas pretium aenean pharetra magna ac. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
        </div>
        </div>

        <p class="opartmore">More to read</p>
        <div id="openart" class="opartp-grid-container">
            <div class="opartp-gchild"><a class="artabut" href="article1.php">
                <img src="https://gearpatrol.com/wp-content/uploads/2019/01/10-Best-Indoor-Plants-Gear-Patrol-lead-full.jpg" alt="">
                <p class="oparttit">This is a title</p>
                <p class="opartdat">2020-06-10</p>
                </a>
            </div>         
            <div class="opartp-gchild"><a class="artabut" href="article1.php">
                <img src="https://gearpatrol.com/wp-content/uploads/2019/01/10-Best-Indoor-Plants-Gear-Patrol-lead-full.jpg" alt="">
                <p class="oparttit">Just another title</p>
                <p class="opartdat">2020-06-09</p>
                </a>
            </div>            
            <div class="opartp-gchild"><a class="artabut" href="article1.php">
                <img src="https://gearpatrol.com/wp-content/uploads/2019/01/10-Best-Indoor-Plants-Gear-Patrol-lead-full.jpg" alt="">
                <p class="oparttit">You really should read this one</p>
                <p class="opartdat">2020-06-09</p>
                </a>
            </div>            
            <div class="opartp-gchild"><a class="artabut" href="article1.php">
                <img src="https://gearpatrol.com/wp-content/uploads/2019/01/10-Best-Indoor-Plants-Gear-Patrol-lead-full.jpg" alt="">
                <p class="oparttit">TitleTitleTitle</p>
                <p class="opartdat">2020-06-07</p>
                </a>
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
<script src="./src/scripts/article1.js"></script>
</html>