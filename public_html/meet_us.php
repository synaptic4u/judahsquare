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
  <title>HOJ Meet Us</title>
  <meta name="description" coouse of Judah - Judah Square Knysna Meet Us page. This page is where we introduce our local community members to all I n I.">
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

  <!-- INTRODUCTION -->
  <div class="container marketing pt-4">
    <div class="row featurette">
      <div class="col-sm-12">
        <h2 class="featurette-heading fw-bolder">House of Judah Community <span class="text-muted"></span></h2>
        <p class="lead">
          As a community, there are many of us and we started off with a few Rasta’s having heart & purpose with families in mind.
          <br>
          For our Judah Square community, as we go we will make a video or audio recording of you if you like where you can introduce yourself, what Jah has done for you and the song in your heart.
          <br>
          Or a picture and a few simple words if you would like a small introduction.
        </p>
      </div>
    </div>
    <hr class="featurette-divider">
  </div>

  <!-- FEATURETTES -->
  <div class="container marketing pt-4">
    <h2 class="featurette-heading fw-bolder mb-4">Meet Us<span class="text-muted"></span></h2>
    <div class="row">
      <!-- Ras Maxi -->
      <div class="col-lg-4 text-center">
        <image class="rounded-circle" width="150" height="150" src="./images/meet_us/maxi_profile.webp" >

        <h2 class="h2 fw-bolder text-start">Ras Maxi</h2>
        <p class="lead text-start">
          Elder Ras Maxi is the Chair currently of House of Judah which oversees Judah Square and many of the communities initiatives. Married with  a number of sons and daughters from his marriage to Sister Nancy. Together they have mang spiritual sons & daughters. 
        </p>
        <!-- <p class="lead text-start"><a class="btn btn-secondary" href="#">View details &raquo;</a></p> -->
      </div>

      <!-- Sister Nancy -->
      <div class="col-lg-4 text-center">
        <image class="rounded-circle" width="150" height="150" src="./images/meet_us/nancy_profile.jpg" >

        <h2 class="h2 fw-bolder text-start">Sister Nancy</h2>
        <p class="lead text-start">
        Sister Nancy currently is the Principle of Judah Square Educare creche. A full time position where she runs her own class of 5-6 year olds and manages 60 children divided between 3 classes. A champion at Judah Square.
        </p>
        <!-- <p class="lead text-start"><a class="btn btn-secondary" href="#">View details &raquo;</a></p> -->
      </div>

      <!-- Ras Zebi -->
      <div class="col-lg-4 text-center">
        <image class="rounded-circle" width="150" height="150" src="./images/meet_us/zebi_face.jpg" >

        <h2 class="h2 fw-bolder text-start">Ras Zebi</h2>
        <p class="lead text-start">
          Judah Square Tourism Guide Ras Zebi.
          <br>
          David Afrikaaner is established and well known within local tourism circles.
          <br>
          A longstanding Rastafari in the Nhayibengi order. Anointed and Baptized in the Way in 17 March 1998.
          <br>
          <a href="https://soundcloud.com/job-jutten/dawies-spoken-word" target="_blank" rel="noopener noreferrer">Ras Zebi's spoken word</a>
        </p>
        <!-- <p class="lead text-start"><a class="btn btn-secondary" href="#">View details &raquo;</a></p> -->
      </div>

      <!-- Sister Kerri -->
      <div class="col-lg-4 text-center">
        <image class="rounded-circle" width="150" height="150" src="./images/meet_us/kerri_face.webp" >

        <h2 class="h2 fw-bolder text-start">Sister Kerri</h2>
        <p class="lead text-start">
          Privileged to introduce Sister Kerri, who has been with Judah Square for over 25 years, since the early days, she and her Kingman came here on the 23 July 1997 for the celebration in Kynsna. They’d been here before while living in DamselBos, Nekkies but Judah Square had not been established yet. Judah Square was established in 1993 only, but back to the story. She says she remembers telling her Kingman, “This is the place”.
        </p>
        <!-- <p class="lead text-start"><a class="btn btn-secondary" href="#">View details &raquo;</a></p> -->
      </div>
      
      <!-- Priest Medan -->
      <div class="col-lg-4 text-center">
        <image class="rounded-circle" width="150" height="150" src="./images/meet_us/medan_face.webp" >

        <h2 class="h2 fw-bolder text-start">Priest Medan</h2>
        <p class="lead text-start">
          Glorious Ancient Ras Medan has followed the Nyahbinghi Way for many years.
          <br>
          He is inspiring, soft-hearted loving and graciously humble. 
        </p>
        <!-- <p class="lead text-start"><a class="btn btn-secondary" href="#">View details &raquo;</a></p> -->
      </div>
      
      <!-- Ras Mau-Mau & Sis Leah -->
      <div class="col-lg-4 text-center">
        <image class="rounded-circle" width="150" height="150" src="./images/rise_and_shine/mau_mau_and_leah_face.png" >

        <h2 class="h2 fw-bolder text-start">Ras Mau-Mau & Sister Leah</h2>
        <p class="lead text-start">
          Hailing from Kenya, they have been a part of the community for a while.
          <br>
          They run the RIse & Shine Restuarant, 
          <br>
          and Mau-Mau as well as a chef, is a DJ.
          <br>
          Sister Leah herself also accomplished in the kitchen and carries her own as chef.
          <br>
          She's a also been a part of the Soup Kitchen for a number of years as a faithful steward.
        </p>
        <p class="lead text-start"><a class="btn btn-secondary" href="<?php echo $serverURL; ?>/rise_n_shine.php">Rise & Shine</a></p>
      </div>
      
      <!-- Ras Iniqwa Christians -->
      <div class="col-lg-4 text-center">
        <image class="rounded-circle" width="150" height="150" src="./images/meet_us/nicky_face.jpg" >

        <h2 class="h2 fw-bolder text-start">Ras Iniqwa</h2>
        <p class="lead text-start">
          Iniqwa Christians
          <br>
          Iniqwa is a accomplished musician who's children have followed in his footsteps, 
          <br>
          also graced with his musical talents.
        </p>
        <p class="lead text-start">
          <a class="btn btn-secondary" href="<?php echo $serverURL; ?>/homegrowns.php">The Homegrowns</a>
        </p>
        <p class="lead text-start">
          <a class="btn btn-secondary" href="<?php echo $serverURL; ?>/zion_youth.php">Zion Youth</a>
        </p>
      </div>
    </div>
    <hr class="featurette-divider">
  </div>
  
  <script>

  </script>

</body>
<footer>
  <ul class="text-center">  
    <li class="list-group-item list-group-item-action"><a href="https://synaptic4u.co.za/" class="nav-link text-white" target="_blank">Created by: Synaptic4U</a><br></li>
    <li class="list-group-item list-group-item-action"><a href="https://judahsquare.wordpress.com/" class="nav-link text-white" target="_blank">Fall Back website: https://judahsquare.wordpress.com</a></li>
  </ul>
</footer>
</html>