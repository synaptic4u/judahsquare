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
  <title>HOJ Statue</title>
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
                <a class="dropdown-item" href="<?php echo $serverURL; ?>/statue.php">The statue</a>
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

        <p class="lead">
        <br><br>
        <br><br>
        <br><br>
        <br><br>
        <a href="https://www.knysnaarts.com/knysna-arts-society/judah-square/" target="_blank" rel="noopener noreferrer">knysnaarts.com/knysna-arts-society/judah-square/</a>
        <br><br>
        <a href="https://www.visitknysna.co.za/art/one-of-a-kind-sculpture-to-welcome-visitors-to-knysnas-judah-square/" target="_blank" rel="noopener noreferrer">visitknysna.co.za/art/...judah-square/</a>
        </p>
      </div>
      <div class="col-sm-12 col-md-5 text-center">
        <img src="./images/statue_eugene_lewis/eugene_lewis.jpg" class="img featurette-image img-fluid mx-auto" style="position:relative; max-height:400px;width:auto;" alt="" srcset="">
      </div>
    </div>
    <hr class="featurette-divider">
  </div>

    <!-- FEATURETTES -->
  <div class="container marketing pt-4">
    <div class="row featurette">
      <div class="col-sm-12 col-md-7">
        <h2 class="featurette-heading fw-bolder">
          House of Judah Haile Selassie Statue
          <br>
          <span class="text-muted">Eugene Lewis
          </span>
        </h2>
        <p class="lead">
          A year in the making, the sculpture is one of a series of new interactive public artworks being installed in iconic locations around greater Knysna as part of the 
          <br>
          #knysnaartproject – a collaborative initiative by Visit Knysna (Destination Marketing), Knysna Municipality (Destination Management and Economic Development) and The Knysna Art Society.
          <br><br>
          Executive Mayor of Knysna Lavael Davis unveiled the Judah Square statue at the official launch of the #knysnaartproject on Wednesday 23rd February 2022.
          <br>
          He described the project as being one of the most exciting initiatives the town has ever seen.
          <br>
          “This sculpture stands as an example to the citizens and communities of greater Knysna of what can be achieved when we come together in our efforts to reach a shared goal.
          <br>
          The past two years have wreaked havoc on the tourism sector and initiatives such as this will play a crucial role in helping Knysna to stand apart and alone as a destination amidst the online clutter of post-Covid travel and tourism communications.”
        </p>
        <br>
        <p class="lead">
          Rastafari elder Brother Maxi described the project as a “great gift”.
          <br>
          “We are hopeful for what this project will do for our community as a whole. We want visitors to know about Judah Square, to want to come here, stay here, eat here, spend time with us, and learn about our lifestyle and beliefs.”
          <br><br>
          Local ceramicist Eugene Lewis, working under the mentor-ship of well-known sculptor and artist Suzanne du Toit.
          <br>
          Created a show-stopping 2.2m sculpture of a Rastafarian priest at the iconic Judah Square in Concordia, home to South Africa’s biggest Rastafarian community.
        </p>
        <br>
        <p class="lead">
          Born in Paarl in 1977, Eugene moved to Knysna with his mother and siblings at age seven to settle in Hornlee where he has lived with his family, which now includes his two teenage children, ever since.
          <br>
          Having just completed matric, it was while out looking for a job one day in 1997 that Eugene found himself standing in the workshop of Tribal Africa – a small ceramics studio in Knysna’s industrial area that was producing handmade figurines wearing traditional Zulu, Xhosa, Ndebele and Swati dress to sell to local and international tourists.
          <br>
          Crossing the threshold, he knew in an instant that a chance decision had led him to his destiny. 
          <br>
          Eugene’s  passion for ceramics was immediate and all-encompassing. 
          <br>
          This was the future that had been waiting for him. “I needed a job and knew nothing about pottery, but when I saw the clay that first day, I fell in love with it all…the fact that you can take it in your hands and create something beautiful,” Eugene says.
        </p>
        <p class="lead">
          Eugene´s sculpture of Haile Selassie looks over the community, established in 1993, Judah Square is the largest Rastafarian community in South Africa.
          <br>
          A popular culture tour in Knysna, visitors are welcome to experience the unique culture with stops at the Museum and restaurants.
          <br>
          Several murals depicting various Rastafarian icons can be seen throughout the area.
        </p>
      </div>
      <div class="col-sm-12 col-md-5 text-center">
        <img loading="lazy" src="./images/art_music/statue.webp" class="img featurette-image img-fluid hover-overlay mx-auto" style="position:relative; max-height:600px;width:auto;" alt="" srcset="">
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
  
  <!-- GALLERY statue_gallery -->
  <div class="container my-4" data-bs-theme="dark" id="gallery_statue_gallery">
    <h2 class="h2 featurette-heading fw-bolder">
      Eugen Lewis at work
      <span class="text-muted"> - HOJ Statue</span>
    </h2>
    <div class="featurette align-items-center" data-bs-toggle="modal" data-bs-target="#statue_gallery">
      <div class="row text-center align-items-center justify-content-center">
        <!-- 1 -->
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="125" height="200" loading="lazy" class="img img-thumbnail" src="./images/statue_eugene_lewis/next_to_sculpture.jpeg" data-bs-target="#statue_gallery_slide" data-bs-slide-to="0">
          <label>Eugene Lewis next to the 2.2m sculpture.</label>
        </div>
        <!-- 2 -->
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="125" height="200" loading="lazy" class="img img-thumbnail" src="./images/statue_eugene_lewis/adding_finishing_touches.jpeg" data-bs-target="#statue_gallery_slide" data-bs-slide-to="1">
          <label>Eugene Lewis adding some finishing touches.</label>
        </div>
        <!-- 3 -->
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="300" height="200" loading="lazy" class="img img-thumbnail" src="./images/statue_eugene_lewis/statue1.jpg" data-bs-target="#statue_gallery_slide" data-bs-slide-to="2">
          <label>Official handover with mayor</label>
        </div>
        <!-- 4 -->
        <div class="col-sm-12 col-md-6 col-lg-2 my-2">
          <img width="125" height="200" loading="lazy" class="img img-thumbnail" src="./images/statue_eugene_lewis/makes_local_News.jpeg" data-bs-target="#statue_gallery_slide" data-bs-slide-to="3">
          <label>Eugene Lewis makes the Local News</label>
        </div>
      </div>
    </div>
  </div>
  <hr class="featurette-divider w-75 m-auto">
  <!-- MODAL statue_gallery -->
  <div class="modal modal-xl fade" id="statue_gallery" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog  modal-fullscreen-xxl-down m-2" role="document">
      <div class="modal-content doc_body">
        <div class="modal-body">
          <div id="statue_gallery_slide" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button data-bs-target="#statue_gallery_slide" data-bs-slide-to="0" class="active"></button>
              <button data-bs-target="#statue_gallery_slide" data-bs-slide-to="1"></button>
              <button data-bs-target="#statue_gallery_slide" data-bs-slide-to="2"></button>
              <button data-bs-target="#statue_gallery_slide" data-bs-slide-to="3"></button>
            </div>
            <div class="carousel-inner text-center">
              <!-- 1 -->
              <div class="carousel-item active">
                <label class="h5 text-muted">Eugene Lewis next to the 2.2m sculpture.</label><br>
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/statue_eugene_lewis/next_to_sculpture.jpeg" >
              </div>
              <!-- 2 -->
              <div class="carousel-item">
                <label class="h5 text-muted">Eugene Lewis adding some finishing touches.</label><br>
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/statue_eugene_lewis/adding_finishing_touches.jpeg" >
              </div>
              <!-- 3 -->
              <div class="carousel-item">
                <label class="h5 text-muted">Official handover with mayor</label><br>
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/statue_eugene_lewis/statue1.jpg" >
              </div>
              <!-- 4 -->
              <div class="carousel-item">
                <label class="h5 text-muted">Eugene Lewis makes the Local News</label><br>
                <img loading="lazy" class="img img-fluid img-gallery-slide" src="./images/statue_eugene_lewis/makes_local_News.jpeg" >
              </div>
            </div>
            <a class="carousel-control-prev" href="#statue_gallery_slide" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon fw-bold" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#statue_gallery_slide" role="button" data-bs-slide="next">
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