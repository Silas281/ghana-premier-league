<?php 
//Import Controllers
require_once __DIR__."../../controller/person_controller.php"; 
require_once __DIR__."../../controller/clubs_controller.php"; 
require_once __DIR__."../../controller/players_controller.php";
require_once __DIR__."../../controller/matches_controller.php";
require_once __DIR__."../../controller/leagueTable_controller.php";

  $personsObj = new PersonController();
  $clubObj = new ClubController();
  $playerObj= new PlayerController();
  $matchObj=new MatchController();

 //UPCOMING MATCHES
 $upcoming=$matchObj->selectUpcomingMatches();
 
 $past=$matchObj->selectPastMatches();

 $current=$matchObj->selectCurrentMatches();

 //ALL MATCHES
 $allmatches=$matchObj->selectAllMatches();

  //Single match-Recently played
  $singleMatch1=$matchObj->selectMatch(1);

  //Single match-Upcoming

  $singleMatch2=$matchObj->selectMatch(6);


  //Create Controller objects
  $playerObj= new PlayerController();
  $clubObj = new ClubController();
  $tableObj = new TableController();

  //League table
  $tableInfo = $tableObj->getAllClubPositions(); 
 
  //get all clubs
  $clubs = $clubObj->selectAllClubs();
  $owner=$clubObj->selectOwner(400004);
  //select all players
  $players=$playerObj->selectAllPlayers();
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
                                <li class="active"><a href="index.php" class="nav-link">Home</a></li>
                                <li><a href="matches.php" class="nav-link">Matches</a></li>
                                <li><a href="players.php" class="nav-link">Players</a></li>
                                <li><a href="clubs.php" class="nav-link">Clubs</a></li>
                                <!-- <li><a href="contact.php" class="nav-link">Contact</a></li> -->
                                <li><a href="login.php" class="nav-link">Dashboard</a></li>
                            </ul>
                        </nav>

                        <a href="#"
                            class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right text-white"><span
                                class="icon-menu h3 text-white"></span></a>
                    </div>
                </div>
            </div>

        </header>

        <div class="hero overlay" style="background-image: url('images/bg_3.jpg');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 mx-auto text-center">
                        <h1 class="text-white">Clubs</h1>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>



        <div class="container site-section">
            <div class="row">
                <div class="col-6 title-section">
                    <h2 class="heading">CLUBS</h2>
                </div>
            </div>
            <?php foreach( $clubs as $club){
              ?>
            <div class="row my-5">
                <div class="col-sm">
                    <img class="club_logo" src="../dashboard-view/<?=$club['club_logo'] ?>"
                        style="width: 100px; height:auto;">
                    <p><?= $club['club_name'] ?></p>
                </div>
                <div class="col-sm">
                    <?php 
                    //get coach and owner
                    $owner=$clubObj->selectOwner($club['owner_id']);
                   
                    $coach=$clubObj->SelectCoach($club['coach_id']);
                  ?>
                    <p>President </p>
                    <div>
                        <img src="../dashboard-view/<?=$owner[0]['photo'] ?>"
                            style="width: 50px; height: 50px; border-radius: 50%;">
                    </div>
                    <p class="my-3"><?= $owner[0]['fname'] ?> <?= $owner[0]['lname'] ?>

                    </p>

                </div>
                <div class="col-sm">
                    <p>Manager</p>
                    <div>
                        <img src="../dashboard-view/<?=$coach[0]['photo'] ?>"
                            style="width: 50px; height: 50px; border-radius: 50%;">
                    </div>
                    <p class="my-3"><?= $coach[0]['fname'] ?> <?= $coach[0]['lname'] ?></p>
                </div>
                <div class="col-sm-12">
                    <div class="site-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-6 title-section">
                                    <h2 class="heading"><?= $club['club_name'] ?> Players</h2>
                                </div>
                                <div class="col-6 text-right">
                                    <div class="custom-nav">
                                        <a href="#" class="js-custom-prev-v2"><span
                                                class="icon-keyboard_arrow_left"></span></a>
                                        <span></span>
                                        <a href="#" class="js-custom-next-v2"><span
                                                class="icon-keyboard_arrow_right"></span></a>
                                    </div>
                                </div>
                            </div>


                            <div class="owl-4-slider owl-carousel">
                                <?php
                              $clubPlayers=$clubObj->selectAllplayers($club['club_name']);
                              foreach($clubPlayers as $player){
                              ?>
                                <div class="item" style="padding: 20px;">
                                    <div class="video-media">
                                        <img src="../dashboard-view/<?=$player['photo'] ?>" alt="Image"
                                            class="img-fluid" style="height: 260px;  width: auto;">
                                        <a href="" class="d-flex play-button align-items-center" data-fancybox>
                                            <span class="icon mr-3">
                                                <span class="icon-play"></span>
                                            </span>
                                            <div class="caption">
                                                <h3 class="m-0"><?= $player['fname']?> <?= $player['lname']?></h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <?php } ?>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid" style="height: 10px; background-color:brown;">

            </div>
            <?php
            }
            ?>

            <!-- <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="custom-media d-block">
            <div class="img mb-4">
              <a href="single.php"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
            </div>
            <div class="text">
              <span class="meta">May 20, 2020</span>
              <h3 class="mb-4"><a href="#">Romolu to stay at Real Nadrid?</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt saepe tempora dolorem.</p>
              <p><a href="#">Read more</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="custom-media d-block">
            <div class="img mb-4">
              <a href="single.php"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
            </div>
            <div class="text">
              <span class="meta">May 20, 2020</span>
              <h3 class="mb-4"><a href="#">Romolu to stay at Real Nadrid?</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt saepe tempora dolorem.</p>
              <p><a href="#">Read more</a></p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mb-4">
          <div class="custom-media d-block">
            <div class="img mb-4">
              <a href="single.php"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
            </div>
            <div class="text">
              <span class="meta">May 20, 2020</span>
              <h3 class="mb-4"><a href="#">Romolu to stay at Real Nadrid?</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt saepe tempora dolorem.</p>
              <p><a href="#">Read more</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="custom-media d-block">
            <div class="img mb-4">
              <a href="single.php"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
            </div>
            <div class="text">
              <span class="meta">May 20, 2020</span>
              <h3 class="mb-4"><a href="#">Romolu to stay at Real Nadrid?</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt saepe tempora dolorem.</p>
              <p><a href="#">Read more</a></p>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 mb-4">
          <div class="custom-media d-block">
            <div class="img mb-4">
              <a href="single.php"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
            </div>
            <div class="text">
              <span class="meta">May 20, 2020</span>
              <h3 class="mb-4"><a href="#">Romolu to stay at Real Nadrid?</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt saepe tempora dolorem.</p>
              <p><a href="#">Read more</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="custom-media d-block">
            <div class="img mb-4">
              <a href="single.php"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
            </div>
            <div class="text">
              <span class="meta">May 20, 2020</span>
              <h3 class="mb-4"><a href="#">Romolu to stay at Real Nadrid?</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt saepe tempora dolorem.</p>
              <p><a href="#">Read more</a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-7 text-center">
          <div class="custom-pagination">
            <a href="#">1</a>
            <span>2</span>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
          </div>
        </div>
      </div> -->
        </div>






        <?php 
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