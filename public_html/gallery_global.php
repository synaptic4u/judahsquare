<?php

include_once dirname(__FILE__, 2).'/src/Config.php';

$config = new Config();

$serverURL = $config->getURL();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- GOOGLE -->
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-2B1XDC43Y9"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-2B1XDC43Y9');
  </script>
  <!-- End Google Tag Manager -->

  <!-- META -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <!-- TITLE & ICON -->
  <title>HOJ Community GLobal Gallery</title>
  <link rel="icon" href="./images/background/logo.webp" type="image/x-icon">

  <!-- CSS -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->
  <link href="./css/bootstrap.min.css" rel="stylesheet" />
  <link href="./css/style.css" rel="stylesheet" />
  <style>

  </style>
  <!-- EXTERNAL & INTERNAL JAVASCRIPT -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> -->
  <script src="./js/bootstrap.min.js"></script>
  <script src="./js/oldFlagAnimation.js"></script>

</head>
<body class="doc_body">
  <!-- NAVIGATION -->
  <nav id="navbarmenu" class="navbar navbar-expand-lg m-1 navbarHeight" data-bs-theme="light">
    <div class="container-fluid align-middle">
      <a class="navbar-brand m-auto text-center" href="<?php echo $serverURL; ?>/">
        <canvas id="flagCanvas" data-bs-dismiss="offcanvas" alt="House of Judah Logo">
        </canvas>
      </a>      
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>     
      <div class="offcanvas offcanvas-top h-100 w-100" style="background-color: rgba(0,133,66,1);" id="navbarColor03" data-bs-scroll="false" data-bs-backdrop="false" tabindex="-1">
        <div class="offcanvas-header">
          <a class="navbar-brand m-auto text-center" href="<?php echo $serverURL; ?>/">
            <canvas id="offcanvasFlagCanvas" data-bs-dismiss="offcanvas" alt="House of Judah Logo"></canvas>
          </a>
          
          <button type="button" class="btn bold pe-2" data-bs-dismiss="offcanvas" aria-label="Close">Close</button>
        </div>

        <div class="offcanvas-body">
          <ul class="navbar-nav me-auto">
            <!-- House of Judah -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">House of Judah</a>

              <div class="dropdown-menu p-1">
                <a class="dropdown-item text-nowrap" href="<?php echo $serverURL; ?>/house_of_judah.php">House of Judah</a>
                <a class="dropdown-item" href="<?php echo $serverURL; ?>/about.php">About</a>
                <a class="dropdown-item text-nowrap" href="<?php echo $serverURL; ?>/judah_sponsorship.php">Judah Sponsorship</a>
                <a class="dropdown-item text-nowrap" href="<?php echo $serverURL; ?>/gallery_hoj.php">House of Judah Gallery</a>
              </div>
            </li>
            
            <!-- Initiatives -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">Initiatives</a>
      
              <div class="dropdown-menu p-1">
                
              <a class="dropdown-item" href="<?php echo $serverURL; ?>/initiatives.php">Initiatives</a>
                <a class="dropdown-item text-nowrap" href="<?php echo $serverURL; ?>/seedlings.php">Seedlings</a>
              </div>
            </li>

            <!-- Soup Kitchen -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">Soup Kitchen</a>

              <div class="dropdown-menu p-1">
                <a class="dropdown-item text-nowrap" href="<?php echo $serverURL; ?>/soup_kitchen.php">Soup Kitchen</a>
                <a class="dropdown-item" href="<?php echo $serverURL; ?>/gallery_soup_kitchen.php">Soup Kitchen Gallery</a>
              </div>
            </li>
            
            <!-- Creche -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">Creche</a>
      
              <div class="dropdown-menu p-1">
                <a class="dropdown-item" href="<?php echo $serverURL; ?>/creche.php">Creche</a>
                <a class="dropdown-item" href="<?php echo $serverURL; ?>/creche_sponsorship.php">Creche Sponsorship</a>
                <a class="dropdown-item" href="<?php echo $serverURL; ?>/gallery_creche.php">Creche Gallery</a>
              </div>
            </li>
                                    
            <!-- Tourism -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">Tourism</a>
              
              <div class="dropdown-menu p-1">
                <a class="dropdown-item" href="<?php echo $serverURL; ?>/tourism.php">Tourism</a>
                <a class="dropdown-item" href="<?php echo $serverURL; ?>/gallery_tourism.php">Tourism Gallery</a>
              </div>
            </li>
            
            <!-- Community -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">Community</a>
      
              <div class="dropdown-menu p-1">
                <a class="dropdown-item" href="<?php echo $serverURL; ?>/meet_us.php">Meet Us</a>
                <a class="dropdown-item" href="<?php echo $serverURL; ?>/community.php">Community</a>
                <a class="dropdown-item" href="<?php echo $serverURL; ?>/gallery.php">Gallery</a>
                <a class="dropdown-item" href="<?php echo $serverURL; ?>/gallery_global.php">Global Gallery</a>
              </div>
            </li>
            
            <!-- Tabernacle -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">Tabernacle</a>
              
              <div class="dropdown-menu p-1">
                <a class="dropdown-item" href="<?php echo $serverURL; ?>/tabernacle.php">Tabernacle</a>
                <a class="dropdown-item" href="<?php echo $serverURL; ?>/gallery_tabernacle.php">Tabernacle Gallery</a>
              </div>
            </li>
            
            <!-- Contact -->
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $serverURL; ?>/contact.php">Contact</a>
            </li>

            <!-- Hospitality -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">Hospitality</a>

              <div class="dropdown-menu p-1">
                <a class="dropdown-item" href="<?php echo $serverURL; ?>/homestay.php">Homestay Bed & Breakfast</a>
                <a class="dropdown-item" href="<?php echo $serverURL; ?>/rise_n_shine.php">Rise n Shine Restuarant</a>
                <a class="dropdown-item" href="<?php echo $serverURL; ?>/healing_centre.php">Healing Centre</a>
              </div>
            </li>
            
            <!-- Music & Art -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">Music & Art</a>
      
              <div class="dropdown-menu p-1">
                <h6 class="h6 text-muted">Music</h6>
                <a class="dropdown-item" href="<?php echo $serverURL; ?>/hoj_music_events.php">HOJ Music</a>
                <a class="dropdown-item" href="<?php echo $serverURL; ?>/homegrowns.php">The Homegrowns</a>
                <a class="dropdown-item" href="<?php echo $serverURL; ?>/triple_crown_sa.php">Triple Crown SA</a>
                <a class="dropdown-item" href="<?php echo $serverURL; ?>/zion_youth.php">Zion Youth</a>
                <a class="dropdown-item" href="<?php echo $serverURL; ?>/visiting_artists.php">Visiting Artists</a>

                <h6 class="h6 text-muted">Art</h6>
                <a class="dropdown-item" href="<?php echo $serverURL; ?>/statue.php">Statue</a>
                <a class="dropdown-item" href="<?php echo $serverURL; ?>/visiting_art_artists.php">Visiting</a>
                <a class="dropdown-item" href="<?php echo $serverURL; ?>/art.php">Art</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!-- Global Community Intro -->
  <div class="container marketing pt-4">
    <div class="row featurette">
      <div class="col-sm-12">
        <h2 class="featurette-heading fw-bolder">Global Community <span class="text-muted"></span></h2>
        <p class="lead">
          This is where we decided to introduce all our videos & pictures of us all, your visit to us & our broader Rastafari community.
          <br>
          Some of you are of our extended family now after you came to visit.
          <br>
          We would be blessed if you would share any pics & videos with us.
          <br>
          Tag us on FaceBook (@Judah Square) or WhatsApp; Email also available
        </p>
        <div class="col-sm-12 col-lg-6">
          <h5 class="h5 featurette-heading fw-bolder">Iman Bongani Webmaster:</h5>
          <ul class="lead">
            <li>
              Emile: +27 63 237 5654
              <br>
              <a href="mailto:emile@judahsquare.com" target="_blank" class="link">emile@judahsquare.com</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div> 
  <hr class="featurette-divider w-75 m-auto">

  <!-- Trenton and Free Radicals -->
  <div class="container marketing pt-4">
    <div class="row featurette">
      <div class="col-sm-12 text-center">
        <h2 class="featurette-heading fw-bolder text-start">
          Trenton and Free Radicals visit to Judah Square
          <span class="text-muted"> - 10 Nov 2016</span>
        </h2>
        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FTrentonandfreeradical%2Fvideos%2F10154805921573921%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
        <!-- <img src="https://www.facebook.com/Trentonandfreeradical/videos/10154805921573921/" class="img featurette-image img-fluid mx-auto" style="position:relative; max-height:600px;width:auto;" alt="" srcset=""> -->
      </div>
    </div>
  </div>
  <hr class="featurette-divider w-75 m-auto">
</body>
<footer>
  <ul class="text-center">  
    <li class="list-group-item list-group-item-action"><a href="https://synaptic4u.co.za/" class="nav-link text-white" target="_blank">Created by: Synaptic4U</a><br></li>
    <li class="list-group-item list-group-item-action"><a href="https://judahsquare.wordpress.com/" class="nav-link text-white" target="_blank">Fall Back website: https://judahsquare.wordpress.com</a></li>
  </ul>
</footer>
</html>