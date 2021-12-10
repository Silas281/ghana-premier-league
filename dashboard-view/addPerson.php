<?php
/*
@author Silas Sangmin
Date started: 
Date completed: 
Description: A mini project for the Web Tech Class 
*/
require __DIR__."../../controller/person_controller.php"; 
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
                                <!-- FORM SECTION STARTS -->

                                <form action="crud.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">ID </label>
                                        <input type="number" class="form-control" id="person_id" name="person_id"
                                           required>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Firstname:</label>
                                        <input type="text" class="form-control" id="fname" name="fname"
                                             required>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Lastname:</label>
                                        <input type="text" class="form-control" id="lname" name="lname"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Telephone:</label>
                                        <input type="text" class="form-control" id="telNo" name="telNo"
                                             required>
                                    </div>

                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Email:</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">DOB:</label>
                                        <input type="date" class="form-control" id="dob" name="dob"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Photo</label>
                                        <input type="file" class="form-control" id="photo" name="image" >
                                    </div>
                                    <button type="submit" name="submit-new-person" class="btn btn-theme"><i
                                            class="fa fa-location-arrow"></i>Add Person</button>
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>





