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
                <h4> sponsors Records</h4>
                <hr>
                <thead>
                  <tr>
                  <th><i class="fa fa-user" aria-hidden="true"></i> Sponsor Name</th>
                    <th><i class="fa fa-user" aria-hidden="true"></i> Location</th>
                    <th><i class="fa fa-user" aria-hidden="true"></i> Offer </th>
                    <th><i class="fa fa-user" aria-hidden="true"></i> email</th>
                    <th><i class="fa fa-user" aria-hidden="true"></i> Telephone</th>
                    <th><i class=" fa fa-location-arrow"></i> Action</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
               
                  <tr>
                    <td>
                      <a href="#"><?php ?></a>
                    </td>
                    <td>
                      <a href="#"><?php  ?></a>
                    </td>
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
                      <a href="editSponsor.php?id=<?php echo $athleteRecords['person_id']?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                      <a href="crud.php?delete_id=<?php echo $athleteRecords['person_id']?>" onclick="return confirm('Are you sure you want to delete this item?');"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                    </td>                  
                  </tr>
                
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
      </section>
      <div class="add-sponsor">
            <a title="Add aa sponsor" href="addSponsor.php" id="add-btn"><i class="bi bi-plus-circle-fill"></i></a>
        </div>
    </section>
    <!-- /MAIN CONTENT -->   
  </section>


  
</body>

</html>
