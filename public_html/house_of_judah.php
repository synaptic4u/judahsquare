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
  <title>HOJ House of Judah</title>
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

  <!-- CAROUSAL -->
  <div id="myCarousel" class="carousel slide mt-4 w-100 m-auto" style="aspect-ratio: 9/6 auto;max-width:900px;max-height:600px;" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 12"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 13"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 14"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 15"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="5" aria-label="Slide 16"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="6" aria-label="Slide 17"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="7" aria-label="Slide 18"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="8" aria-label="Slide 19"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="9" aria-label="Slide 20"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="10" aria-label="Slide 21"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="11" aria-label="Slide 22"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="12" aria-label="Slide 23"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="13" aria-label="Slide 24"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="14" aria-label="Slide 25"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="15" aria-label="Slide 26"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="16" aria-label="Slide 27"></button>
    </div>

    <div class="carousel-inner text-center" >
      <!-- ITEM 1 -->
      <div class="carousel-item active">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
        <img src="./images/haile_selassie/emperor_quotes14.webp" class="img img-fluid" style="position:relative; max-height:600px;width:auto;" alt="" srcset="">
    
        <div class="container">
          <div class="carousel-caption text-start">
            <!-- <h1>H.I.M. Haile Selassie the 1st.</h1>
            <p>Ras Tafari Mokonnen. Born 23 July 1892.</p> -->
            <!-- <p><a class="btn btn-lg btn-primary" href="<?php echo $serverURL; ?>/soup_kitchen.php">Rise & Shine Restuarant</a></p> -->
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
        <img src="./images/haile_selassie/emperor_pics2.webp" class="img img-fluid" style="position:relative; max-height:600px;width:auto;" alt="" srcset="">
    
        <div class="container">
          <div class="carousel-caption text-center">
            <!-- <h1>H.I.M. Haile Selassie the 1st.</h1>
            <p>Important quotes!</p> -->
            <!-- <p><a class="btn btn-lg btn-primary" href="<?php echo $serverURL; ?>/soup_kitchen.php">Rise & Shine Restuarant</a></p> -->
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
        <img src="./images/haile_selassie/emperor_pics5.webp" class="img img-fluid" style="position:relative; max-height:600px;width:auto;" alt="" srcset="">
        <div class="container">
          <div class="carousel-caption text-center">
            <!-- <h1>H.I.M. Haile Selassie the 1st.</h1>
            <p>Important quotes!</p> -->
            <!-- <p><a class="btn btn-lg btn-primary" href="<?php echo $serverURL; ?>/tabernacle.php">Tabernacle</a></p> -->
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
        <img src="./images/haile_selassie/emperor_quotes2.webp" class="img img-fluid" style="position:relative; max-height:600px;width:auto;" alt="" srcset="">
        <div class="container">
          <div class="carousel-caption">
            <!-- <h1>Best Tourism Tours.</h1>
            <p>Best Tourism Tours with our Italia friends.</p> -->
            <!-- <p><a class="btn btn-lg btn-primary" href="<?php echo $serverURL; ?>/tabernacle.php">Tabernacle</a></p> -->
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
        <img src="./images/haile_selassie/emperor_quotes3.webp" class="img img-fluid" style="position:relative; max-height:600px;width:auto;" alt="" srcset="">
        <div class="container">
          <div class="carousel-caption">
            <!-- <h1>Best Tourism Tours.</h1>
            <p>Best Tourism Tours with our Italia friends.</p> -->
            <!-- <p><a class="btn btn-lg btn-primary" href="<?php echo $serverURL; ?>/tabernacle.php">Tabernacle</a></p> -->
          </div>
        </div>
      </div>
      <!-- ITEM 6 -->
      <div class="carousel-item">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
        <img src="./images/haile_selassie/emperor_quotes5.webp" class="img img-fluid" style="position:relative; max-height:600px;width:auto;" alt="" srcset="">
        <div class="container">
          <div class="carousel-caption">
            <!-- <h1>Best Tourism Tours.</h1>
            <p>Best Tourism Tours with our Italia friends.</p> -->
            <!-- <p><a class="btn btn-lg btn-primary" href="<?php echo $serverURL; ?>/tabernacle.php">Tabernacle</a></p> -->
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
        <img src="./images/haile_selassie/emperor_pics1.webp" class="img img-fluid" style="position:relative; max-height:600px;width:auto;" alt="" srcset="">
        <div class="container">
          <div class="carousel-caption">
            <!-- <h1>Best Tourism Tours.</h1>
            <p>Best Tourism Tours with our Italia friends.</p> -->
            <!-- <p><a class="btn btn-lg btn-primary" href="<?php echo $serverURL; ?>/tabernacle.php">Tabernacle</a></p> -->
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
        <img src="./images/haile_selassie/emperor_quotes11.webp" class="img img-fluid" style="position:relative; max-height:600px;width:auto;" alt="" srcset="">
        <div class="container">
          <div class="carousel-caption">
            <!-- <h1>Best Tourism Tours.</h1>
            <p>Best Tourism Tours with our Italia friends.</p> -->
            <!-- <p><a class="btn btn-lg btn-primary" href="<?php echo $serverURL; ?>/tabernacle.php">Tabernacle</a></p> -->
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
        <img src="./images/haile_selassie/emperor_quotes21.webp" class="img img-fluid" style="position:relative; max-height:600px;width:auto;" alt="" srcset="">
        <div class="container">
          <div class="carousel-caption">
            <!-- <h1>Best Tourism Tours.</h1>
            <p>Best Tourism Tours with our Italia friends.</p> -->
            <!-- <p><a class="btn btn-lg btn-primary" href="<?php echo $serverURL; ?>/tabernacle.php">Tabernacle</a></p> -->
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
        <img src="./images/haile_selassie/emperor_quotes1.webp" class="img img-fluid" style="position:relative; max-height:600px;width:auto;" alt="" srcset="">
        <div class="container">
          <div class="carousel-caption">
            <!-- <h1>Best Tourism Tours.</h1>
            <p>Best Tourism Tours with our Italia friends.</p> -->
            <!-- <p><a class="btn btn-lg btn-primary" href="<?php echo $serverURL; ?>/tabernacle.php">Tabernacle</a></p> -->
          </div>
        </div>
      </div>
      <!-- ITEM 11 -->
      <div class="carousel-item">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
        <img src="./images/haile_selassie/emperor_quotes12.webp" class="img img-fluid" style="position:relative; max-height:600px;width:auto;" alt="" srcset="">
        <div class="container">
          <div class="carousel-caption">
            <!-- <h1>Best Tourism Tours.</h1>
            <p>Best Tourism Tours with our Italia friends.</p> -->
            <!-- <p><a class="btn btn-lg btn-primary" href="<?php echo $serverURL; ?>/tabernacle.php">Tabernacle</a></p> -->
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
        <img src="./images/haile_selassie/emperor_quotes16.webp" class="img img-fluid" style="position:relative; max-height:600px;width:auto;" alt="" srcset="">
        <div class="container">
          <div class="carousel-caption">
            <!-- <h1>Best Tourism Tours.</h1>
            <p>Best Tourism Tours with our Italia friends.</p> -->
            <!-- <p><a class="btn btn-lg btn-primary" href="<?php echo $serverURL; ?>/tabernacle.php">Tabernacle</a></p> -->
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
        <img src="./images/haile_selassie/emperor_quotes18.webp" class="img img-fluid" style="position:relative; max-height:600px;width:auto;" alt="" srcset="">
        <div class="container">
          <div class="carousel-caption">
            <!-- <h1>Best Tourism Tours.</h1>
            <p>Best Tourism Tours with our Italia friends.</p> -->
            <!-- <p><a class="btn btn-lg btn-primary" href="<?php echo $serverURL; ?>/tabernacle.php">Tabernacle</a></p> -->
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
        <img src="./images/haile_selassie/emperor_quotes19.webp" class="img img-fluid" style="position:relative; max-height:600px;width:auto;" alt="" srcset="">
        <div class="container">
          <div class="carousel-caption">
            <!-- <h1>Best Tourism Tours.</h1>
            <p>Best Tourism Tours with our Italia friends.</p> -->
            <!-- <p><a class="btn btn-lg btn-primary" href="<?php echo $serverURL; ?>/tabernacle.php">Tabernacle</a></p> -->
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
        <img src="./images/haile_selassie/emperor_quotes20.webp" class="img img-fluid" style="position:relative; max-height:600px;width:auto;" alt="" srcset="">
        <div class="container">
          <div class="carousel-caption">
            <!-- <h1>Best Tourism Tours.</h1>
            <p>Best Tourism Tours with our Italia friends.</p> -->
            <!-- <p><a class="btn btn-lg btn-primary" href="<?php echo $serverURL; ?>/tabernacle.php">Tabernacle</a></p> -->
          </div>
        </div>
      </div>
      <!-- ITEM 16 -->
      <div class="carousel-item">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
        <img src="./images/haile_selassie/emperor_quotes8.webp" class="img img-fluid" style="position:relative; max-height:600px;width:auto;" alt="" srcset="">
        <div class="container">
          <div class="carousel-caption">
            <!-- <h1>Best Tourism Tours.</h1>
            <p>Best Tourism Tours with our Italia friends.</p> -->
            <!-- <p><a class="btn btn-lg btn-primary" href="<?php echo $serverURL; ?>/tabernacle.php">Tabernacle</a></p> -->
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
        <img src="./images/haile_selassie/emperor_quotes10.webp" class="img img-fluid" style="position:relative; max-height:600px;width:auto;" alt="" srcset="">
        <div class="container">
          <div class="carousel-caption">
            <!-- <h1>Best Tourism Tours.</h1>
            <p>Best Tourism Tours with our Italia friends.</p> -->
            <!-- <p><a class="btn btn-lg btn-primary" href="<?php echo $serverURL; ?>/tabernacle.php">Tabernacle</a></p> -->
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container marketing pt-4">
    <div class="row featurette">
      <div class="col-sm-12">
        <h2 class="featurette-heading fw-bolder">House of Judah<span class="text-muted"> - Ras Maxi</span></h2>
        <h4 class="h4 featurette-heading fw-bolder">Briefly:</h4>
        <p class="lead">
        The House of Judah (HoJ) is an organization established in 1993 in Nekkies Knysna.
        <br>
        In the past to establish our rights and create a safe communal area for Rastafari to settle, live & have land.
        <br>
        We are a self-governed theocratic community.
        <br><br>
        Within the first decade we had less than 20 families, mixed racial community, the school / crèche, our tabernacle & guesthouse.
        <br>
        Our creche has grown to have 3 classrooms, a kitchen & office.
        <br>
        Twenty-eight families with adult children and more little ones…
        <br>
        We are growing, stable and building out.
        <br><br>
        </p>
        <h4 class="h4 featurette-heading fw-bolder">Founders:</h4>
        <ul class="lead">
          <li>
            Noel Melville (Ras Maxi)
          </li>
          <li>
            George Bengu (Jabu)
          </li>
          <li>
            David Afrikaaner (Ras Zebi)
          </li>
          <li>
            Asher Bigbeard
          </li>
          <li>
            Winston Junsen (Ras Twakkies)
          </li>
          <li>
            Tennessee Jacobs (Ras Bard)
          </li>
          <li>
            Samsung Nzutha (Ras Papasan)
          </li>
        </ul>
        <h4 class="h4 featurette-heading fw-bolder">Our Heart:</h4>
        <p class="lead">
        The purpose of the organization is to oversee the establishment and management of the local community.
        <br><br>
        Our community is centered from Rastafari Life & living in victory after establishing our rights to pursue our beliefs and practices constitutionally and legally.
        <br>
        We practice and share our beliefs about love, equality and living freely.
        <br>
        We are not focused just upon our own needs and development, we serve the broader community as a whole with enthusiastic participation in conservation.
        </p>
        <h2 class="h2 featurette-heading fw-bolder">Our Hands & Feet:</h2>
        <p class="lead">
        We have many outlooks as a community:
        </p>
        <h4 class="h4 featurette-heading fw-bolder">Environmentally:</h4>
        <p class="lead">
        Our founder Maxi has a long history with conservation, an environmentalist at heart.
        <br><br>
        His heart is to ensure that our children’s children have a legacy to enjoy.
        <br>
        The original ecology is precious and intrinsic to our survival as a species long term.
        <br><br>
        “It’s unity & harmony with all things, maintaining the connection to each other and with nature!”
        <br>
        A sentiment held dear to every Rastafari heart.
        </p>
        <h4 class="h4 featurette-heading fw-bolder">Community:</h4>
        <p class="lead">
        We are community, we are Rastafari, we are Ubuntu, we are family and we are friends.
        <br>
        We build relationships / connections with each other, this is our way, how we share, how we love each other, how we stand for truth and righteousness.
        <br>
        We build with each other, we build with our environment.
        <br>
        Each one – teach one; Iron sharpens iron.
        </p>
        <h4 class="h4 featurette-heading fw-bolder">Educationally:</h4>
        <p class="lead">
        We are a zealous people, eager to be earnest, open, truthful & honest, above all loving!
        <br>
        Jah is love, Jah is zealous.
        <br><br>
        We believe that to do a thing for Jah glory, be to do a thing well!
        <br>
        To do a thing well, we all must know what must go into being able to do the thing well…
        <br><br>
        That is education, we have love.
        <br>
        With education we prosper, without knowledge people perish.
        <br><br>
        May we acknowledge the little we know that we may ask for wisdom*, and Jah give wisdom* liberally. *(wise mind is better)
        <br>
        We start by being truthful, admitting we don’t know everything,
        <br>
        We decide what we would like to know, and apply ourselves earnestly.
        <br>
        Agriculture is such a subject, we are always learning, always the student to nature.
        <br><br>
        We keep our ways, Jah love which rules our hearts, we have sure.
        <br>
        This would be the platform to build correctly upon, our ways.
        <br>
        Spiritual flowing into Cultural flowing into Physical.
        <br><br>
        We learn sciences & technologies after we build our character and are established in love.
        <br>
        That the influence of knowledge then wealth then power does not corrupt our beauty.
        <br>
        To teach how to harmonize between tech & nature.
        <br>
        A modern world dependent upon technology can prosper making your home the garden; one with  nature, harmonizing it.
        <br>
        Stacking our vegetable gardens above our roofs, beside our walls, having fruit trees and herbs in our garden.
        <br>
        We aim to teach a sustainable way of doing that.
        <br>
        Using science, some building knowledge and some effort with much love.
        <br>
        We can turn every little house into a little paradise garden where we can share and love each other!
        <br>
        Maximize your space, make it glorious!
        <br>
        Bring greatness to your community where you are…
        </p>
      </div>
      <!-- <div class="col-sm-12 text-center">
        <h2 class="featurette-heading fw-bolder">Judah Square on Google Maps </h2>
        <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3306.365937167801!2d23.100212575715727!3d-34.034483073163706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e78e98c71601433%3A0x658a9de3e783eef4!2sJudah%20Square!5e0!3m2!1sen!2sza!4v1702892314147!5m2!1sen!2sza" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FTrentonandfreeradical%2Fvideos%2F10154805921573921%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
        <img src="https://www.facebook.com/Trentonandfreeradical/videos/10154805921573921/" class="img featurette-image img-fluid mx-auto" style="position:relative; max-height:600px;width:auto;" alt="" srcset="">
      </div> -->

      <hr class="featurette-divider">
    </div>
  </div>
</body>
<footer>
  <ul class="text-center">  
    <li class="list-group-item list-group-item-action"><a href="https://synaptic4u.co.za/" class="nav-link text-white" target="_blank">Created by: Synaptic4U</a><br></li>
    <li class="list-group-item list-group-item-action"><a href="https://judahsquare.wordpress.com/" class="nav-link text-white" target="_blank">Fall Back website: https://judahsquare.wordpress.com</a></li>
  </ul>
</footer>
</html>