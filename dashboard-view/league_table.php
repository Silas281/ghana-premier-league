<?php
/*
@author Silas Sangmin
Date started: 
Date completed: 
Description: A mini project for the Web Tech Class 
*/

require __DIR__."../../controller/leagueTable_controller.php"; 

  $tableObj = new TableController();
 
 
  $tableInfo = $tableObj->getAllClubPositions(); 
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
              <table class="table table-striped table-advance table-hover table-responsive">
                <h4> League Table</h4>
                <hr>
                <thead>
                  <tr>
                  <th><i class="fa fa-user" aria-hidden="true"></i> Position</th>
                    <th><i class="fa fa-user" aria-hidden="true"></i> Club</th>
                    <th><i class="fa fa-user" aria-hidden="true"></i> P </th>
                    <th><i class="fa fa-user" aria-hidden="true"></i> W</th>
                    <th><i class="fa fa-user" aria-hidden="true"></i> D </th>
                    <th><i class="fa fa-user" aria-hidden="true"></i> L</th>
                    <th><i class="fa fa-user" aria-hidden="true"></i> GD</th>
                    <th><i class="fa fa-user" aria-hidden="true"></i> Points </th>
                    <th><i class=" fa fa-location-arrow"></i> Action</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach ($tableInfo as $table){
                   ?>
                  <tr>
                    <td>
                      <span><?php echo $table['position']; ?></span>
                    </td>
                    <td>
                      <span><?php echo $table['club_name']; ?></span>
                    </td>
                    <td>
                      <span><?php echo $table['matches_played']; ?></span>
                    </td>
                    <td>
                      <span><?php echo $table['wins']; ?></span>
                    </td>
                    <td>
                      <span><?php echo $table['draws']; ?></span>
                    </td>
                    <td>
                      <span><?php echo $table['loss']; ?></span>
                    </td>
                    <td>
                      <span><?php echo $table['goal_difference']; ?></span>
                    </td>
                    <td>
                      <span><?php echo $table['points']; ?></span>
                    </td>
                    <td>
                      <a href="editTable.php?league-to-edit=<?php echo $table['position']?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                      <a href="crud.php?league-to-delete_id=<?php echo $table['club_name']?>" onclick="return confirm('Are you sure you want to delete this item?');"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                    </td>                  
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <div class="add-club">
            <a title="Add a Club" href="addToTable.php" id="add-btn" ><i class="bi bi-plus-circle-fill"></i></a>
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
