<?php
/*
@author Silas Sangmin
Date started: 
Date completed: 
Description: A mini project for the Web Tech Class 
*/

if(isset($_GET['id'])) {
  $id = $_GET['id'];
} else {
  $id = "";
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
    <section id="main-content" class="container">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row content-panel">
              <div class="col-md-8 col-sm-12 col-xs-12 profile-text mt mb centered">

              <!-- FORM STARTS -->
                <form action="crud.php" method="POST">
                      <div class="form-group">
                        <label for="honor-id" class="col-form-label">Honour ID</label>
                        <input type="number" class="form-control" id="honor_id" name="honor_id" required>
                      </div>
                      <div class="form-group">
                        <label for="honor-name" class="col-form-label">Club Name:</label>
                        <input type="text" class="form-control" id="honor-name" name="honor-name" required>
                      </div>
                      <div class="form-group">      
                        <label for="season" class="col-form-label">Date</label>
                        <input type="date" class="form-control" id="season" name="season" required>
                      </div>
                      <button type="submit" name="submit-athlete" class="btn btn-theme"><i class="fa fa-location-arrow"></i>Add Athlete</button>
                </form>
                <!--// FORM ENDS -->
                
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
