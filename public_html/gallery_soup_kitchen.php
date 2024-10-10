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
  <title>HOJ Soup Kitchen Gallery</title>
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
  
  <div class="container mt-4">
    <h5 class="h5 featurette-heading fw-bolder text-start">Sister Kerri: +27 83 502 2229</h5>
    <h5 class="h5 featurette-heading fw-bolder text-start">Sister Candice: +27 76 546 0298</h5>
  </div>

  <!-- GALLERY let_the_hungry_be_fed -->
  <div class="container my-4" data-bs-theme="dark" id="gallery_let_the_hungry_be_fed">
    <h2 class="h2 featurette-heading fw-bolder">Soup Kitchen<span class="text-muted"> - HOJ Let the Hungry be Fed.</span></h2>
    <p class="lead">
      An initiative food project to help sustaining the soup kitchen.
      <br>
      All the InI & Sisters to have a iri time with the young ones participating.
      <br>
      Started Jan 2024.
    </p>
    <div class="featurette align-items-center" data-bs-toggle="modal" data-bs-target="#let_the_hungry_be_fed">
      <div class="row text-center align-items-center">
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="300" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen_hungry_be_fed/let_the_hungry_be_fed_1.jpeg" data-bs-target="#let_the_hungry_be_fed_slide" data-bs-slide-to="0">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="120" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen_hungry_be_fed/let_the_hungry_be_fed_2.jpeg" data-bs-target="#let_the_hungry_be_fed_slide" data-bs-slide-to="1">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="120" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen_hungry_be_fed/let_the_hungry_be_fed_3.jpeg" data-bs-target="#let_the_hungry_be_fed_slide" data-bs-slide-to="2">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="120" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen_hungry_be_fed/let_the_hungry_be_fed_4.jpeg" data-bs-target="#let_the_hungry_be_fed_slide" data-bs-slide-to="3">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="120" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen_hungry_be_fed/let_the_hungry_be_fed_5.jpeg" data-bs-target="#let_the_hungry_be_fed_slide" data-bs-slide-to="4">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="300" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen_hungry_be_fed/let_the_hungry_be_fed_6.jpeg" data-bs-target="#let_the_hungry_be_fed_slide" data-bs-slide-to="5">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="120" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen_hungry_be_fed/let_the_hungry_be_fed_7.jpeg" data-bs-target="#let_the_hungry_be_fed_slide" data-bs-slide-to="6">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="120" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen_hungry_be_fed/let_the_hungry_be_fed_8.jpeg" data-bs-target="#let_the_hungry_be_fed_slide" data-bs-slide-to="7">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="120" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen_hungry_be_fed/let_the_hungry_be_fed_9.jpeg" data-bs-target="#let_the_hungry_be_fed_slide" data-bs-slide-to="8">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="120" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen_hungry_be_fed/let_the_hungry_be_fed_10.jpeg" data-bs-target="#let_the_hungry_be_fed_slide" data-bs-slide-to="9">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="120" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen_hungry_be_fed/let_the_hungry_be_fed_11.jpeg" data-bs-target="#let_the_hungry_be_fed_slide" data-bs-slide-to="10">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="120" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen_hungry_be_fed/let_the_hungry_be_fed_12.jpeg" data-bs-target="#let_the_hungry_be_fed_slide" data-bs-slide-to="11">
        </div>
      </div>
    </div>
  </div>
  <hr class="featurette-divider w-75 m-auto">
  <!-- MODAL let_the_hungry_be_fed -->
  <div class="modal modal-xl fade" id="let_the_hungry_be_fed" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog  modal-fullscreen-xxl-down m-2" role="document">
      <div class="modal-content doc_body">
        <div class="modal-body">
          <div id="let_the_hungry_be_fed_slide" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button data-bs-target="#let_the_hungry_be_fed_slide" data-bs-slide-to="0" class="active"></button>
              <button data-bs-target="#let_the_hungry_be_fed_slide" data-bs-slide-to="1"></button>
              <button data-bs-target="#let_the_hungry_be_fed_slide" data-bs-slide-to="2"></button>
              <button data-bs-target="#let_the_hungry_be_fed_slide" data-bs-slide-to="3"></button>
              <button data-bs-target="#let_the_hungry_be_fed_slide" data-bs-slide-to="4"></button>
              <button data-bs-target="#let_the_hungry_be_fed_slide" data-bs-slide-to="5"></button>
              <button data-bs-target="#let_the_hungry_be_fed_slide" data-bs-slide-to="6"></button>
              <button data-bs-target="#let_the_hungry_be_fed_slide" data-bs-slide-to="7"></button>
              <button data-bs-target="#let_the_hungry_be_fed_slide" data-bs-slide-to="8"></button>
              <button data-bs-target="#let_the_hungry_be_fed_slide" data-bs-slide-to="9"></button>
              <button data-bs-target="#let_the_hungry_be_fed_slide" data-bs-slide-to="10"></button>
              <button data-bs-target="#let_the_hungry_be_fed_slide" data-bs-slide-to="11"></button>
            </div>
            <div class="carousel-inner text-center">
              <!-- 1 -->
              <div class="carousel-item active">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen_hungry_be_fed/let_the_hungry_be_fed_1.jpeg" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen_hungry_be_fed/let_the_hungry_be_fed_2.jpeg" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen_hungry_be_fed/let_the_hungry_be_fed_3.jpeg" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen_hungry_be_fed/let_the_hungry_be_fed_4.jpeg" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen_hungry_be_fed/let_the_hungry_be_fed_5.jpeg" >
              </div>
              <!-- 6 -->
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen_hungry_be_fed/let_the_hungry_be_fed_6.jpeg" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen_hungry_be_fed/let_the_hungry_be_fed_7.jpeg" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen_hungry_be_fed/let_the_hungry_be_fed_8.jpeg" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen_hungry_be_fed/let_the_hungry_be_fed_9.jpeg" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen_hungry_be_fed/let_the_hungry_be_fed_10.jpeg" >
              </div>
              <!-- 11 -->
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen_hungry_be_fed/let_the_hungry_be_fed_11.jpeg" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen_hungry_be_fed/let_the_hungry_be_fed_12.jpeg" >
              </div>
            </div>
            <a class="carousel-control-prev" href="#let_the_hungry_be_fed_slide" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon fw-bold" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#let_the_hungry_be_fed_slide" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon fw-bold" aria-hidden="true"></span>
            </a>
          </div>
          <button type="button" class="d-block w-100 close btn btn-secondary m-2" data-bs-dismiss="modal" aria-label="Close">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- GALLERY soup_kitchen_gallery -->
  <div class="container my-4" data-bs-theme="dark" id="gallery_soup_kitchen_gallery">
    <h2 class="h2 featurette-heading fw-bolder">Soup Kitchen<span class="text-muted"> - HOJ Sisters shining.</span></h2>
    <div class="featurette align-items-center" data-bs-toggle="modal" data-bs-target="#soup_kitchen_gallery">
      <div class="row text-center align-items-center">
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="120" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen/soup_kitchen_kids_w_vegs.webp" data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="0">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="120" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen/soup_kitchen_eyes.webp" data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="1">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="300" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen/soup_kitchen.webp" data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="2">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="300" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen/soup_kitchen8.webp" data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="3">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="300" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen/soup_kitchen9.webp" data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="4">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="300" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen/soup_kitchen33.webp" data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="5">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="300" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen/buns_with_filling3.webp" data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="6">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="300" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen/buns_with_filling4.webp" data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="7">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="300" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen/latiffa2.webp" data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="8">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="300" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen/leah.webp" data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="9">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="120" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen/buns_with_filling.webp" data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="10">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="120" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen/latiffa.webp" data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="11">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="120" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen/rachel.webp" data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="12">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="120" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen/rachel2.webp" data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="13">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="120" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen/soup_kitchen1.webp" data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="14">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="120" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen/soup_kitchen3.webp" data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="15">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="120" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen/soup_kitchen4.webp" data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="16">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="120" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen/soup_kitchen5.webp" data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="17">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="120" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen/soup_kitchen6.webp" data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="18">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="120" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen/soup_kitchen7.webp" data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="19">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="120" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen/soup_kitchen10.webp" data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="20">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="120" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen/soup_kitchen_food1.webp" data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="21">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="300" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen/soup_kitchen.webp" data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="22">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="300" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen/soup_kitchen8.webp" data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="23">
        </div>
      </div>
    </div>
  </div>
  <hr class="featurette-divider w-75 m-auto">
  <!-- MODAL soup_kitchen_gallery -->
  <div class="modal modal-xl fade" id="soup_kitchen_gallery" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog  modal-fullscreen-xxl-down m-2" role="document">
      <div class="modal-content doc_body">
        <div class="modal-body">
          <div id="soup_kitchen_gallery_slide" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="0" class="active"></button>
              <button data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="1"></button>
              <button data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="2"></button>
              <button data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="3"></button>
              <button data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="4"></button>
              <button data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="5"></button>
              <button data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="6"></button>
              <button data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="7"></button>
              <button data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="8"></button>
              <button data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="9"></button>
              <button data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="10"></button>
              <button data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="11"></button>
              <button data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="12"></button>
              <button data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="13"></button>
              <button data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="14"></button>
              <button data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="15"></button>
              <button data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="16"></button>
              <button data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="17"></button>
              <button data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="18"></button>
              <button data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="19"></button>
              <button data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="20"></button>
              <button data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="21"></button>
              <button data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="22"></button>
              <button data-bs-target="#soup_kitchen_gallery_slide" data-bs-slide-to="23"></button>
            </div>
            <div class="carousel-inner text-center">
              <!-- 1 -->
              <div class="carousel-item active">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen/soup_kitchen_kids_w_vegs.jpeg" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen/soup_kitchen_eyes.jpg" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen/soup_kitchen.jpg" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen/soup_kitchen8.jpeg" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen/soup_kitchen9.jpeg" >
              </div>
              <!-- 6 -->
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen/soup_kitchen33.jpeg" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen/buns_with_filling3.jpeg" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen/buns_with_filling4.jpeg" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen/latiffa2.jpeg" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen/leah.jpeg" >
              </div>
              <!-- 11 -->
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen/buns_with_filling.jpeg" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen/latiffa.jpeg" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen/rachel.jpeg" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen/rachel2.jpeg" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen/soup_kitchen1.jpg" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen/soup_kitchen3.jpeg" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen/soup_kitchen4.jpeg" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen/soup_kitchen5.jpg" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen/soup_kitchen6.jpeg" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen/soup_kitchen7.jpeg" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen/soup_kitchen10.jpeg" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen/soup_kitchen_food1.jpeg" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen/soup_kitchen.jpg" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen/soup_kitchen8.jpeg" >
              </div>
            </div>
            <a class="carousel-control-prev" href="#soup_kitchen_gallery_slide" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon fw-bold" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#soup_kitchen_gallery_slide" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon fw-bold" aria-hidden="true"></span>
            </a>
          </div>
          <button type="button" class="d-block w-100 close btn btn-secondary m-2" data-bs-dismiss="modal" aria-label="Close">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- GALLERY soup_kitchen_2023_june_15 -->
  <div class="container my-4" data-bs-theme="dark" id="gallery_soup_kitchen_2023_june_15">
    <h2 class="h2 featurette-heading fw-bolder">Soup Kitchen<span class="text-muted"> - 15 June 2023</span></h2>
    <p class="lead">
      On behalf of Judah Sqaure Soup Kitchen.
      <br>
      We want to extend our sincerest gratitude for your generous donation to feed up to 110 kids and even adults.
      <br>
      To: Gaynor Grootboom, Elody Olivier, Gail Somers McCarthy, Sharifa Andrews, Allistair Galandt, Brandon Botha, Kay Andrews, Shakasi Kasonde, Chantal Armoed, Gaven Botha.
      <br>
      We realy do appricilove your kindness and generosity 
      <br>
      Let's make a difference in somebody's life by doing just a little 🙏
      <br>
      Let's put a smile on our future 
    </p>
    <div class="row text-center featurette align-items-center" data-bs-toggle="modal" data-bs-target="#soup_kitchen_2023_june_15">
      <div class="col-sm-12 col-md-6 col-lg-2 my-2">
        <img width="125" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen/soup_kitchen_2023_june_15_3.webp" data-bs-target="#soup_kitchen_2023_june_15_slide" data-bs-slide-to="0">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-2 my-2">
        <img width="125" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen/soup_kitchen_2023_june_15_4.webp" data-bs-target="#soup_kitchen_2023_june_15_slide" data-bs-slide-to="1">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-2 my-2">
        <img width="125" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen/soup_kitchen_2023_june_15_6.webp" data-bs-target="#soup_kitchen_2023_june_15_slide" data-bs-slide-to="2">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-2 my-2">
        <img width="125" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen/soup_kitchen_2023_june_15_7.webp" data-bs-target="#soup_kitchen_2023_june_15_slide" data-bs-slide-to="3">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-2 my-2">
        <img width="125" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen/soup_kitchen_2023_june_15_8.webp" data-bs-target="#soup_kitchen_2023_june_15_slide" data-bs-slide-to="4">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-2 my-2">
        <img width="125" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen/soup_kitchen_2023_june_15_9.webp" data-bs-target="#soup_kitchen_2023_june_15_slide" data-bs-slide-to="5">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-2 my-2">
        <img width="125" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen/soup_kitchen_2023_june_15_11.webp" data-bs-target="#soup_kitchen_2023_june_15_slide" data-bs-slide-to="6">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-2 my-2">
        <img width="125" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen/soup_kitchen_2023_june_15_1.webp" data-bs-target="#soup_kitchen_2023_june_15_slide" data-bs-slide-to="7">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-2 my-2">
        <img width="125" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen/soup_kitchen_2023_june_15_2.webp" data-bs-target="#soup_kitchen_2023_june_15_slide" data-bs-slide-to="8">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-2 my-2">
        <img width="125" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen/soup_kitchen_2023_june_15_5.webp" data-bs-target="#soup_kitchen_2023_june_15_slide" data-bs-slide-to="9">
      </div>
      
    </div>
  </div>
  <hr class="featurette-divider w-75 m-auto">
  <!-- MODAL soup_kitchen_2023_june_15 -->
  <div class="modal modal-xl fade" id="soup_kitchen_2023_june_15" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog  modal-fullscreen-xxl-down m-2" role="document">
      <div class="modal-content doc_body">
        <div class="modal-body">
          <div id="soup_kitchen_2023_june_15_slide" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button data-bs-target="#soup_kitchen_2023_june_15_slide" data-bs-slide-to="0" class="active"></button>
              <button data-bs-target="#soup_kitchen_2023_june_15_slide" data-bs-slide-to="1"></button>
              <button data-bs-target="#soup_kitchen_2023_june_15_slide" data-bs-slide-to="2"></button>
              <button data-bs-target="#soup_kitchen_2023_june_15_slide" data-bs-slide-to="3"></button>
              <button data-bs-target="#soup_kitchen_2023_june_15_slide" data-bs-slide-to="4"></button>
              <button data-bs-target="#soup_kitchen_2023_june_15_slide" data-bs-slide-to="5"></button>
              <button data-bs-target="#soup_kitchen_2023_june_15_slide" data-bs-slide-to="6"></button>
              <button data-bs-target="#soup_kitchen_2023_june_15_slide" data-bs-slide-to="7"></button>
              <button data-bs-target="#soup_kitchen_2023_june_15_slide" data-bs-slide-to="8"></button>
              <button data-bs-target="#soup_kitchen_2023_june_15_slide" data-bs-slide-to="9"></button>
            </div>
            <div class="carousel-inner text-center">

              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen/soup_kitchen_2023_june_15_3.webp" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen/soup_kitchen_2023_june_15_4.webp" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen/soup_kitchen_2023_june_15_6.webp" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen/soup_kitchen_2023_june_15_7.webp" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen/soup_kitchen_2023_june_15_8.webp" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen/soup_kitchen_2023_june_15_9.webp" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen/soup_kitchen_2023_june_15_11.webp" >
              </div>
              <div class="carousel-item active">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen/soup_kitchen_2023_june_15_1.webp" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen/soup_kitchen_2023_june_15_2.webp" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen/soup_kitchen_2023_june_15_5.webp" >
              </div>
              
              <a class="carousel-control-prev" href="#soup_kitchen_2023_june_15_slide" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon fw-bold" aria-hidden="true"></span>
              </a>
              <a class="carousel-control-next" href="#soup_kitchen_2023_june_15_slide" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon fw-bold" aria-hidden="true"></span>
              </a>
            </div>
          </div>
          <button type="button" class="d-block w-100 close btn btn-secondary m-2" data-bs-dismiss="modal" aria-label="Close">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- GALLERY soup_kitchen_2023_march_20 -->
  <div class="container my-4" data-bs-theme="dark" id="gallery_soup_kitchen_2023_march_20">
    <h2 class="h2 featurette-heading fw-bolder">Soup Kitchen<span class="text-muted"> - 20 March 2023</span></h2>
    <div class="row text-center featurette align-items-center" data-bs-toggle="modal" data-bs-target="#soup_kitchen_2023_march_20">
      <div class="col-sm-12 col-md-6 col-lg-2 my-2">
        <img width="120" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen/soup_kitchen_2023_march_20.webp" data-bs-target="#soup_kitchen_2023_march_20_slide" data-bs-slide-to="0">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-2 my-2">
        <img width="120" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen/soup_kitchen_2023_march_20_2.webp" data-bs-target="#soup_kitchen_2023_march_20_slide" data-bs-slide-to="1">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-2 my-2">
        <img width="120" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen/soup_kitchen_2023_march_20_3.webp" data-bs-target="#soup_kitchen_2023_march_20_slide" data-bs-slide-to="2">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-2 my-2">
        <img width="120" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen/soup_kitchen_2023_march_20_4.webp" data-bs-target="#soup_kitchen_2023_march_20_slide" data-bs-slide-to="3">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-2 my-2">
        <img width="120" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen/soup_kitchen_2023_march_20_5.webp" data-bs-target="#soup_kitchen_2023_march_20_slide" data-bs-slide-to="4">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-2 my-2">
        <img width="120" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen/soup_kitchen_2023_march_20_6.webp" data-bs-target="#soup_kitchen_2023_march_20_slide" data-bs-slide-to="5">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-2 my-2">
        <img width="120" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen/soup_kitchen_2023_march_20_8.webp" data-bs-target="#soup_kitchen_2023_march_20_slide" data-bs-slide-to="6">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-2 my-2">
        <img width="120" height="200" loading="lazy" class="img img-thumbnail" src="./images/soup_kitchen/soup_kitchen_2023_march_20_9.webp" data-bs-target="#soup_kitchen_2023_march_20_slide" data-bs-slide-to="7">
      </div>
    </div>
  </div>
  <hr class="featurette-divider w-75 m-auto">
  <!-- MODAL soup_kitchen_2023_march_20 -->
  <div class="modal modal-xl fade" id="soup_kitchen_2023_march_20" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog  modal-fullscreen-xxl-down m-2" role="document">
      <div class="modal-content doc_body">
        <div class="modal-body">
          <div id="soup_kitchen_2023_march_20_slide" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button data-bs-target="#soup_kitchen_2023_march_20_slide" data-bs-slide-to="0" class="active"></button>
              <button data-bs-target="#soup_kitchen_2023_march_20_slide" data-bs-slide-to="1"></button>
              <button data-bs-target="#soup_kitchen_2023_march_20_slide" data-bs-slide-to="2"></button>
              <button data-bs-target="#soup_kitchen_2023_march_20_slide" data-bs-slide-to="3"></button>
              <button data-bs-target="#soup_kitchen_2023_march_20_slide" data-bs-slide-to="4"></button>
              <button data-bs-target="#soup_kitchen_2023_march_20_slide" data-bs-slide-to="5"></button>
              <button data-bs-target="#soup_kitchen_2023_march_20_slide" data-bs-slide-to="6"></button>
              <button data-bs-target="#soup_kitchen_2023_march_20_slide" data-bs-slide-to="7"></button>
            </div>
            <div class="carousel-inner text-center">
              <div class="carousel-item active">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen/soup_kitchen_2023_march_20.webp" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen/soup_kitchen_2023_march_20_2.webp" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen/soup_kitchen_2023_march_20_3.webp" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen/soup_kitchen_2023_march_20_4.webp" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen/soup_kitchen_2023_march_20_5.webp" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen/soup_kitchen_2023_march_20_6.webp" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen/soup_kitchen_2023_march_20_8.webp" >
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/soup_kitchen/soup_kitchen_2023_march_20_9.webp" >
              </div>
                <a class="carousel-control-prev" href="#soup_kitchen_2023_march_20_slide" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon fw-bold" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next" href="#soup_kitchen_2023_march_20_slide" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon fw-bold" aria-hidden="true"></span>
                </a>
            </div>
          </div>
          <button type="button" class="d-block w-100 close btn btn-secondary m-2" data-bs-dismiss="modal" aria-label="Close">
          Close
          </button>
        </div>
      </div>
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