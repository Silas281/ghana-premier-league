
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
                <li><a href="index.php" class="nav-link">Home</a></li>
                <li><a href="matches.php" class="nav-link">Matches</a></li>
                <li class="active"><a href="players.php" class="nav-link">Players</a></li>
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

    <div class="hero overlay" style="background-image: url('images/Ganiu.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 mx-auto text-center">
            <h1 class="text-white">Players</h1>
            <p>Players of the Game. Read and Learn more about the players in Ghana Premier League.</p>
          </div>
        </div>
      </div>
    </div>

    
    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-6 title-section">
            <h2 class="heading">Star Players</h2>
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
        <?php 
          //diplay players in a courosel
          foreach($players as $player){
            ?>
          <div class="item p-2">
            <div class="video-media">
              <img src="../dashboard-view/<?=$player['photo'] ?>" alt="<?=$player['photo'] ?>" alt="Image" class="img-fluid" style="height: 260px; width: auto;;">
              <a href="" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <span class="meta"><?=$player['rating'] ?> / <?=$player['position'] ?></span>
                  <h3 class="m-0"><?=$player['fname'] ?> <?=$player['lname'] ?></h3>
                </div>
              </a>
            </div>
          </div>
          <?php } ?>
         
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