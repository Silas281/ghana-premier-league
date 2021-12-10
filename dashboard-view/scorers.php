<?php
/*
@author Silas Sangmin
Date started: 
Date completed: 
Description: A mini project for the Web Tech Class 
*/

include_once('crud.php');

 
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
              <table class="table table-striped table-advance table-hover">
                <h4> Players Records</h4>
                <hr>
                <thead>
                  <tr>
                  <th><i class="fa fa-user" aria-hidden="true"></i> First Name</th>
                    <th><i class="fa fa-user" aria-hidden="true"></i> Last Name</th>
                    <th><i class="fa fa-user" aria-hidden="true"></i> Team Name </th>
                    <th><i class="fa fa-user" aria-hidden="true"></i> Goals</th>
                   
                    <th><i class=" fa fa-location-arrow"></i> Action</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                <!--<?php foreach ($athletes as $athleteRecords): ?>-->
                  <tr>
                    <td>
                      <a href="#"><?php echo $athleteRecords['fname']; ?></a>
                    </td>
                    <td>
                      <a href="#"><?php echo $athleteRecords['lname']; ?></a>
                    </td>
                    <td>
                      <a href="#"><?php echo $athleteRecords['team_name']; ?></a>
                    </td>
                    <td>
                      <a href="#"><?php echo $athleteRecords['position']; ?></a>
                    </td>
                   
                    <td>
                      <a href="editScorer.php?id=<?php echo $athleteRecords['person_id']?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                      <a href="crud.php?delete_id=<?php echo $athleteRecords['person_id']?>" onclick="return confirm('Are you sure you want to delete this item?');"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                    </td>                  
                  </tr>
                  <!--<?php endforeach; ?>-->
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
      </section>
      <div class="add-scorer">
            <a title="Add a scorer" href="addScorer.php" id="add-btn" ><i class="bi bi-plus-circle-fill"></i></a>
        </div>
    </section>
    <!-- /MAIN CONTENT -->   
  </section>
  
</body>

</html>
