<?php
/*
@author Silas Sangmin
Date started: 
Date completed: 
Description: A mini project for the Web Tech Class 
*/

require __DIR__."../../controller/person_controller.php"; 

  $personsObj = new PersonController();
  $persons=array();
  $persons=$personsObj->selectAllPersons();
 
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
                <h4>Persons</h4>
                <hr>
                <thead>
                  <tr>
                  <th><i class="fa fa-user" aria-hidden="true"></i> First Name</th>
                    <th><i class="fa fa-user" aria-hidden="true"></i> Last Name</th>
                    <th><i class="fa fa-user" aria-hidden="true"></i> Email</th>
                    <th><i class="fa fa-user" aria-hidden="true"></i> Telephone </th>
                    <th><i class="fa fa-user" aria-hidden="true"></i> DOB </th>
                    <th><i class=" fa fa-location-arrow"></i> Action</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach ($persons as $person){ 
                  ?>

                  <tr>
                    <td>
                      <a href="#"><?php echo $person['fname']; ?></a>
                    </td>
                    <td>
                      <a href="#"><?php echo $person['lname']; ?></a>
                    </td>
                    <td>
                      <a href="#"><?php echo $person['email']; ?></a>
                    </td>
                    <td>
                      <a href="#"><?php echo $person['telNo']; ?></a>
                    </td>
                    <td>
                      <a href="#"><?php echo $person['dob']; ?></a>
                    </td>
                    <td>
                      <a href="editPerson.php?id=<?= $person['person_id']?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                      <a href="crud.php?delete_id=<?= $person['person_id']?>" onclick="return confirm('Are you sure you want to delete this item?');"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                    </td>                  
                  </tr>
                <?php 
                }
                  ?>
                </tbody>
              </table>

            </div>
            
            <!-- /content-panel -->
          </div>
          <div class="add-person">
            <a title="Add a person" href="addPerson.php" id="add-btn" ><i
                    class="bi bi-person-plus-fill"></i></a>
        </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!-- /MAIN CONTENT -->   
  </section>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>


