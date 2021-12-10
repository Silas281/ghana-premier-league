<?php

/*
@author Silas Sangmin
Date started: 
Date completed: 
Description: A mini project for the Web Tech Class 
*/


require_once __DIR__."../../controller/matches_controller.php"; 

  $matchObj = new MatchController();
 //UPCOMING MATCHES
 $upcoming=$matchObj->selectUpcomingMatches();
 
 $past=$matchObj->selectPastMatches();

 $current=$matchObj->selectCurrentMatches();

 //ALL MATCHES
 $allmatches=$matchObj->selectAllMatches();

  
 
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
    <section id="main-content">
      <section class="wrapper">
        <!-- row -->
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
            <!-- TABLE STARTS -->
              <table class="table table-striped table-advance table-hover">
                <h4> Upcoming Matches</h4>
                
                <thead>
                  <tr>
                  <th><i class="fa fa-user" aria-hidden="true"></i> Teams </th>
                    <th><i class="bi bi-calendar-event" aria-hidden="true"></i> Match Date</th>
                    <th><i class="bi bi-alarm" aria-hidden="true"></i> Match Time</th>
                    <th><i class="bi bi-app-indicator" aria-hidden="true"></i> Match Result</th>
                    <th><i class="bi bi-geo-alt" aria-hidden="true"></i> Location</th>
                    <th><i class=" fa fa-location-arrow"></i> Action</th>
                 
                  </tr>
                </thead>
                <tbody>
                <?php foreach ($upcoming as $match): ?> <!-- Loop through the match table and pull out information to display -->
                  <tr>
                    <td>
                      <a href="#"><?php echo $match['versus']; ?></a>
                    </td>
                    <td>
                      <a href="#"><?php echo $match['match_date']; ?></a>
                    </td>
                    <td>
                      <a href="#"><?php echo $match['match_time']; ?></a>
                    </td>
                    <td>
                      <a href="#"><?php echo $match['scores']; ?></a>
                    </td>
                    <td>
                      <a href="#"><?php echo $match['location']; ?></a>
                    </td> 
                    <td>
                    <a href="editMatch.php?match_edit_id=<?php echo $match['id']?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                      <a href="crud.php?delete_id=<?php echo $match['id']?>" onclick="return confirm('Are you sure you want to delete this item?');"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                    </td>                  
                  </tr>

                  <?php endforeach; ?> <!-- loop ends -->
               
                </tbody>
              </table>
              <!--//TABLE ENDS -->
            </div>
            <!-- /content-panel -->
          </div>
          
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->


        <!-- ********** PAST MATCHES SECTION ********* -->

          <!-- row -->
          <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
            <!-- TABLE STARTS -->
              <table class="table table-striped table-advance table-hover">
                <h4> Past Matches</h4>
                
                <thead>
                  <tr>
              
                    <th><i class="fa fa-user" aria-hidden="true"></i> Teams </th>
                    <th><i class="bi bi-calendar-event" aria-hidden="true"></i> Match Date</th>
                    <th><i class="bi bi-alarm" aria-hidden="true"></i> Match Time</th>
                    <th><i class="bi bi-app-indicator" aria-hidden="true"></i> Match Result</th>
                    <th><i class="bi bi-geo-alt" aria-hidden="true"></i> Location</th>
                    <th><i class=" fa fa-location-arrow"></i> Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($past as $match): ?> <!-- Loop through the match table and pull out information to display -->
                  <tr>
                    <td>
                      <a href="#"><?php echo $match['versus']; ?></a>
                    </td>
                    <td>
                      <a href="#"><?php echo $match['match_date']; ?></a>
                    </td>
                    <td>
                      <a href="#"><?php echo $match['match_time']; ?></a>
                    </td>
                    <td>
                      <a href="#"><?php echo $match['scores']; ?></a>
                    </td>
                    <td>
                      <a href="#"><?php echo $match['location']; ?></a>
                    </td> 
                    <td>
                    <a href="editMatch.php?match_edit_id=<?php echo $match['id']?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                      <a href="crud.php?delete_match_id=<?php echo $match['id']?>" onclick="return confirm('Are you sure you want to delete this item?');"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                    </td>                  
                  </tr>

                  <?php endforeach; ?> <!-- loop ends -->
               
                </tbody>
                </tbody>
              </table>
              <!--//TABLE ENDS -->
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
        <div class="add-club">
            <a title="Add a Club" href="addMatch.php" id="add-btn" ><i class="bi bi-plus-circle-fill"></i></a>
        </div>
      </section>

    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    
  </section>


  <!---
    ************************************************************************************************************************************
    YOU CAN IGNORE EVERYTHING ELSE BELOW. THEY ARE JUST TEMPLATES AND EXTERNAL LINKS TO LIBRARIES
    **********************************************************************************************************************************
  -->

  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  
</body>

</html>
