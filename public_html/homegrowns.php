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
  <title>HOJ Homegrowns</title>
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
                <a class="dropdown-item text-nowrap" href="<?php echo $serverURL; ?>/homegrowns.php">Soup Kitchen</a>
                <a class="dropdown-item" href="<?php echo $serverURL; ?>/gallery_homegrowns.php">Soup Kitchen Gallery</a>
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

  <!-- Featurette -->
  <div class="container marketing pt-4">
    <div class="row featurette">
      <div class="col-sm-12 col-md-7">
        <h2 class="featurette-heading fw-bolder">
          The Homegrowns
          <br>
          <span class="text-muted">
            One of House of Judah's local bands.
            <br>
            Iniqau Christians - Ras Iniqau
          </span>
        </h2>
        <h4 class="h4 featurette-heading fw-bolder">Ras Iniqau Cell: +27 74 835 1273</h4>
        <h4 class="h4 featurette-heading fw-bolder">Homegrouwns members:</h4>   
        <ul class="lead">
          <li>Iniqwa Christians - Ras Iniqwa</li>
          <li>Kobus Pedro - Ras Coldblood</li>
          <li>Venus Christians - Sister Venus</li>
          <li>Moniqwa Christians - Sister Moniqwa</li>
        </ul>
      </div>
      <div class="col-sm-12 col-md-5 text-center">
        <img src="./images/meet_us/nicky.jpg" class="img featurette-image img-fluid mx-auto" style="position:relative; max-height:400px;width:auto;" alt="" srcset="">
      </div>
    </div>
    <hr class="featurette-divider">
  </div>

  <!-- House of Judah - Homegrowns - Chillin & Jammin! -->
  <div class="container marketing pt-4">
    <div class="row featurette">
      <div class="col-sm-12 text-center">
        <h2 class="featurette-heading fw-bolder text-start">
          House of Judah - Homegrowns - Chillin & Jammin!
          <!-- <br> -->
          <!-- <span class="text-muted">New Years Eve Bash - 31 Dec 2023</span> -->
        </h2>
        <iframe class="object-fit-scale w-100" height="480" src="https://www.youtube.com/embed/ho1TdgJYUQI" title="Homegrowns - Chillin &amp; Jammin!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
    </div>
  </div>
  <hr class="featurette-divider w-75 m-auto">

  <!-- House of Judah - Homegrowns Feature 1 -->
  <div class="container marketing pt-4">
    <div class="row featurette">
      <div class="col-sm-12 text-center">
        <h2 class="featurette-heading fw-bolder text-start">
          House of Judah - Homegrowns Feature 1
          <!-- <br> -->
          <!-- <span class="text-muted">New Years Eve Bash - 31 Dec 2023</span> -->
        </h2>
        <iframe class="object-fit-scale w-100"  height="480"  src="https://www.youtube.com/embed/fDG_sf4sz0E" title="Homegrowns Feature 1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
    </div>
  </div>
  <hr class="featurette-divider w-75 m-auto">

  <!-- House of Judah - Homegrowns Feature 2 -->
  <div class="container marketing pt-4">
    <div class="row featurette">
      <div class="col-sm-12 text-center">
        <h2 class="featurette-heading fw-bolder text-start">
          House of Judah - Homegrowns Feature 2
          <!-- <br> -->
          <!-- <span class="text-muted">New Years Eve Bash - 31 Dec 2023</span> -->
        </h2>
        <iframe class="object-fit-scale w-100"  height="480"  src="https://www.youtube.com/embed/jQ8SuHJQtWk" title="Homegrowns Feature 2" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>  
      </div>
    </div>
  </div>
  <hr class="featurette-divider w-75 m-auto">
  
  <!-- GALLERY homegrowns_gallery -->
  <div class="container my-4" data-bs-theme="dark" id="gallery_homegrowns_gallery">
    <h2 class="h2 featurette-heading fw-bolder">
      Homegrowns Gallery
      <br>
      <span class="text-muted">List of available videos and clips from FaceBook.</span>
    </h2>
    <div class="featurette align-items-center" data-bs-toggle="modal" data-bs-target="#homegrowns_gallery">
      <div class="row text-center align-items-center">
        <!-- 1 -->
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="300" height="200" loading="lazy" class="img img-thumbnail" src="./images/homegrowns/homegrowns_2022_03_17_1.png" data-bs-target="#homegrowns_gallery_slide" data-bs-slide-to="0">
        </div>
        <!-- 2 -->
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="300" height="200" loading="lazy" class="img img-thumbnail" src="./images/homegrowns/homegrowns_2021_03_22_1.png" data-bs-target="#homegrowns_gallery_slide" data-bs-slide-to="1">
        </div>
        <!-- 3 -->
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="300" height="200" loading="lazy" class="img img-thumbnail" src="./images/homegrowns/homegrowns_2022_02_1.png" data-bs-target="#homegrowns_gallery_slide" data-bs-slide-to="2">
        </div>
        <!-- 4 -->
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="300" height="200" loading="lazy" class="img img-thumbnail" src="./images/homegrowns/homegrowns_2022_01_25_1.png" data-bs-target="#homegrowns_gallery_slide" data-bs-slide-to="3">
        </div>
        <!-- 5 -->
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="300" height="200" loading="lazy" class="img img-thumbnail" src="./images/homegrowns/homegrowns_2021_12_22.png" data-bs-target="#homegrowns_gallery_slide" data-bs-slide-to="4">
        </div>
        <!-- 6 -->
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="300" height="200" loading="lazy" class="img img-thumbnail" src="./images/homegrowns/homegrowns_2021_12_08.png" data-bs-target="#homegrowns_gallery_slide" data-bs-slide-to="5">
        </div>
        <!-- 7 -->
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="300" height="200" loading="lazy" class="img img-thumbnail" src="./images/homegrowns/homegrowns_2021_12_08_2.png" data-bs-target="#homegrowns_gallery_slide" data-bs-slide-to="6">
        </div>
        <!-- 8 -->
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="300" height="200" loading="lazy" class="img img-thumbnail" src="./images/homegrowns/homegrowns_2021_09_29_1.png" data-bs-target="#homegrowns_gallery_slide" data-bs-slide-to="7">
        </div>
        <!-- 9 -->
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="300" height="200" loading="lazy" class="img img-thumbnail" src="./images/homegrowns/homegrowns_2021_05_26_1.png" data-bs-target="#homegrowns_gallery_slide" data-bs-slide-to="8">
        </div>
      </div>
    </div>
  </div>
  <hr class="featurette-divider w-75 m-auto">
  <!-- MODAL homegrowns_gallery -->
  <div class="modal modal-xl fade" id="homegrowns_gallery" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog  modal-fullscreen-xxl-down m-2" role="document">
      <div class="modal-content doc_body">
        <div class="modal-body">
          <div id="homegrowns_gallery_slide" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button data-bs-target="#homegrowns_gallery_slide" data-bs-slide-to="0" class="active"></button>
              <button data-bs-target="#homegrowns_gallery_slide" data-bs-slide-to="1"></button>
              <button data-bs-target="#homegrowns_gallery_slide" data-bs-slide-to="2"></button>
              <button data-bs-target="#homegrowns_gallery_slide" data-bs-slide-to="3"></button>
              <button data-bs-target="#homegrowns_gallery_slide" data-bs-slide-to="4"></button>
              <button data-bs-target="#homegrowns_gallery_slide" data-bs-slide-to="5"></button>
              <button data-bs-target="#homegrowns_gallery_slide" data-bs-slide-to="6"></button>
              <button data-bs-target="#homegrowns_gallery_slide" data-bs-slide-to="7"></button>
              <button data-bs-target="#homegrowns_gallery_slide" data-bs-slide-to="8"></button>
            </div>
            <div class="carousel-inner text-center">
              <!-- 1 -->
              <div class="carousel-item active">
                <iframe loading="lazy" class="img img-fluid img-gallery-slide" src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2Finiqwa%2Fvideos%2F390015956294220%2F&show_text=false&width=317&t=0" width="317" height="476" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
              </div>
              <!-- 2 -->
              <div class="carousel-item">
                <iframe loading="lazy" class="img img-fluid img-gallery-slide" src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2Finiqwa%2Fvideos%2F268208708845972%2F&show_text=false&width=317&t=0" width="317" height="476" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
              </div>
              <!-- 3 -->
              <div class="carousel-item">
                <iframe loading="lazy" class="img img-fluid img-gallery-slide" src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2Finiqwa%2Fvideos%2F1140473293455374%2F&show_text=false&width=357&t=0" width="357" height="476" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
              </div>
              <!-- 4 -->
              <div class="carousel-item">
                <iframe loading="lazy" class="img img-fluid img-gallery-slide" src="https://www.facebook.com/plugins/video.php?height=459&href=https%3A%2F%2Fwww.facebook.com%2Finiqwa%2Fvideos%2F653210595869148%2F&show_text=false&width=560&t=0" width="560" height="459" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
              </div>
              <!-- 5 -->
              <div class="carousel-item">
                <iframe loading="lazy" class="img img-fluid img-gallery-slide" src="https://www.facebook.com/plugins/video.php?height=420&href=https%3A%2F%2Fwww.facebook.com%2Finiqwa%2Fvideos%2F596316018296578%2F&show_text=false&width=560&t=0" width="560" height="420" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
              </div>
              <!-- 6 -->
              <div class="carousel-item">
                <iframe loading="lazy" class="img img-fluid img-gallery-slide" src="https://www.facebook.com/plugins/video.php?height=458&href=https%3A%2F%2Fwww.facebook.com%2Finiqwa%2Fvideos%2F435771824716727%2F&show_text=false&width=560&t=0" width="560" height="458" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
              </div>
              <!-- 7 -->
              <div class="carousel-item">
                <iframe loading="lazy" class="img img-fluid img-gallery-slide" src="https://www.facebook.com/plugins/video.php?height=459&href=https%3A%2F%2Fwww.facebook.com%2Finiqwa%2Fvideos%2F1775046416039163%2F&show_text=false&width=560&t=0" width="560" height="459" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
              </div>
              <!-- 8 -->
              <div class="carousel-item">
                <iframe loading="lazy" class="img img-fluid img-gallery-slide" src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2Finiqwa%2Fvideos%2F3070160176602175%2F&show_text=false&width=261&t=0" width="261" height="476" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
              </div>
              <!-- 9 -->
              <div class="carousel-item">
                <iframe loading="lazy" class="img img-fluid img-gallery-slide" src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2Finiqwa%2Fvideos%2F1140473293455374%2F&show_text=false&width=357&t=0" width="357" height="476" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
              </div>
            </div>
            <a class="carousel-control-prev" href="#homegrowns_gallery_slide" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon fw-bold" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#homegrowns_gallery_slide" role="button" data-bs-slide="next">
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

  <!-- House of Judah - 30th Anniversary New Years Eve Bash -->
  <div class="container marketing pt-4">
    <div class="row featurette">
      <div class="col-sm-12 text-center">
        <h2 class="featurette-heading fw-bolder text-start">
          House of Judah - 30th Anniversary
          <br>
          <span class="text-muted">New Years Eve Bash - 31 Dec 2023</span>
        </h2>
        <iframe loading="lazy" src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2Finiqau.christians%2Fvideos%2F1497446384160603%2F&show_text=true&width=295&t=0" width="295" height="591" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
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