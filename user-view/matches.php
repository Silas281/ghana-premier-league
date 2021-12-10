
<?php

/*
@author Silas Sangmin
Date started: 
Date completed: 
Description: A mini project for the Web Tech Class 
*/


require_once __DIR__."../../controller/person_controller.php"; 
require_once __DIR__."../../controller/clubs_controller.php"; 
require_once __DIR__."../../controller/players_controller.php";
require_once __DIR__."../../controller/matches_controller.php";

  $personsObj = new PersonController();
  $clubObj = new ClubController();
  $playerObj= new PlayerController();
  $matchObj=new MatchController();
 //UPCOMING MATCHES
 $upcoming=$matchObj->selectUpcomingMatches();

//CURRENT MATCHES
 $current=$matchObj->selectCurrentMatches();

 //ALL MATCHES
 $allmatches=$matchObj->selectAllMatches();

 //Past MATCHES
 $pastmatches=$matchObj->selectPastMatches();

  //Single match-Recently played
  $singleMatch1=$matchObj->selectMatch(1);

  //Single match-Upcoming

  $singleMatch2=$matchObj->selectMatch(12);


 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Soccer &mdash; Website by Silas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">



</head>

<body>

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="index.php">
              <img src="images/logo.png" alt="Logo">
            </a>
          </div>
          <div class="ml-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="index.php" class="nav-link">Home</a></li>
                <li class="active"><a href="matches.php" class="nav-link">Matches</a></li>
                <li><a href="players.php" class="nav-link">Players</a></li>
                <li><a href="clubs.php" class="nav-link">Clubs</a></li>
                <!-- <li><a href="contact.php" class="nav-link">Contact</a></li> -->
                <li ><a href="login.php" class="nav-link">Dashboard</a></li>
              </ul>
            </nav>

            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right text-white"><span
                class="icon-menu h3 text-white"></span></a>
          </div>
        </div>
      </div>

    </header>

    <div class="hero overlay" style="background-image: url('images/matches.jpeg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 mx-auto text-center">
            <h1 class="text-white">Matches</h1>
            <p>Explore ongoing, current and past matches here</p>
          </div>
        </div>
      </div>
    </div>

    
    
    <div class="container">
      

      <div class="row">
        <div class="col-lg-12">
        <?php 
                      //get home and away clubs logos
                      $home_club_name=$singleMatch1[0]['home_team'];
                      $home_club=$clubObj->selectClub($home_club_name);
                      $away_club_name=$singleMatch1[0]['away_team'];
                      $away_club=$clubObj->selectClub($away_club_name);
                ?>
          <div class="d-flex team-vs">
            <span class="score"><?= $singleMatch1[0]['scores']?></span>
            <div class="team-1 w-50">
              <div class="team-details w-100 text-center">
                <img src="../dashboard-view/<?=$home_club[0]['club_logo'] ?>" alt="Image" class="img-fluid">
                <h3><?= $singleMatch1[0]['home_team']?> <span>(win)</span></h3>
                <ul class="list-unstyled">
                  <!-- <li>Anja Landry (7)</li>
                  <li>Eadie Salinas (12)</li>
                  <li>Ashton Allen (10)</li>
                  <li>Baxter Metcalfe (5)</li> -->
                </ul>
              </div>
            </div>
            <div class="team-2 w-50">
              <div class="team-details w-100 text-center">
                <img src="../dashboard-view/<?=$away_club[0]['club_logo'] ?>" alt="Image" class="img-fluid">
                <h3><?= $singleMatch1[0]['away_team']?><span>(loss)</span></h3>
                <ul class="list-unstyled">
                  <!-- <li>Macauly Green (3)</li>
                  <li>Arham Stark (8)</li>
                  <li>Stephan Murillo (9)</li>
                  <li>Ned Ritter (5)</li> -->
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  

    
    <div class="site-section bg-dark">
      <div class="container">
        
        <div class="row mb-5">
          <div class="col-lg-12">
            <div class="widget-next-match">
              <div class="widget-title">
                <h3>Next Match</h3>
              </div>
              <div class="widget-body mb-3">
                <?php 
                      //get home and away clubs logos
                      $home_club_name=$singleMatch2[0]['home_team'];
                      $home_club=$clubObj->selectClub($home_club_name);
                      $away_club_name=$singleMatch2[0]['away_team'];
                      $away_club=$clubObj->selectClub($away_club_name);
                ?>
                <div class="widget-vs">
                  <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                    <div class="team-1 text-center">
                      <img src="../dashboard-view/<?=$home_club[0]['club_logo'] ?>" alt="Image">
                      <h3><?= $singleMatch2[0]['home_team']?><span></h3>
                    </div>
                    <div>
                      <span class="vs"><span>VS</span></span>
                    </div>
                    <div class="team-2 text-center">
                      <img src="../dashboard-view/<?=$away_club[0]['club_logo'] ?>" alt="Image">
                      <h3><?= $singleMatch2[0]['away_team']?><span></h3>
                    </div>
                  </div>
                </div>
              </div>

              <div class="text-center widget-vs-contents mb-4">
                <h4>Ghana Premier League</h4>
                <p class="mb-5">
                  <span class="d-block"><?= $singleMatch2[0]['match_date']?><span></span>
                  <span class="d-block"><?= $singleMatch2[0]['match_time']?><span></span><br>
                  <strong class="text-primary"><?= $singleMatch2[0]['location']?><span></strong>
                </p>

                <div id="date-countdown2" class="pb-1"></div>
              </div>
            </div>
          </div>
        </div>

        <!--UPCOMING MATCHES -->
        <div class="row">
          <div class="col-12 title-section">
            <h2 class="heading">Upcoming Matches</h2>
          </div>
          <?php
          foreach($upcoming as $match){
          
            //get home and away clubs logos
              $home_club_name=$match['home_team'];
              $home_club=$clubObj->selectClub($home_club_name);
              $away_club_name=$match['away_team'];
              $away_club=$clubObj->selectClub($away_club_name);
          ?>
            
          <div class="col-lg-6 mb-4">
            <div class="bg-light p-4 rounded">
              <div class="widget-body">
                  <div class="widget-vs">
                    <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                      <div class="team-1 text-center">
                        <img src="../dashboard-view/<?=$home_club[0]['club_logo'] ?>" alt="Image">
                        <h3><?= $match['home_team'] ?></h3>
                      </div>
                      <div>
                        <span class="vs"><span>VS</span></span>
                      </div>
                      <div class="team-2 text-center">
                       
                        <img src="../dashboard-view/<?=$away_club[0]['club_logo'] ?>" alt="Image">
                        <h3><?= $match['away_team'] ?></h3>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="text-center widget-vs-contents mb-4">
                  <h4>World Cup League</h4>
                  <p class="mb-5">
                    <span class="d-block"><?= $match['match_date'] ?></span>
                    <span class="d-block"><?= $match['match_time'] ?></span>
                    <strong class="text-primary"><?= $match['location'] ?></strong>
                  </p>

                </div>
              
            </div>
          </div>
          <?php } ?>



            <!--PAST MATCHES -->
          <div class="col-12 title-section">
            <h2 class="heading">Past Matches</h2>
          </div>
          <?php
          foreach($pastmatches as $match){
          
            //get home and away clubs logos
              $home_club_name=$match['home_team'];
              $home_club=$clubObj->selectClub($home_club_name);
              $away_club_name=$match['away_team'];
              $away_club=$clubObj->selectClub($away_club_name);
          ?>
            
          <div class="col-lg-6 mb-4">
            <div class="bg-light p-4 rounded">
              <div class="widget-body">
                  <div class="widget-vs">
                    <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                      <div class="team-1 text-center">
                        <img src="../dashboard-view/<?=$home_club[0]['club_logo'] ?>" alt="Image">
                        <h3><?= $match['home_team'] ?></h3>
                      </div>
                      <div>
                        <span class="vs"><span><?= $match['scores'] ?></span></span>
                      </div>
                      <div class="team-2 text-center">
                       
                        <img src="../dashboard-view/<?=$away_club[0]['club_logo'] ?>" alt="Image">
                        <h3><?= $match['away_team'] ?></h3>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="text-center widget-vs-contents mb-4">
                  <h4>World Cup League</h4>
                  <p class="mb-5">
                    <span class="d-block"><?= $match['match_date'] ?></span>
                    <span class="d-block"><?= $match['match_time'] ?></span>
                    <strong class="text-primary"><?= $match['location'] ?></strong>
                  </p>

                </div>
              
            </div>
          </div>
          <?php } ?>
         
          
        </div>
      </div>
    </div> <!-- .site-section -->



    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-6 title-section">
            <h2 class="heading">Match Highlights</h2>
          </div>
          <div class="col-6 text-right">
            <div class="custom-nav">
            <a href="#" class="js-custom-prev-v2"><span class="icon-keyboard_arrow_left"></span></a>
            <span></span>
            <a href="#" class="js-custom-next-v2"><span class="icon-keyboard_arrow_right"></span></a>
            </div>
          </div>
        </div>


        <div class="owl-4-slider owl-carousel">
          <div class="item" style="padding: 20px;">
            <div class="video-media">
              <img src="images/Ganiu.jpg" alt="Image" class="img-fluid" style="height: 350px;  width: auto;">
              <a href="https://youtu.be/yFJHPGPBWYQ" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <h3 class="m-0"></h3>
                </div>
              </a>
            </div>
          </div>
          <div class="item" style="padding: 20px;">
            <div class="video-media">
              <img src="images/Hearts-King-Faisal-1.jpg" alt="Image" class="img-fluid" style="height: 350px;  width: auto;">
              <a href="https://youtu.be/6B-Y5eSot3I" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <h3 class="m-0"></h3>
                </div>
              </a>
            </div>
          </div>
          <div class="item" style="padding: 20px;">
            <div class="video-media">
              <img src="images/images (1).jfif" alt="Image" class="img-fluid" style="height: 350px;  width: auto;">
              <a href="https://youtu.be/6B-Y5eSot3I" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <h3 class="m-0"></h3>
                </div>
              </a>
            </div>
          </div>

          <div class="item" style="padding: 20px;">
            <div class="video-media">
              <img src="images/matches.jpeg" alt="Image" class="img-fluid" style="height: 350px;  width: auto;">
              <a href="https://youtu.be/6B-Y5eSot3I" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <h3 class="m-0"></h3>
                </div>
              </a>
            </div>
          </div>
          <div class="item" style="padding: 20px;">
            <div class="video-media">
              <img src="images/Vicent_Atinga580.jpg" alt="Image" class="img-fluid" style="height: 350px;  width: auto;">
              <a href="https://youtu.be/6B-Y5eSot3I" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <h3 class="m-0"></h3>
                </div>
              </a>
            </div>
          </div>
          <div class="item" style="padding: 20px;">
            <div class="video-media">
              <img src="images/download (1).jfif" alt="Image" class="img-fluid" style="height: 350px; width: auto;">
              <a href="https://youtu.be/6B-Y5eSot3I" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <h3 class="m-0"></h3>
                </div>
              </a>
            </div>
          </div>

        </div>

      </div>
    </div>

    <div class="container site-section">
      <div class="row">
        <div class="col-6 title-section">
          <h2 class="heading">Headlines</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="custom-media d-flex">
            <div class="img mr-4">
              <img src="images/Fabio-Gama-ghana-premier-league-650x450-1.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="text">
              <span class="meta">May 20, 2021</span>
              <h3 class="mb-4"><a href="single.php">Awako Joins Great Olympics </a></h3>
              <p>Awako sets to join Greate Olypics next summer.</p>
              <p><a href="single.php">Read more</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="custom-media d-flex">
            <div class="img mr-4">
              <img src="images/Gazale2.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="text">
              <span class="meta">November, 2021</span>
              <h3 class="mb-4"><a href="single.php">Kotoko Sacks Head coach</a></h3>
              <p>The head coach of Kotoko FC has been sacked</p>
              <p><a href="single.php">Read more</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <?php 
    //Footer
   require_once 'footer.php';
   ?>



  </div>
  <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>


  <script src="js/main.js"></script>

</body>

</html>