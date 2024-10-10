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
  <title>HOJ Home</title>
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
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
    </div>
    <div class="carousel-inner text-center" >    
      <div class="carousel-item">
        <img loading="eager" src="./images/hoj/judahsquare_main_1.webp" class="img img-fluid" style="position:relative; max-height:600px;width:auto;" alt="" srcset="">
        <div class="container">
          <div class="carousel-caption text-center">
            <h1 class="h1 fw-bolder">House of Judah.</h1>
            <p><a class="btn btn-lg btn-primary" href="<?php echo $serverURL; ?>/house_of_judah.php">House of Judah</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img loading="lazy" src="./images/tourism/zebi_statue.webp" class="img img-fluid" style="position:relative; max-height:600px;width:auto;" alt="" srcset="">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1 class="h1 fw-bolder">House of Judah Tourism.</h1>
            <p class="lead">Meet Ras Zebi our official story teller.</p>
            <p><a class="btn btn-lg btn-primary" href="<?php echo $serverURL; ?>/tourism.php">Tourism</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img loading="lazy" src="./images/soup_kitchen/soup_kitchen_covid1.webp" class="img img-fluid" style="position:relative; max-height:600px;width:auto;" alt="" srcset="">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1 class="h1 fw-bolder">Soup Kitchen.</h1>
            <p class="lead">House of Judah running a large soup kitchen during COVID for the community.</p>
            <p><a class="btn btn-lg btn-primary" href="<?php echo $serverURL; ?>/soup_kitchen.php">Soup Kitchen</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img loading="lazy" src="./images/tabernacle/tabernacle1.webp" class="img img-fluid" style="position:relative; max-height:600px;width:auto;" alt="" srcset="">
        <div class="container">
          <div class="carousel-caption">
            <h1 class="h1 fw-bolder">House of Judah Tabernacle.</h1>
            <p class="lead">The Tabernacle made by the community.</p>
            <p><a class="btn btn-lg btn-primary" href="<?php echo $serverURL; ?>/tabernacle.php">Tabernacle</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item active">
        <img loading="lazy" src="./images/in_the_running/promotion_2024_feb_24_1.webp" class="img img-fluid" style="position:relative; max-height:600px;width:auto;" alt="" srcset="">
        <div class="container">
          <div class="carousel-caption">
            <h1 class="h1 fw-bolder">In the Running</h1>
            <p class="lead">Radiance Lovelight presents - Free up Your Soul.</p>
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

  <!-- FEATURETTES -->
  <div class="container marketing pt-4">
    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-sm-12 col-md-7">
        <h2 class="h2 featurette-heading fw-bolder">House of Judah <span class="text-muted"></span></h2>
        <p class="lead">
        Judah Square was established in 1993, with Elder Ras Maxi being the principal founder, part of the brotherhood of elders who live here.
        <br>The “House of Judah” is the umbrella organization for all the different legs of the community.
        </p>
        <p class="row justify-content-between mx-2">
          <a class="col-5 btn btn-secondary" href="<?php echo $serverURL; ?>/house_of_judah.php">House of Judah</a>
          <a class="col-5 btn btn-secondary" href="<?php echo $serverURL; ?>/community.php">Community</a>
        </p>
        <p class="row justify-content-between mx-2">
          <a class="col-5 btn btn-secondary" href="<?php echo $serverURL; ?>/initiatives.php">Initiatives</a>
          <a class="col-5 btn btn-secondary" href="<?php echo $serverURL; ?>/soup_kitchen.php">Soup Kitchen</a>
        </p>
        <p class="row justify-content-between mx-2">
          <a class="col-5 btn btn-secondary" href="<?php echo $serverURL; ?>/about.php">About</a>
          <a class="col-5 btn btn-secondary" href="<?php echo $serverURL; ?>/judah_sponsorship.php">Judah Sponsorship</a>
        </p>
      </div>
      <div class="col-sm-12 col-md-5 text-center">
        <img loading="lazy" src="./images/statue_eugene_lewis/statue.webp" class="img featurette-image img-fluid hover-overlay mx-auto" style="position:relative; max-height:600px;width:auto;" alt="" srcset="">
      </div>
    </div>
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-sm-12 col-md-7 order-md-2">
        <h2 class="featurette-heading fw-bolder">Tourism<span class="text-muted"></span></h2>
        <p class="lead">
          Ras Zebi is our tourism liaison with local tourist centers.
          <br>Providing the rich history of our culture;
          <br>Our journey to victory in religious & cultural freedom and then how Judah Square has grown and what’s in the running.
        </p>
        
        <p class="row justify-content-between mx-2">
          <a class="col-5 btn btn-secondary" href="<?php echo $serverURL; ?>/tourism.php">Tourism</a>
          <a class="col-5 btn btn-secondary" href="<?php echo $serverURL; ?>/meet_us.php">Meet Us</a>
        </p>
        <p class="row justify-content-between mx-2">
          <a class="col-5 btn btn-secondary" href="<?php echo $serverURL; ?>/rise_n_shine.php">Rise n Shine Restuarant</a>
          <a class="col-5 btn btn-secondary" href="<?php echo $serverURL; ?>/homestay.php">Homestay Bed & Breakfast</a>
        </p>
      </div>
      <div class="col-sm-12 col-md-5 text-center order-md-1">
        <img loading="lazy" src="./images/tourism/zebi_promote_main2.webp" class="img featurette-image img-fluid mx-auto" style="position:relative; max-height:600px;width:auto;" alt="" srcset="">
      </div>
    </div>
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-sm-12 col-md-7">
        <h2 class="featurette-heading fw-bolder">Creche <span class="text-muted"></span></h2>
        <p class="lead">
        Sister Nancy heads up the creche, she is our Principal and has dedicated many years to the hearts and minds of her flock.
        <br>She has been the primary pillar in establishing it and running since 2008.
        <br>Our creche houses 3 classes and we boast 60 children aged between 1-6 years. We’re an accredited Educare Creche.
        </p>
        
        <p class="row justify-content-between mx-2">
          <a class="col-5 btn btn-secondary" href="<?php echo $serverURL; ?>/creche.php">Creche</a>
          <a class="col-5 btn btn-secondary" href="<?php echo $serverURL; ?>/creche_sponsorship.php">Creche Sponsorship</a>
        </p>
      </div>
      <div class="col-sm-12 col-md-5 text-center">
        <img loading="lazy" src="./images/creche/creche_visitors_leaving.webp" class="img featurette-image img-fluid mx-auto" style="position:relative; max-height:600px;width:auto;" alt="" srcset="">
      </div>
    </div>

    <hr class="featurette-divider">
    <!-- /END THE FEATURETTES -->
  </div>
  
</body>
<footer>
  <ul class="text-center">  
    <li class="list-group-item list-group-item-action"><a href="https://synaptic4u.co.za/" class="nav-link text-white" target="_blank">Created by: Synaptic4U</a><br></li>
    <li class="list-group-item list-group-item-action"><a href="https://judahsquare.wordpress.com/" class="nav-link text-white" target="_blank">Fall Back website: https://judahsquare.wordpress.com</a></li>
  </ul>
</footer>
</html>