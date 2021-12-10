<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>GHANA PREMIER LEAGUE</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>" >
</head>

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
                    <th><i class="fa fa-user" aria-hidden="true"></i> DOB </th>
                    <th><i class="fa fa-user" aria-hidden="true"></i> Email</th>
                    <th><i class="fa fa-user" aria-hidden="true"></i> Telephone </th>
                    <th><i class=" fa fa-location-arrow"></i> Action</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach ($persons as $person): ?>
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
                      <a href="editPlayer.php?id=<?php echo $person['person_id']?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                      <a href=".php?delete_id=<?php echo $athleteRecords['person_id']?>" onclick="return confirm('Are you sure you want to delete this item?');"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                    </td>                  
                  </tr>
                  <!--<?php endforeach; ?>-->
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


  
</body>

</html>