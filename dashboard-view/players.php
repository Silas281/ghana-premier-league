<?php
/*
@author Silas Sangmin
Date started: 
Date completed: 
Description: A mini project for the Web Tech Class 
*/

require __DIR__."../../controller/clubs_controller.php"; 
require __DIR__."../../controller/players_controller.php"; 

  $clubObj = new ClubController();
  $club='Hearts of Oak FC';
  //$players = $clubObj->selectAllPlayers('Hearts of Oak FC');
  $owner=$clubObj->selectOwner(400004);

  $playerObj= new PlayerController();
  $players=$playerObj->selectAllPlayers();
  //print_r($players);
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
      <?php include_once ('header.php') ?>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    
    <?php include_once ('sidebar.php') ?>

    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!-- row -->
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4> Players Records</h4>
                <hr>
                <thead>
                  <tr>
                  <th><i class="fa fa-user" aria-hidden="true"></i> First Name</th>
                    <th><i class="fa fa-user" aria-hidden="true"></i> Last Name</th>
                    <th><i class="fa fa-user" aria-hidden="true"></i> Club Name </th>
                    <th><i class="fa fa-user" aria-hidden="true"></i> Position</th>
                    <th><i class="fa fa-user" aria-hidden="true"></i> Ratings </th>
                    <th><i class=" fa fa-location-arrow"></i> Action</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                <!--<?php foreach ($players as $player): ?>-->
                  <tr>
                    <td>
                      <a href="#"><?php echo $player['fname']; ?></a>
                    </td>
                    <td>
                      <a href="#"><?php echo $player['lname']; ?></a>
                    </td>
                    <td>
                      <a href="#"><?php echo $player['club_name']; ?></a>
                    </td>
                    <td>
                      <a href="#"><?php echo $player['position']; ?></a>
                    </td>
                    <td>
                      <a href="#"><?php echo $player['rating']; ?></a>
                    </td>
                    <td>
                      <a href="editPlayer.php?player_id=<?= $player['player_id']?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                      <a href="crud.php?deleteP_id=<?= $player['player_id']?>" onclick="return confirm('Are you sure you want to delete this item?');"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                    </td>                  
                  </tr>
                  <!--<?php endforeach; ?>-->
                </tbody>
              </table>

            </div>
            
            <!-- /content-panel -->
          </div>
          <div class="add-person">
            <a title="Add a person" href="addPlayer.php" id="add-btn" ><i
                    class="bi bi-person-plus-fill"></i></a>
        </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!-- /MAIN CONTENT -->   
  </section>


  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  
</body>

</html>
