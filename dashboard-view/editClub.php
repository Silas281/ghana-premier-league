<?php
/*
@author Silas Sangmin
Date started: 
Date completed: 
Description: A mini project for the Web Tech Class 
*/


require __DIR__."../../controller/clubs_controller.php"; 


  $clubObj = new ClubController();
  if(isset($_GET['club_name'])){
  $club_name=$_GET['club_name'];
  //$players = $clubObj->selectAllPlayers('Hearts of Oak FC');
  //$owner=$clubObj->selectOwner(400004);
  //select club
  $club=$clubObj->selectClub($club_name);
  
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
                                <div class="form-wrapper">
                                     <!-- FORM SECTION STARTS -->
                                <form action="crud.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Club Name</label>
                                        <input type="text" class="form-control" id="club_name" name="club_name"
                                                value="<?= $club[0]['club_name'] ?>"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="club-name" class="col-form-label">Coach ID</label>
                                        <input type="number" class="form-control" id="coach-id" name="coach_id" 
                                        value="<?= $club[0]['coach_id'] ?>"
                                        required>
                                    </div>
                                    <div class="form-group">
                                        <label for="owner" class="col-form-label">President ID</label>
                                        <input type="number" class="form-control" id="owner" name="owner_id" 
                                        value="<?= $club[0]['owner_id'] ?>"
                                        required>
                                    </div>
                                    <div class="form-group">
                                        <label for="location" class="col-form-label">Location</label>
                                        <input type="text" class="form-control" id="location" name="location"
                                        value="<?= $club[0]['location'] ?>"
                                        required>
                                    </div>
                                    <div class="form-group">
                                        <label for="memb-num" class="col-form-label">Number Of members</label>
                                        <input type="number" class="form-control" id="memb-num" name="num_members"
                                        value="<?= $club[0]['num_members'] ?>"
                                        required>
                                    </div>
                                    <div class="form-group">
                                        <label for="logo" class="col-form-label">Club Logo</label>
                                        <input type="file" class="form-control" id="memb-num" name="image"
                                        value="<?= $club[0]['club_logo'] ?>"
                                        >
                                    </div>
                                   
                                    <button type="submit" name="submit-edit-club" class="btn btn-theme"><i
                                            class="fa fa-location-arrow"></i>Update Club</button>
                                </form>
                                <!--// FORM SECTION ENDS -->
                                </div>
                                <!--Form wrapper End-->
                               

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




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>