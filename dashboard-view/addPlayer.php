<?php
/*
@author Silas Sangmin
Date started: 
Date completed: 
Description: A mini project for the Web Tech Class 
*/


?>

<!DOCTYPE html>
<html lang="en">

<?php  require_once('head.php') ?>

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
                        <label for="recipient-name" class="col-form-label">ID</label>
                        <input type="number" class="form-control" id="player_id" name="player_id" required>
                      </div>
                      <div class="form-group">
                        <label for="club-name" class="col-form-label">Club Name:</label>
                        <input type="text" class="form-control" id="club" name="club" required>
                      </div>
                      
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Position:</label>
                        <input type="text" class="form-control" id="position" name="position" required>
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Rating:</label>
                        <input type="text" class="form-control" id="rating" name="rating" required>
                      </div>
                      <button type="submit" name="submit-player" class="btn btn-theme"><i class="fa fa-location-arrow"></i>Add Athlete</button>
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


    <!---
    ************************************************************************************************************************************
    YOU CAN IGNORE EVERYTHING ELSE BELOW. THEY ARE JUST TEMPLATES AND EXTERNAL LINKS TO LIBRARIES
    **********************************************************************************************************************************
  -->

  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
  <script type="text/javascript" src="lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
  <script src="lib/advanced-form-components.js"></script>
</body>

</html>
