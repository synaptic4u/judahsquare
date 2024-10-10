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
  <title>HOJ Soup Kitchen</title>
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

  <!-- Carousel -->
  <div id="myCarousel" class="carousel slide mt-4 w-100 m-auto" style="aspect-ratio: 9/6 auto;max-width:900px;max-height:600px;" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner text-center" >
      <div class="carousel-item active">
        <img src="./images/soup_kitchen/soup_kitchen_stalls2.webp" class="img img-fluid" style="position:relative; max-height:600px;width:auto;" alt="" srcset="">
    
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Soup Kitchen.</h1>
            <p>Community in line during COVID to collect soup & bread.</p>
            <!-- <p><a class="btn btn-lg btn-primary" href="<?php echo $serverURL; ?>/soup_kitchen.php">Rise & Shine Restuarant</a></p> -->
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./images/soup_kitchen/soup_kitchen_stalls.webp" class="img img-fluid" style="position:relative; max-height:600px;width:auto;" alt="" srcset="">
    
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Soup Kitchen COVID.</h1>
            <p>Sisters are ready to hand out soup & bread.</p>
            <!-- <p><a class="btn btn-lg btn-primary" href="<?php echo $serverURL; ?>/soup_kitchen.php">Rise & Shine Restuarant</a></p> -->
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./images/soup_kitchen/soup_kitchen7web.webp" class="img img-fluid" style="position:relative; max-height:600px;width:auto;" alt="" srcset="">
        <div class="container">
          <div class="carousel-caption">
            <h1>Soup Kitchen.</h1>
            <p>Youth gathering and collecting soup.</p>
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

  <!-- FEATURETTE -->
  <div class="container marketing pt-4">
    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-sm-12 col-md-7">
        <h2 class="featurette-heading fw-bolder">Soup Kitchen<br><span class="text-muted">Sister Kerri & Sister Candice</span></h2>
        <h5 class="h5 featurette-heading fw-bolder text-start">Sister Kerri: +27 83 502 2229</h5>
        <h5 class="h5 featurette-heading fw-bolder text-start">Sister Candice: +27 76 546 0298</h5>
        <br>
        <p class="lead">
          Since Judah Square’s initial beginning we were always doing soup kitchens to be a blessing to our community, its part of being Rasta, a way of life.
          <br>
          During COVID we were grateful to receive a lot of support from organizations and farm owners with resources for the soup kitchen.
          <br>
          We were able to provide 3 times a week a cooked meal to our local & broader communities during the COVID lock-down, but when it lifted and most returned to work there were many here in our broader Khayalethu community who are still struggling to find new work as a result of COVID, many local companies closed down which has raised the unemployment.
          <br>
          A lot of our local support at the soup kitchen diminished as our whole country was severely impacted.
          <br><br>
          During COVID our soup kitchen gardens really took off, this has helped us supplement and diversify our resources a little which helps but not ample enough to provide for such a large community.
          <br>
          We can only run the soup kitchen once a week as a result but with renewed support we can afford to provide more meals weekly.
          <br>
          We welcome further support as many families generally are still struggling to recover, some children go to bed without food in the Khayalethu community.
          <br><br>
        </p>
        
        <h4 class="h4 featurette-heading fw-bolder">The Faithful & Current Champions</h4>
        <p class="lead">
          Sister Leah, Rachel (Raly) & Latiffa are currently doing the heavy lifting this year by making the time to prepare the food, cook and clean after, they diarize which households and children fetch which assists in keeping record of how many people are reached.
          <br>
          Julian, Sanchi, Nancy and other sisters volunteer to assist as their heart leads them.
          <br>
          Sister Leah & Raly have championed the soup kitchen since the beginning; remaining faithful till this day.
          <br>
          Candice her daughter in law is also starting to step in more with looking for sponsors and other areas. Kerri assists with fetching groceries and some of the admin like the bookkeeping.
        </p>

        <h4 class="h4 featurette-heading fw-bolder">Sister Nancy’s stalls</h4>      
        <p class="lead">
          They would make Nancy’s buns that she loves and it would take the sisters the whole morning kneading the dough to prepare for a 100 people. It was great times of togetherness for the sisters.
          <br>
          Other times they would have stew or cheese etc. for the kids with juice. It was wonderful as all the sisters would get involved.
          <br>
          Sister Nancy has been a longstanding pillar in the soup kitchen but had to prioritize her involvement in 2008 as she is still principal of the Educare Crèche.
        </p>
      </div>
      <div class="col-sm-12 col-md-5 text-center">
        <img src="./images/soup_kitchen/soup_kitchen_covid1.webp" class="img featurette-image img-fluid mx-auto" style="position:relative; max-height:600px;width:auto;" alt="" srcset="">
        <br><br>
        <h4 class="h4 featurette-heading fw-bolder text-start">Needs in the Soup Kitchen include:</h4>
        <ul class="lead text-start">
          <li>Steady supply of vegetables; The more there is, the more we can serve.</li>
          <li>A new entrance<br>Our current veranda / landing needs railing and a revamp.</li>
          <li>Gas supply</li>
          <li>Stainless prep tables on wheels</li> 
          <li>Pots</li>
          <li>Microwave & Kettle</li>
          <li>Knives</li>
        </ul>
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