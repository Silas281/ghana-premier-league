<?php
/*
@author Silas Sangmin
Date started: 
Date completed: 
Description: A mini project for the Web Tech Class 
*/


require __DIR__."../../controller/matches_controller.php"; 

  $matchObj = new MatchController();

  //UPDATE PHP SCRIPT
  //Check for edit id
  if(isset($_GET['match_edit_id'])){
    $id=$_GET['match_edit_id'];
    //fetch person to prepopulate the form
    $match=$matchObj->selectMatch($id);
    //print_r($match);
  }
  
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
                                <!--FORM SECTION STARTS -->
                                <div class="container">
                                    <form action="crud.php" method="POST">
                                    <?php
                                        if(isset($_SESSION["errors"])){
                                            $errors = $_SESSION["errors"];
                                            // loop through errors and display them
                                            foreach($errors as $error){
                                                ?>
                                                    <small style="color: red"><?= $error."<br>"; ?></small>
                                                <?php
                                            }
                                        }
                                        // destroy session after displaying errors
                                        $_SESSION["errors"] = null;
                                    ?>
                                    <div class="form-group" hidden>
                                            <label for="" class="col-form-label">ID:</label>
                                            <input type="text" class="form-control" id="versus" name="id"
                                            value="<?= $match[0]['id']?>" hidden>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-form-label">Versus:</label>
                                            <input type="text" class="form-control" id="versus" name="versus"
                                            value="<?= $match[0]['versus']?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-form-label">Match Date:</label>
                                            <input type="date" class="form-control" id="match_date" name="match_date"
                                            value="<?= $match[0]['match_date']?>" required>                                             required>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-form-label">Match Time:</label>
                                            <input type="time" class="form-control" id="match_time" name="match_time"
                                            value="<?= $match[0]['match_time']?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-form-label">Official ID:</label>
                                            <input type="text" class="form-control" id="official_id" name="official_id"
                                            value="<?= $match[0]['official_id']?>"  required>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-form-label">Location:</label>
                                            <input type="text" class="form-control" id="location" name="location"
                                            value="<?= $match[0]['location']?>"   required>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-form-label">Match Result:</label>
                                            <input type="text" class="form-control" id="scores" name="scores" 
                                            value="<?= $match[0]['scores']?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-form-label">Home Team</label>
                                            <input type="text" class="form-control" id="home_team" name="home_team"
                                            value="<?= $match[0]['home_team']?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-form-label">Away Team</label>
                                            <input type="text" class="form-control" id="away_team" name="away_team"
                                            value="<?= $match[0]['away_team']?>">
                                        </div>
                                        <button type="submit" name="submit-match-edit" class="btn btn-theme mt-2"><i
                                                class="fa fa-location-arrow"></i> Update Match </button>
                                    </form>
                                    <!--// FORM SECTION ENDS -->
                                </div>

                            </div>
                            <!-- /col-md-4 -->
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