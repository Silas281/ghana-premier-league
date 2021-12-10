<?php
/*
@author Silas Sangmin
Date started: 
Date completed: 
Description: A mini project for the Web Tech Class 
*/

include_once( 'crud.php' );

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $selectOne = selectOneAthlete($id);
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
                      <?php foreach($selectOne as $records): ?>
                      <div class="form-group">
                        <input type="hidden" class="form-control" id="person_id" name="person_id" required value="<?php echo $id ?>">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Firstname:</label>
                        <input type="text" class="form-control" id="fname" name="fname" required value="<?php echo $records['fname'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Lastname:</label>
                        <input type="text" class="form-control" id="lname" name="lname" required value="<?php echo $records['lname'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Team Name:</label>
                        <input type="text" class="form-control" id="team_name" name="team_name" required value="<?php echo $records['team_name'] ?>">
                      </div>
                      
                      <div class="form-group">
                        <label for="goals" class="col-form-label">Goals</label>
                        <input type="number" class="form-control" id="goals" name="goals" required value="<?php echo $records['rating'] ?>">
                      </div>
                      <?php endforeach; ?>
                      <button type="submit" name="edit-scorer" class="btn btn-theme"><i class="fa fa-location-arrow"></i>Edit Person</button>
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
