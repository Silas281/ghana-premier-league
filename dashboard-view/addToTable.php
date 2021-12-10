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
                                    <form action="crud.php" method="POST">
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Club Name</label>
                                            <input type="text" class="form-control" id="club_name" name="club_name"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="position" class="col-form-label">Postion</label>
                                            <input type="number" class="form-control" id="position" name="position"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="matches-played" class="col-form-label">Matches Played</label>
                                            <input type="number" class="form-control" id="matches-played"
                                                name="matches_played" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="wins" class="col-form-label">Wins</label>
                                            <input type="number" class="form-control" id="wins" name="wins" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="draws" class="col-form-label">Draws</label>
                                            <input type="number" class="form-control" id="draws" name="draws" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="loss" class="col-form-label">Loss</label>
                                            <input type="number" class="form-control" id="loss" name="loss" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="goals-for" class="col-form-label">Goals For</label>
                                            <input type="number" class="form-control" id="goals-for" name="gd"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <label for="point" class="col-form-label">Points</label>
                                            <input type="number" class="form-control" id="points" name="points"
                                                required>
                                        </div>

                                        <button type="submit" name="submit-new-table" class="btn btn-theme"><i
                                                class="fa fa-location-arrow"></i>Add</button>
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