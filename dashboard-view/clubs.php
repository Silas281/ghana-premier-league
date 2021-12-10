<?php
/*
@author Silas Sangmin
Date started: 
Date completed: 
Description: A mini project for the Web Tech Class 
*/

require_once( __DIR__."../../controller/clubs_controller.php"); 

  $clubObj = new ClubController();
 
  $clubs = $clubObj->selectAllClubs();
  $owner=$clubObj->selectOwner(400004);
 
  //print_r($clubs);
 
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
    <section id="main-content">
      <section class="wrapper">
        <!-- row -->
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover table-responsive">
                <h4> Clubs</h4>
                <hr>
                <thead>
                  <tr>
                  <th><i class="fa fa-user" aria-hidden="true"></i> Club Name</th>
                    <th><i class="fa fa-user" aria-hidden="true"></i> Manager</th>
                    <th><i class="fa fa-user" aria-hidden="true"></i> Owner </th>
                    <th><i class="fa fa-user" aria-hidden="true"></i> Location</th>
                    <th><i class="fa fa-user" aria-hidden="true"></i> No of Numbers </th>
                    <th><i class=" fa fa-location-arrow"></i> Action</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($clubs as $club){

                   ?>
                  <tr>
                    <td>
                      <a href="#"><?php echo $club['club_name']; ?></a>
                    </td>
                    <td>
                      <a href="#"><?php echo $club['coach_id']; ?></a>
                    </td>
                    <td>
                      <a href="#"><?php echo $club['owner_id']; ?></a>
                    </td>
                    <td>
                      <a href="#"><?php echo $club['location']; ?></a>
                    </td>
                    <td>
                      <a href="#"><?php echo $club['num_members']; ?></a>
                    </td>
                    <td>
                      <a href="editClub.php?club_name=<?php echo $club['club_name']?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                      <a href="crud.php?club_name=<?php echo $club['club_name']?>" onclick="return confirm('Are you sure you want to delete this item?');"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                    </td>                  
                  </tr>
                  <?php
                   }
                  ?>
                </tbody>
              </table>
                <!-- Button trigger modal - add advisor -->
        <div class="add-club">
            <a title="Add a Club" href="addClub.php" id="add-btn" ><i class="bi bi-plus-circle-fill"></i></a>
        </div>



        <!-- Modal Form -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title px-5" id="exampleModalLabel">Add Person</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!--Form-->
                        <form class="row g-3 px-5 px-2">
                            <div class="col-md-12">
                                <label for="inputName" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="inputName">
                            </div>
                            <div class="col-md-12">
                                <label for="emailInput" class="form-label">Emial</label>
                                <input type="email" class="form-control" id="emailInput" name="email">
                            </div>
                            <div class="col-12">
                                <label for="inputBio" class="form-label">Bio</label>
                                <textarea name="bio" class="form-control" id="inputAddress" rows="3"
                                    placeholder="A third year student intereted in ..."></textarea>
                            </div>
                            <div class="col-12">
                                <label for="inputTel" class="form-label">Telephone Number</label>
                                <input type="text" name="telephone" class="form-control" id="inputTel"
                                    placeholder="+233542893998">
                            </div>
                            <div class="col-md-12">
                                <label for="inputClass" class="form-label">Class</label>
                                <input type="text" name="class" class="form-control" id="inputClass">
                            </div>
                            <div class="col-md-12">
                                <label for="inputBookLink" class="form-label">Booking Link</label>
                                <input type="url" name="booking-link" class="form-control" id="inputBookLink">
                            </div>
                            <div class="col-md-6">
                                <label for="inputType" class="form-label">Type</label>
                                <select id="inputType" name="type" class="form-select">
                                    <option selected>Advisor</option>
                                    <option>CPA</option>

                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputZip" class="form-label">Department</label>
                                <select id="inputType" class="form-select" name="dept">
                                    <option selected>CS</option>
                                    <option>MIS</option>
                                    <option>EE</option>
                                    <option>BA</option>
                                    <option>ME</option>
                                    <option>CE</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-custum-color">Add Person</button>
                        </form>
                        <!--/Form-->
                    </div>
                </div>
            </div>

        </div>
            </div>
            <!-- /content-panel -->
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
