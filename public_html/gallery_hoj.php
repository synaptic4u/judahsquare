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
  <title>HOJ House of Judah Gallery</title>
  <link rel="icon" href="./images/background/logo.webp" type="image/x-icon">

  <!-- CSS -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->
  <link href="./css/bootstrap.min.css" rel="stylesheet" />
  <link href="./css/style.css" rel="stylesheet" />

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

  <!-- GALLERY HOJ_Senparks -->
  <div class="container my-4" data-bs-theme="dark" id="gallery_HOJ_Senparks_1">
    <h2 class="h2 featurette-heading fw-bolder">HOJ & Senparks<span class="text-muted"> - Sep 2023</span></h2>
    <div class="row text-center featurette align-items-center" data-bs-toggle="modal" data-bs-target="#HOJ_Senparks">
      <div class="col-sm-12 col-md-6 col-lg-2 my-2">
        <img width="300" height="200" loading="lazy" class="img img-thumbnail" src="./images/community_sanparks_2013/community_sanparks3.webp" data-bs-target="#HOJ_Senparks_slide" data-bs-slide-to="0">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-2 my-2">
        <img width="300" height="200" loading="lazy" class="img img-thumbnail" src="./images/community_sanparks_2013/community_sanpark14.webp" data-bs-target="#HOJ_Senparks_slide" data-bs-slide-to="1">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-2 my-2">
        <img width="300" height="200" loading="lazy" class="img img-thumbnail" src="./images/community_sanparks_2013/community_sanparks11.webp" data-bs-target="#HOJ_Senparks_slide" data-bs-slide-to="2">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-2 my-2">
        <img width="300" height="200" loading="lazy" class="img img-thumbnail" src="./images/community_sanparks_2013/community_sanpark15.webp" data-bs-target="#HOJ_Senparks_slide" data-bs-slide-to="3">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-2 my-2">
        <img width="120" height="200" loading="lazy" class="img img-thumbnail" src="./images/community_sanparks_2013/community_sanpark23.webp" data-bs-target="#HOJ_Senparks_slide" data-bs-slide-to="4">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-2 my-2">
        <img width="120" height="200" loading="lazy" class="img img-thumbnail" src="./images/community_sanparks_2013/community_sanpark35.webp" data-bs-target="#HOJ_Senparks_slide" data-bs-slide-to="5">
      </div>
    </div>
  </div>
  <hr class="featurette-divider w-75 m-auto">
  <!-- MODAL HOJ_Senparks -->
  <div class="modal modal-xl fade" id="HOJ_Senparks" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog  modal-fullscreen-xxl-down m-2" role="document">
      <div class="modal-content doc_body">
        <div class="modal-body">
          <div id="HOJ_Senparks_slide" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button data-bs-target="#HOJ_Senparks_slide" data-bs-slide-to="0" class="active"></button>
              <button data-bs-target="#HOJ_Senparks_slide" data-bs-slide-to="1"></button>
              <button data-bs-target="#HOJ_Senparks_slide" data-bs-slide-to="2"></button>
              <button data-bs-target="#HOJ_Senparks_slide" data-bs-slide-to="3"></button>
              <button data-bs-target="#HOJ_Senparks_slide" data-bs-slide-to="4"></button>
              <button data-bs-target="#HOJ_Senparks_slide" data-bs-slide-to="5"></button>
            </div>
            <div class="carousel-inner text-center">
              <div class="carousel-item active">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/community_sanparks_2013/community_sanparks3.webp">
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/community_sanparks_2013/community_sanpark14.webp">
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/community_sanparks_2013/community_sanparks11.webp">
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/community_sanparks_2013/community_sanpark15.webp">
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/community_sanparks_2013/community_sanpark23.webp">
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/community_sanparks_2013/community_sanpark35.webp">
              </div>
            </div>
            <a class="carousel-control-prev" href="#HOJ_Senparks_slide" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon fw-bold" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#HOJ_Senparks_slide" role="button" data-bs-slide="next">
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
  
  <!-- GALLERY community_municipality_2023 -->
  <div class="container my-4" data-bs-theme="dark" id="gallery_community_municipality_2023">
    <h2 class="h2 featurette-heading fw-bolder">Knysna School Clean Up<span class="text-muted"> - Sep 2023</span></h2>
    <div class="row text-center featurette align-items-center" data-bs-toggle="modal" data-bs-target="#community_municipality_2023">
      <div class="col-sm-12 col-md-6 col-lg-2 my-2">
        <img width="300" height="200" loading="lazy" class="img img-thumbnail" src="./images/community_municipality_2023/community_muicipality_clean_up.webp" data-bs-target="#community_municipality_2023_slide" data-bs-slide-to="0">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-2 my-2">
        <img width="120" height="200" loading="lazy" class="img img-thumbnail" src="./images/community_municipality_2023/community_muicipality_clean_up5.webp" data-bs-target="#community_municipality_2023_slide" data-bs-slide-to="1">
      </div>
    </div>
  </div>
  <hr class="featurette-divider w-75 m-auto">
  <!-- MODAL community_municipality_2023 -->
  <div class="modal modal-xl fade" id="community_municipality_2023" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog  modal-fullscreen-xxl-down m-2" role="document">
      <div class="modal-content doc_body">
        <div class="modal-body">
          <div id="community_municipality_2023_slide" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button data-bs-target="#community_municipality_2023_slide" data-bs-slide-to="0" class="active"></button>
              <button data-bs-target="#community_municipality_2023_slide" data-bs-slide-to="1"></button>
            </div>
            <div class="carousel-inner text-center">
              <div class="carousel-item active">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/community_municipality_2023/community_muicipality_clean_up.webp">
              </div>
              <div class="carousel-item">
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/community_municipality_2023/community_muicipality_clean_up5.webp"">
              </div>
            </div>
            <a class="carousel-control-prev" href="#community_municipality_2023_slide" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon fw-bold" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#community_municipality_2023_slide" role="button" data-bs-slide="next">
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
</body>
<footer>
  <ul class="text-center">  
    <li class="list-group-item list-group-item-action"><a href="https://synaptic4u.co.za/" class="nav-link text-white" target="_blank">Created by: Synaptic4U</a><br></li>
    <li class="list-group-item list-group-item-action"><a href="https://judahsquare.wordpress.com/" class="nav-link text-white" target="_blank">Fall Back website: https://judahsquare.wordpress.com</a></li>
  </ul>
</footer>
</html>