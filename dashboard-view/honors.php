<?php

/*
@author Silas Sangmin
Date started: 
Date completed: 
Description: A mini project for the Web Tech Class 
*/


include_once( 'crud.php' );

 
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
                                <h4> Honors</h4>
                                <hr>
                                <thead>
                                    <tr>
                                        <th><i class="fa fa-user" aria-hidden="true"></i> Honor Name</th>
                                        <th><i class=" fa fa-location-arrow"></i> Action</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                    <!-- Loop through the matches table and pull out information to display -->
                                    <tr>
                                        <td>
                                            <a href="#"><?php  ?></a>
                                        </td>

                                        <td>
                                            <a href="editPlayer.php?id=<?php ?>"><button
                                                    class="btn btn-primary btn-xs"><i
                                                        class="fa fa-pencil"></i></button></a>
                                            <a href="crud.php?delete_id=<?php ?>"
                                                onclick="return confirm('Are you sure you want to delete this item?');"><button
                                                    class="btn btn-danger btn-xs"><i
                                                        class="fa fa-trash-o "></i></button></a>
                                        </td>
                                    </tr>

                                   
                                    <!-- loop ends -->

                                </tbody>
                            </table>
                            <!--//TABLE ENDS -->
                        </div>
                        <!-- /content-panel -->
                    </div>
                    <!-- /col-md-12 -->
                </div>
                <!-- /row -->


                <!-- ********** I ********* -->

                <!-- row -->
                <div class="row mt">
                    <div class="col-md-12">
                        <div class="content-panel">
                            <!-- TABLE STARTS -->
                            <table class="table table-striped table-advance table-hover">
                                <h4> Team Honors</h4>
                                <hr>
                                <thead>
                                    <tr>
                                        <th><i class="fa fa-user" aria-hidden="true"></i> Honor Name</th>
                                        <th><i class="fa fa-user" aria-hidden="true"></i> Team Name</th>
                                        <th><i class="fa fa-user" aria-hidden="true"></i> Season</th>
                                        <th><i class=" fa fa-location-arrow"></i> Action</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <!-- Loop through the matches table and pull out information to display -->
                                    <tr>
                                        <td>
                                            <a href="#"><?php ?></a>
                                        </td>
                                        <td>
                                            <a href="#"><?php  ?></a>
                                        </td>
                                        <td>
                                            <a href="#"><?php ?></a>
                                        </td>

                                        <td>
                                            <a href=""><button
                                                    class="btn btn-primary btn-xs"><i
                                                        class="fa fa-pencil"></i></button></a>
                                            <a href="crud.php?delete_id=<?php ?>"
                                                onclick="return confirm('Are you sure you want to delete this item?');"><button
                                                    class="btn btn-danger btn-xs"><i
                                                        class="fa fa-trash-o "></i></button></a>
                                        </td>
                                    </tr>

                                 
                                    <!-- loop ends -->

                                </tbody>
                            </table>
                            <!--//TABLE ENDS -->
                        </div>
                        <!-- /content-panel -->
                    </div>
                    <!-- /col-md-12 -->
                </div>
                <!-- /row -->

                <!-- ********** I ********* -->

                <!-- row -->
                <div class="row mt">
                    <div class="col-md-12">
                        <div class="content-panel">
                            <!-- TABLE STARTS -->
                            <table class="table table-striped table-advance table-hover">
                                <h4> Individual Honors</h4>
                                <hr>
                                <thead>
                                    <tr>
                                        <th><i class="fa fa-user" aria-hidden="true"></i> Honor Name</th>
                                        <th><i class="fa fa-user" aria-hidden="true"></i> Person Name</th>
                                        <th><i class="fa fa-user" aria-hidden="true"></i> Honor Date </th>
                                        <th><i class=" fa fa-location-arrow"></i> Action</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                    <!-- Loop through the matches table and pull out information to display -->
                                    <tr>
                                        <td>
                                            <a href="#"><?php  ?></a>
                                        </td>
                                        <td>
                                            <a href="#"><?php  ?></a>
                                        </td>
                                        <td>
                                            <a href="#"><?php ?></a>
                                        </td>

                                        <td>
                                            <a href="editIndivHonor.php?id=<?php ?>"><button
                                                    class="btn btn-primary btn-xs"><i
                                                        class="fa fa-pencil"></i></button></a>
                                            <a href="crud.php?delete_id=<?php ?>"
                                                onclick="return confirm('Are you sure you want to delete this item?');"><button
                                                    class="btn btn-danger btn-xs"><i
                                                        class="fa fa-trash-o "></i></button></a>
                                        </td>
                                    </tr>

                                  
                                    <!-- loop ends -->

                                </tbody>
                            </table>
                            <!--//TABLE ENDS -->
                        </div>
                        <!-- /content-panel -->
                    </div>
                    <!-- /col-md-12 -->
                </div>
                <!-- /row -->
            </section>

        </section>
        <!-- /MAIN CONTENT -->
        <!--main content end-->

        <div class="add-indiv-honor">
            <a title="Individual honour" href="addIndivHonor.php" id="add-indiv-honor-btn"><i class="bi bi-plus-circle-fill"></i></a>
        </div>
        <div class="add-team-honor">
            <a title="Add a team honour" href="addTeamHonor.php" id="add-team-honor-btn"><i class="bi bi-plus-circle-fill"></i></a>
        </div>

        <div class="add-honor">
            <a title="Add an honour" href="addHonor.php" id="add-btn"><i class="bi bi-plus-circle-fill"></i></a>
        </div>


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