<?php
/*
@author Silas Sangmin
Date started: 
Date completed: 
Description: A mini project for the Web Tech Class 
*/

require_once( __DIR__."../../controller/players_controller.php"); 

$playerObj=new PlayerController();
if(isset($_GET['player_id'])) {
  $player_id = $_GET['player_id'];
  $player = $playerObj->selectPlayer($player_id);
} else {
  die();
}

?>

<!DOCTYPE html>
<html lang="en">

<?php include_once ('head.php') ?>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->

      <?php include_once ( 'header.php' ) ?>
    
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
      <?php include_once ( 'sidebar.php' ) ?>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content" class="container">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row content-panel">
              <div class="col-md-8 col-sm-12 col-xs-12 profile-text mt mb centered">

              <!-- FORM SECTION STARTS -->
                <form action="crud.php" method="POST">
                     
                      <div class="form-group">
                        <input type="hidden" class="form-control" id="person_id" name="player_id" required value="<?php echo $player_id ?>">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Firstname:</label>
                        <input type="text" class="form-control" id="fname" name="fname" required value="<?php echo $player[0]['fname'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Lastname:</label>
                        <input type="text" class="form-control" id="lname" name="lname" required value="<?php echo $player[0]['lname'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Team Name:</label>
                        <input type="text" class="form-control" id="team_name" name="club_name" required value="<?php echo $player[0]['club_name'] ?>">
                      </div>
                      
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Position:</label>
                        <input type="text" class="form-control" id="position" name="position" required value="<?php echo $player[0]['position'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Rating:</label>
                        <input type="text" class="form-control" id="rating" name="rating" required value="<?php echo $player[0]['rating'] ?>">
                      </div>
                    
                      <button type="submit" name="edit-player" class="btn btn-theme"><i class="fa fa-location-arrow"></i>Edit Person</button>
                </form>
                <!--// FORM SECTION ENDS -->

              </div>
            </div>
            <!-- /row -->
          </div>
        </div>

        <!-- /container -->
      </section>
      <!-- /wrapper -->
    </section>

    <!-- /MAIN CONTENT -->
    <!--main content end-->

  </section>




  
</body>

</html>
